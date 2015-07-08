<?php
/**
 * Created by PhpStorm.
 * User: klLaUuDyYu
 * Date: 7/8/2015
 * Time: 12:53 AM
 */

namespace Practica\Model\DeparOrganizer;

use Practica\Model\Base\BaseTable;

class DeparOrganizerTable extends BaseTable {
    public function getTableName(){
        return "departament_organizes_event";
    }
}