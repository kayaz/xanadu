<?php

if (! function_exists('tableDatesAndPrices')) {
    function tableDatesAndPrices($data, $remove = 0)
    {
        $lines = explode("\n", $data);

        if($remove){
            unset($lines[0]);
        }

        $result = [];

        foreach ($lines as $line) {
            $parts = explode(';', $line);

            $formatted_start = $parts[0];
            $formatted_end = $parts[1];
            $price = $parts[2];

            $result[] = "<tr><td>$formatted_start</td><td>$formatted_end</td><td>$price</td></tr>";
        }

        return implode("\n", $result);
    }
}