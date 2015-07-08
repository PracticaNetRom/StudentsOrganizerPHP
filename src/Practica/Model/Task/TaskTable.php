<?php
/**
 * Created by PhpStorm.
 * User: klLaUuDyYu
 * Date: 7/8/2015
 * Time: 1:22 AM
 */

namespace Practica\Model\Task;

use Practica\Model\Base\BaseTable;

class TaskTable extends BaseTable {
    public function getTableName(){
        return "tasks";
    }
}