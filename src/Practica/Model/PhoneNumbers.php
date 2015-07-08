<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Marius
 * Date: 08.07.2015
 * Time: 12:28
 * To change this template use File | Settings | File Templates.
 */

namespace Practica\Model;


class PhoneNumbers extends PhoneNumbersTable{

    private $id;
    private $number;
    private $students_id;
    private $phone_number_types;

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setNumber($number)
    {
        $this->number = $number;
    }

    public function getNumber()
    {
        return $this->number;
    }

    public function setPhoneNumberTypes($phone_number_types)
    {
        $this->phone_number_types = $phone_number_types;
    }

    public function getPhoneNumberTypes()
    {
        return $this->phone_number_types;
    }

    public function setStudentsId($students_id)
    {
        $this->students_id = $students_id;
    }

    public function getStudentsId()
    {
        return $this->students_id;
    }




}