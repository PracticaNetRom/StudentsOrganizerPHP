<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Marius
 * Date: 08.07.2015
 * Time: 12:22
 * To change this template use File | Settings | File Templates.
 */

namespace Practica\Model;


class Deparments extends DeparmentsTable{
    private $id;
    private $name;

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }



}