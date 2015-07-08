<?php
/**
 * Created by PhpStorm.
 * User: Voicu
 * Date: 7/7/2015
 * Time: 6:24 PM
 */

namespace Practica\Model\StudentParticipate;
use Practica\Model\Base\BaseTable;


class StudentParticipateTable extends BaseTable
{
    public function getTableName ()
    {
        return'students_participates';
    }
}