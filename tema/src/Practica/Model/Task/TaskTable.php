<?php
/**
 * Created by PhpStorm.
 * User: Voicu
 * Date: 7/7/2015
 * Time: 6:28 PM
 */

namespace Practica\Model\Task;
use Practica\Model\Base\BaseTable;


class TaskTable extends BaseTable
{
    public function getTableName()
    {
        return'tasks';
    }
}