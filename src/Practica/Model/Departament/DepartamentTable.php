<?php
/**
 * Created by PhpStorm.
 * User: klLaUuDyYu
 * Date: 7/8/2015
 * Time: 12:49 AM
 */

namespace Practica\Model\Departament;

use Practica\Model\Base\BaseTable;

class DepartamentTable extends BaseTable {

    public function getTableName(){
        return "departaments";
    }
}