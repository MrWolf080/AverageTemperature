<?php
    require_once 'count_simple_averages.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
          crossorigin="anonymous">
    <title>Средние значения</title>
</head>
<body>
<div class="container">
    <h1>Среднее по дням</h1>
    <table border="1" cellpadding="5">
        <tr><th>Дата</th><th>Среднее</th></tr>
        <?php
            foreach ($dayAverages as $date=>$average)
            {
                ?>
                <tr><td><?php echo $date; ?></td><td><?php echo $average;?></td></tr>
                <?php
            }
        ?>
    </table>
    <br>
    <h1>Среднее по неделям</h1>
    <table border="1" cellpadding="5">
        <tr><th>Неделя</th><th>Среднее</th></tr>
        <?php
        foreach ($weekAverages as $week=>$average)
        {
            ?>
            <tr><td><?php echo $week; ?></td><td><?php echo $average;?></td></tr>
            <?php
        }
        ?>
    </table>
    <br>
    <h1>Среднее по месяцам</h1>
    <table border="1" cellpadding="5">
        <tr><th>Месяц</th><th>Среднее</th></tr>
        <?php
        foreach ($monthAverages as $month=>$average)
        {
            ?>
            <tr><td><?php echo $month; ?></td><td><?php echo $average;?></td></tr>
            <?php
        }
        ?>
    </table>
</div>
</body>
</html>
