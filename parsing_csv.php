<?php
    //Доделать скип поврежденных данных, если останется время
    function parse_csv($csvFile)
    {
        $csv = array_map('str_getcsv', file($csvFile));
        $data = array();

        foreach ($csv as $row) {
            // Скип шапки
            if ($row[0] === 'Местное время в Москве (центр') {
                continue;
            }
            // Сплит через ;
            $parts = explode(';', $row[0]);
            $data[] = array(
                0 => $parts[0],
                1 => $parts[1]
            );
        }
        return $data;
    }
?>