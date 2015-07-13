<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Marius
 * Date: 08.07.2015
 * Time: 12:27
 * To change this template use File | Settings | File Templates.
 */

namespace Practica\Model;


use Practica\Model\Base\BaseTable;

class TasksTable extends BaseTable {

    public function getTableName(){
        return 'tasks';
    }


    public function insert($data){

        try {

            $dbh = \Practica\Connections\Database::getInstance();
            $query="INSERT INTO tasks (name, description,events_id)
            VALUES ('".$data->getName()."',
            '".$data->getDescription()."',
            '".$data->getEventsId()."')";

            $statement=$dbh->prepare($query);
            return $statement->execute();

        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

}