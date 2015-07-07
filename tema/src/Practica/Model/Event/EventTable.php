<?php
/**
 * Created by PhpStorm.
 * User: Voicu
 * Date: 7/7/2015
 * Time: 3:29 PM
 */

namespace Practica\Model\Event;
use Practica\Model\Base\BaseTable;


class EventTable extends BaseTable
{
    public function getTableName()
    {
        return 'events' ;
    }

}