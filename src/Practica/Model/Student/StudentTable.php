<?php
/**
 * Created by PhpStorm.
 * User: laboratory1
 * Date: 7/6/2015
 * Time: 4:18 PM
 */

namespace Practica\Model\Student;

use Practica\Model\Base\BaseTable;

class StudentTable extends BaseTable{
    public function getTableName(){
        return "students";
    }
}