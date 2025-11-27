<?php

namespace Creational\singleton;

class DB
{
    private static $instance;
    private function __construct(){}

    public static function connect()
    {
        if (self::$instance === null){
            $instance = new self();
            self::$instance = $instance->dbConnect();
        }
        return self::$instance;
    }

    private function dbConnect()
    {
        return 'connect to db';
    }
}
DB::connect();