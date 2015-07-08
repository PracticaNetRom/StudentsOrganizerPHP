<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Marius
 * Date: 08.07.2015
 * Time: 12:23
 * To change this template use File | Settings | File Templates.
 */

namespace Practica\Model;


use Practica\Model\Base\BaseTable;

class DeparmentsTable extends BaseTable {


    public function getTableName(){
        return 'departments';
    }

}