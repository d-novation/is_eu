<?php

namespace Dnovation;

class IsEu
{
    public static function check(string $country_code):bool
    {
        $eu_countries = explode(',','BE,BG,CZ,DK,DE,EE,IE,EL,ES,FR,HR,IT,CY,LV,LT,LU,HU,MT,NL,AT,PL,PT,RO,SI,SK,FI,SE');

        return in_array(strtoupper($country_code), $eu_countries);
    }
}