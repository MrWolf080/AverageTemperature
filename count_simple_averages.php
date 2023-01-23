<?php
    require_once 'parsing_csv.php';
    $csv = 'weather_statistics.csv';
    $movingAverageWindow=7;
    $data=parse_csv($csv);

    $dayAverages = array();
    $weekAverages = array();
    $monthAverages = array();

    foreach ($data as $row)
    {
        $date = $row[0];
        $temp = (double) $row[1];

        $dateTime = DateTime::createFromFormat("d.m.Y H:i", $date);
        // Преобразование даты
        $day = $dateTime->format("d.m.Y");
        $week = $dateTime->format("W");
        $month = $dateTime->format("m.Y");
        // Дневное среднее
        if (!isset($dayAverages[$day]))
        {
            $dayAverages[$day] = array(
                "count" => 1,
                "sum" => $temp
            );
        } else
        {
            $dayAverages[$day]["count"]++;
            $dayAverages[$day]["sum"] += $temp;
        }
        // Недельное среднее
        if (!isset($weekAverages[$week]))
        {
            $weekAverages[$week] = array(
                "count" => 1,
                "sum" => $temp
            );
        } else
        {
            $weekAverages[$week]["count"]++;
            $weekAverages[$week]["sum"] += $temp;
        }
        // Месячное среднее
        if (!isset($monthAverages[$month]))
        {
            $monthAverages[$month] = array(
                "count" => 1,
                "sum" => $temp
            );
        } else
        {
            $monthAverages[$month]["count"]++;
            $monthAverages[$month]["sum"] += $temp;
        }
    }
    foreach ($dayAverages as $day => $average)
    {
        $dayAverages[$day] = $average["sum"] / $average["count"];
    }
    foreach ($weekAverages as $week => $average)
    {
        $weekAverages[$week] = $average["sum"] / $average["count"];
    }
    foreach ($monthAverages as $month => $average)
    {
        $monthAverages[$month] = $average["sum"] / $average["count"];
    }
?>