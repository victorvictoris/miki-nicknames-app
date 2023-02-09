<?php


namespace App\Helpers;


use App\Domain\View\Greetings;
use Carbon\Carbon;
use function Nette\Utils\match;

class Greet
{
    public static function getCurrentGreet()
    {
        $hour =  Carbon::now()->format('H');

        if ($hour > 5 && $hour < 12) {
            return self::morningGreet();
        }
        if ($hour > 12 && $hour < 23) {
            return self::afternoonGreet();
        }
        return self::eveningGreet();
    }

    public static function morningGreet()
    {
        return collect(Greetings::$morningGreet)->random();
    }

    public static function afternoonGreet()
    {
        return collect(Greetings::$afternoonGreet)->random();
    }

    public static function eveningGreet()
    {
        return collect(Greetings::$eveningGreet)->random();
    }
}
