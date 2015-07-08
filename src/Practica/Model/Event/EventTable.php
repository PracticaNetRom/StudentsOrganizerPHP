<?php


namespace Practica\Model\Event;

use Practica\Model\Base\BaseTable;

class EventTable extends BaseTable {
    public function getTableName(){
        return "events";
    }
}