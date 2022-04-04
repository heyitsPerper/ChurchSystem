<?php

namespace App\Helpers;

class MonthHelper
{
    private static $months = [
        '1' => 'January',
        '2' => 'February',
        '3' => 'March',
        '4' => 'April',
        '5' => 'May',
        '6' => 'June',
        '7' => 'July',
        '8' => 'August',
        '9' => 'September',
        '10' => 'October',
        '11' => 'November',
        '12' => 'December'
    ];

    public static function getLongMonth($month)
    {
        return self::$months[$month];
    }

    public static function getMonths()
    {
        return self::$months;
    }
}
