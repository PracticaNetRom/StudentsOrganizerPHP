<?php
/**
 * Created by PhpStorm.
 * User: Bibu
 * Date: 7/10/2015
 * Time: 12:24 AM
 */

namespace Practica\Model;


abstract class BaseTable {

    abstract public function getTableName();

    public function findAll (){
        try {
            $dbh = \Practica\Connections\Database::getInstance();

            $query='SELECT * from '.$this->getTableName();
            $statement=$dbh->prepare($query);
            $statement->setFetchMode(\PDO::FETCH_CLASS,str_replace('Table', '', get_class($this)));
            $statement->execute();
            return $statement->fetchAll();

        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
}

