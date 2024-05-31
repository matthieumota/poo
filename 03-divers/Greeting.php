<?php

class Greeting
{
    public static string $who = 'World';

    public static function welcome()
    {
        echo "Bonjour " . self::$who;
    }

    public static function dump($var)
    {
        var_dump($var);
    }

    public function goodBye()
    {
        echo "Au revoir " . self::$who;
    }
}
