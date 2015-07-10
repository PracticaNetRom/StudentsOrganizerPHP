<?php
/**
 * Created by PhpStorm.
 * User: Voicu
 * Date: 7/7/2015
 * Time: 6:05 PM
 */

namespace Practica\Model\Faculty;

use Practica\Model\Base\BaseTable;


class FacultyTable extends BaseTable
{
    public function getTableName()
    {
        return 'faculties';
    }
}