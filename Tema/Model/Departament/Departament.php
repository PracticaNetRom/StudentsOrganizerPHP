<?php
/**
 * Created by PhpStorm.
 * User: Bibu
 * Date: 7/7/2015
 * Time: 11:29 PM
 */

namespace Practica\Model\Departament;


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

