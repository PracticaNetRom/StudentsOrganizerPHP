<?php
namespace Practica\Model\Student;

use Practica\Model\Base\BaseTable;

class StudentTable extends BaseTable {

    public function getTableName()
    {
        return 'students' ;
    }

}