<?php
/**
 * Created by PhpStorm.
 * User: laboratory1
 * Date: 7/6/2015
 * Time: 4:18 PM
 */

namespace Practica\Model\Student;

use Practica\Model\Base\BaseTable;

class StudentTable extends BaseTable{
    public function getTableName(){
        return "students";
    }

    public function insert($data){


         try {

            $dbh = \Practica\Connections\Database::getInstance();
             $query="INSERT INTO students(first_name, last_name, birth_date, gender, email)
             values ('". $data->getFirstName()."',
                '".$data->getLastName()."',
                '".$data->getBirthDate()->format('Y-m-d')."',
                '".$data->getGender()."',
                '".$data->getEmail()."')";
            $statement= $dbh->prepare($query);

            $statement->execute();

        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }


}