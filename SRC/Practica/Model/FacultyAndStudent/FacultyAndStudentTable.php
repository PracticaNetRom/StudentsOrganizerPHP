<?php
/**
 * Created by PhpStorm.
 * User: klLaUuDyYu
 * Date: 7/8/2015
 * Time: 12:54 AM
 */

namespace Practica\Model\FacultyAndStudent;

use Practica\Model\Base\BaseTable;

class FacultyAndStudentTable extends BaseTable {
    public function getTableName(){
        return "faculies_has_students";
    }
}