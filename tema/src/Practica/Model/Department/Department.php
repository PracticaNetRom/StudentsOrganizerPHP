<?php
/**
 * Created by PhpStorm.
 * User: Voicu
 * Date: 7/7/2015
 * Time: 5:32 PM
 */

namespace Practica\Model\Department;


class Department {
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    public $id;
    public $name;

}