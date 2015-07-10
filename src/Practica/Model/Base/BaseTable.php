<?php
/**
 * Created by PhpStorm.
 * User: laboratory1
 * Date: 7/6/2015
 * Time: 4:35 PM
 */

namespace Practica\Model\Base;


abstract class BaseTable {


    public function findAll(){
        try {

            $dbh = \Practica\Connections\Database::getInstance();
            $query='SELECT * from '.$this->getTableName();
            $statement=$dbh->prepare($query);
            $statement->setFetchMode(\PDO::FETCH_CLASS, str_replace('Table','',get_class($this)));
            $statement->execute();
            return $statement->fetchAll();

        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public function insert(){
        try {

            $dbh = \Practica\Connections\Database::getInstance();
            $query='SELECT * from '.$this->getTableName();


        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public function insert(){
        try {

            $dbh = \Practica\Connections\Database::getInstance();
            $query="INSERT INTO {$this->getTableName()} (first_name, last_name,gender,birth_date, email)
VALUES ('Ionescu', 'George',1,'1993-05-04','IonescuG@yahoo.com')";
            $statement=$dbh->prepare($query);
            $statement->execute();

        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }




    abstract function getTableName();




}