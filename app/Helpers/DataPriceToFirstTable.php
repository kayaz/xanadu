<?php

if (! function_exists('tableFirstDatesAndPrices')) {
    function tableFirstDatesAndPrices($data)
    {
        $parts = explode("\n", $data);
        $data = explode(';', $parts[0]);
        return "<td>$data[0]</td><td>$data[1]</td><td>$data[2]</td>";
    }
}