<?php
/**
 * Created by PhpStorm.
 * User: laboratory1
 * Date: 7/6/2015
 * Time: 3:45 PM
 */

namespace Practica\Connections;


class Database {
    private static $instance;

    public static function getInstance()
    {
        if (null === static::$instance) {
            $user='root';
            $pass='123456';
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