<?php
/**
 * Created by PhpStorm.
 * User: Voicu
 * Date: 7/7/2015
 * Time: 6:15 PM
 */

namespace Practica\Model\FacultyStudent;

use Practica\Model\Base\BaseTable;


class FacultyStudentTable extends BaseTable
{
    public function getTableName()
    {
        return'faculties_has_students';
    }
}