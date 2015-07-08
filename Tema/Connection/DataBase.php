<?php
/**
 * Created by PhpStorm.
 * User: Bibu
 * Date: 7/7/2015
 * Time: 10:51 PM
 */

namespace Practica\Connection;


class Database {
    private static $instance;

    public static function getInstance()
    {
        if (null === static::$instance) {
            $user='root';
            $pass='stefania03';
            $database='studentsorganizer';
            static::$instance = new \PDO('mysql:host=localhost;dbname='.  $database, $user, $pass);

        }

        return static::$instance;
    }

    protected function __construct()
    {
    }


    private function __clone()
    {
    }

    private function __wakeup()
    {
    }
}