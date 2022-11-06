<?php

namespace App\Helpers;

class CompanyTypeHelper
{
    public static function mask(int $type)
    {
        $ct = "";
        switch ($type) {
            case 1:
                $ct = 'Total';
                break;
            case 2:
                $ct = 'Parcial';
                break;
        };
        return $ct;
    }
}
