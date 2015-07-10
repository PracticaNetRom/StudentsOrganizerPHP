<?php
namespace Practica\Model;

use Practica\Model\Base\BaseTable;

class StudentTable extends BaseTable {

    public function getTableName()
    {
        return 'students';

    }

    public function insert($student){

        try {
            $dbh = \Practica\Connections\Database::getInstance();
            $query= "INSERT INTO students (first_name, last_name,gender, birth_date,email)
VALUES (
        '".$student->getFirstName()."',
         '".$student->getLastName()."',
         '".$student->getGender()."',
          '".$student->getBirthDate()->format('Y-m-d H:i:s')."',
          '".$student->getEmail()."'
          )";

            $statement=$dbh->prepare($query);
            return $statement->execute();

        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

}

