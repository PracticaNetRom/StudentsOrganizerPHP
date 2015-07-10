<?php

namespace Practica\Model;


use Practica\Model\Base\BaseTable;

class StudentTable extends BaseTable
{

    public function getTableName()
    {
        return "students";
    }
    public function insert($data)

    {

        $dbh= \Practica\Connection\Database::getInstance();

        $query="INSERT INTO students (first_name,last_name,gender,birth_date,email)
                values ('".
                $data->getFirstName()."','".
                $data->getLastName()."',".
                $data->getGender().",'".
                $data->getBirthDay()->format('Y-m-d H:i:s')."','".
                $data->getEmail()."')";

        $statement = $dbh->prepare($query);
        return $statement->execute();
    }
}