<?php

namespace Practica\Model;


use Practica\Model\Base\BaseTable;

class StudentTable extends BaseTable
{

    public function getTableName()
    {
        return "students";
    }
}