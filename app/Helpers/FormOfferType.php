<?php

if (! function_exists('form_offer_type')) {
    function form_offer_type(int $number): string
    {
        return match ($number) {
            1 => 'Pokój',
            2 => 'Domek',
            default => '',
        };
    }
}
