<?php
/**
 * Created by PhpStorm.
 * User: Bibu
 * Date: 7/7/2015
 * Time: 11:30 PM
 */

namespace Practica\Model\Departament;

use Practica\Model\Base\BaseTable;

class DepartmentTable  extends BaseTable
{

    public function getTableName (){
        return 'departments';
    }

}