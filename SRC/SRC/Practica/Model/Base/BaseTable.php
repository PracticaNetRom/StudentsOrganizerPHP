<?php

namespace Practica\Model\Base;

abstract class BaseTable
{
    abstract public function getTableName();

    public function findAll()
    {
        try {
            $dbh = \Practica\Connections\Database::getInstance();
            $query = 'SELECT * from ' . $this->getTableName();
            $statement = $dbh->prepare($query);
            $statement->setFetchMode(\PDO::FETCH_CLASS, str_replace("Table", "", get_class($this)));
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
            $students= \Practica\Controllers\StudentController::$student;
            $query = "INSERT INTO {$this->getTableName()} (, last_name,gender,birth_date, email)
VALUES ('Marcu', 'Mircea',1,'1990-01-02','mirm@yahoo.com')";
            $statement = $dbh->prepare($query);
            $statement->execute();
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }



}