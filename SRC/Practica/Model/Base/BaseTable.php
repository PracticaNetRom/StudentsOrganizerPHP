<?php

namespace Practica\Model\Base;


abstract class BaseTable {
    abstract public function getTableName();
    public function findAll ()
    {
        try {
            $dbh = \Practica\Connections\Database::getInstance();
            $query= 'SELECT * from '.$this->getTableName();
            $statement= $dbh->prepare($query);
            $statement-> setFetchMode(\PDO::FETCH_CLASS,str_replace("Table","",get_class($this)));
            $statement->execute();
            return $statement->fetchAll();
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
    public function insert()
    {
        try {
            $dbh = \Practica\Connections\Database::getInstance();
            $query= 'INSERT * into '.$this->getTableName();

    }
}