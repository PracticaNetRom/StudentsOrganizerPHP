<?php
/**
 * Created by PhpStorm.
 * User: klLaUuDyYu
 * Date: 7/8/2015
 * Time: 1:13 AM
 */

namespace Practica\Model\PhoneNumberType;

use Practica\Model\Base\BaseTable;

class PhoneNumberTypeTable extends BaseTable {
    public function getTableName(){
        return "phone_number_types";
    }
}