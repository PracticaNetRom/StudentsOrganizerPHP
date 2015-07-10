<?php
/**
 * Created by PhpStorm.
 * User: klLaUuDyYu
 * Date: 7/8/2015
 * Time: 12:56 AM
 */

namespace Practica\Model\StudentParticipate;

use Practica\Model\Base\BaseTable;

class StudentParticipateTable extends BaseTable
{
    public function getTableName(){
        return "students_participates";
    }
}