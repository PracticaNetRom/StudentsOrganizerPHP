<?php
/**
 * Created by PhpStorm.
 * User: Voicu
 * Date: 7/7/2015
 * Time: 5:51 PM
 */

namespace Practica\Model\DepOrganizer;

use Practica\Model\Base\BaseTable;


class DepOrganizerTable extends BaseTable
{
    public function getTableName()
    {
        return'departments_organizes_events';
    }
}