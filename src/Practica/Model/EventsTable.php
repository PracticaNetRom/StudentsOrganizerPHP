<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Marius
 * Date: 08.07.2015
 * Time: 12:32
 * To change this template use File | Settings | File Templates.
 */

namespace Practica\Model;


use Practica\Model\Base\BaseTable;

class EventsTable extends BaseTable{

    public function getTableName(){
        return 'events';
    }

}