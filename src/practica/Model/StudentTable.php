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
        var_dump($data);

        $dbh= \Practica\Connection\Database::getInstance();

        $query="INSERT INTO students (first_name,last_name,gender,birth_date,email)
                values ('".
                $data['first_name']."','".
                $data['last_name']."',".
                $data['gender'].",'".
                $data['birth_day']->format('Y-m-d H:i:s')."','".
                $data['email']."')";
        $statement = $dbh->prepare($query);
        return $statement->execute();
    }
}