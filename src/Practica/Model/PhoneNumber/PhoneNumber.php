<?php
/**
 * Created by PhpStorm.
 * User: klLaUuDyYu
 * Date: 7/8/2015
 * Time: 12:55 AM
 */

namespace Practica\Model\PhoneNumber;


class PhoneNumber {
    private $number;
    private $students_id;
    private $phone_number_types_id;

    /**
     * @return mixed
     */
    public function getPhoneNumberTypesId()
    {
        return $this->phone_number_types_id;
    }

    /**
     * @param mixed $phone_number_types_id
     */
    public function setPhoneNumberTypesId($phone_number_types_id)
    {
        $this->phone_number_types_id = $phone_number_types_id;
    }

    /**
     * @return mixed
     */
    public function getStudentsId()
    {
        return $this->students_id;
    }

    /**
     * @param mixed $students_id
     */
    public function setStudentsId($students_id)
    {
        $this->students_id = $students_id;
    }

    /**
     * @return mixed
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param mixed $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }
}