<?php

namespace App\Helpers;

class CompanyTradeMarkHelper
{
    public static function mask(int $type)
    {
        if(!$type){
            return 'Não';
        }
        return "Sim";
    }
}
