<?php
/**
 * Created by PhpStorm.
 * User: laboratory1
 * Date: 7/6/2015
 * Time: 4:35 PM
 */

namespace Practica\Model\Base;


abstract class BaseTable {
    abstract public function getTableName();
    public function findAll()
    {
        try {
            $dbh= \Practica\Connection\Database::getInstance();
            //$dbh = new PDO('mysql:host=localhost;dbname=studentsorganizer', $user, $pass);
            $query='SELECT * from '.$this->getTableName();
            /** @var \PDOStatement $statement */
            $statement = $dbh->prepare($query);
            $statement->setFetchMode(\PDO::FETCH_CLASS, str_replace("Table","",get_class($this)));
            $statement->execute();
            return $statement->fetchAll();
            $dbh = null;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }


}