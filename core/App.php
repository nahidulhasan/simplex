<?php

namespace App\Core;


class App
{
    protected static $registry = [];

    /**
     * Assigned to the register key
     *
     * @param $key
     * @param $value
     */
    public static function bind($key, $value)
    {
        static::$registry[$key] = $value;
    }

    /**
     * Retrieve value
     *
     * @param $key
     * @return mixed
     */
    public static function get($key)
    {
        if (!array_key_exists($key, static::$registry)) {
            throw new Exception("No {$key} is bind in this container");

        }

        return static::$registry[$key];
    }
}
