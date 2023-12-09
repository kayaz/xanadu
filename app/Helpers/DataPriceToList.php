<?php

if (! function_exists('formatDatesAndPrices')) {
    function formatDatesAndPrices($data)
    {
        $lines = explode("\n", $data);
        $result = [];

        foreach ($lines as $line) {
            $parts = explode(';', $line);

            $formatted_start = $parts[0];
            $formatted_end = $parts[1];
            $price = $parts[2];

            $result[] = "<li>$formatted_start - $formatted_end: <strong>$price zł</strong></li>";
        }

        return implode("\n", $result);
    }

}