<?php
/**
 * Created by PhpStorm.
 * User: laboratory1
 * Date: 7/6/2015
 * Time: 4:18 PM
 */

namespace Practica\Model;

use Practica\Model\Base\BaseTable;

class StudentsTable extends BaseTable {


    public function getTableName(){

        return 'students';
    }


    public function insert($data){

        try {

            $dbh = \Practica\Connections\Database::getInstance();
            $query="INSERT INTO students (first_name, last_name,gender,birth_date, email)
            VALUES ('".$data->getFirstName()."',
            '".$data->getLastName()."',
            '".$data->getGender()."',
            '".$data->getBirthDate()->format('Y-m-d')."',
            '".$data->getEmail()."')";

            $statement=$dbh->prepare($query);
            return $statement->execute();

        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
}