<?php

namespace Doctrine\DBAL;

class SchemaValidation
{

    static $flag = true;

    /**
     * @param bool $flag
     */
    public static function set($flag)
    {
        self::$flag = $flag;
    }

    /**
     * @return bool
     */
    public static function get()
    {
        return self::$flag;
    }
}