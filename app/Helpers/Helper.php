<?php
namespace App\Helpers;
use Illuminate\Support\Facades\DB;

class Helper
{

    

    public static function shout(string $string)
    {
        return strtoupper($string);
    }


    public static function city()
    {        
        
        $city = 'ola';

            return ($city);
    }





}