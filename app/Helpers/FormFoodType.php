<?php

if (! function_exists('form_food_type')) {
    function form_food_type(int $number): string
    {
        return match ($number) {
            0 => 'Brak',
            1 => 'Śniadanie',
            2 => 'Śniadanie + obiadokolacja',
            default => '',
        };
    }
}
