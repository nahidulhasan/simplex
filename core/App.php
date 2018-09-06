<?php

class App
{
    protected  static  $registry = [];


    public static function bind($key, $value)
    {

        static::$registry[$key] = $value;

    }


    public static function get($key)
    {
        if(!array_key_exists($key, static::$registry))
        {
            throw new Exception("No {$key} is bind in this container");

        }

        return static::$registry[$key];
    }
}
