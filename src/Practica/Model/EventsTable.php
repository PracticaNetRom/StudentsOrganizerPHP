<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Marius
 * Date: 08.07.2015
 * Time: 12:32
 * To change this template use File | Settings | File Templates.
 */

namespace Practica\Model;


use Practica\Model\Base\BaseTable;

class EventsTable extends BaseTable{

    public function getTableName(){
        return 'events';
    }



    public function insert($data){

        try {

            $dbh = \Practica\Connections\Database::getInstance();
            $query="INSERT INTO events (id,start_date, end_date,remarks)
            VALUES (".$data->getId()."'".$data->getStartDate()->format('Y-m-d H:i:s')."',
            '".$data->getEndDate()->format('Y-m-d H:i:s')."',
            '".$data->getRemarks()."')";

            $statement=$dbh->prepare($query);
            return $statement->execute();

        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
}

