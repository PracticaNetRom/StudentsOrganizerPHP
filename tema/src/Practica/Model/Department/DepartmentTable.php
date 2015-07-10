<?php
/**
 * Created by PhpStorm.
 * User: Voicu
 * Date: 7/7/2015
 * Time: 5:32 PM
 */

namespace Practica\Model\Department;

use Practica\Model\Base\BaseTable;

class DepartmentTable  extends BaseTable
{

    public function getTableName (){
        return 'departments';
    }

}