<?php
/**
 * Created by PhpStorm.
 * User: klLaUuDyYu
 * Date: 7/8/2015
 * Time: 12:49 AM
 */

namespace Practica\Model\Event;

use Practica\Model\Base\BaseTable;

class EventTable extends BaseTable {
    public function getTableName(){
        return "events";
    }
}