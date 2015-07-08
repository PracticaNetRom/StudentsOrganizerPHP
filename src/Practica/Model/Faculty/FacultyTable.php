<?php
/**
 * Created by PhpStorm.
 * User: klLaUuDyYu
 * Date: 7/8/2015
 * Time: 12:51 AM
 */

namespace Practica\Model\Faculty;

use Practica\Model\Base\BaseTable;

class FacultyTable extends BaseTable {
    public function getTableName(){
        return "faculties";
    }
}