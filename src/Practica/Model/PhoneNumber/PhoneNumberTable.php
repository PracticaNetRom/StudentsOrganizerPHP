<?php
/**
 * Created by PhpStorm.
 * User: klLaUuDyYu
 * Date: 7/8/2015
 * Time: 12:55 AM
 */

namespace Practica\Model\PhoneNumber;

use Practica\Model\Base\BaseTable;

class PhoneNumberTable extends BaseTable {
    public function getTableName(){
        return "phone_numbers";
    }
}