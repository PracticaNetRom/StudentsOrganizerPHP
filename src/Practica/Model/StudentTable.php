<?php
/**
 * Created by PhpStorm.
 * User: laboratory1
 * Date: 7/6/2015
 * Time: 4:19 PM
 */

namespace Practica\Model;


use Practica\Model\Base\BaseTable;

class StudentTable extends BaseTable{


    public function getTableName(){
        return "students";
    }


}

