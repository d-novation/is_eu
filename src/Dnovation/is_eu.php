<?php

namespace Dnovation;

//use Dnovation\IsEu;

if (! function_exists('is_EU')) {
    function is_EU(string $country_code):bool
    {
        return IsEu::check($country_code);
    }
}
