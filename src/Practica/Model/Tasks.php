<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Marius
 * Date: 08.07.2015
 * Time: 12:25
 * To change this template use File | Settings | File Templates.
 */

namespace Practica\Model;


class Tasks extends TasksTable{

    private $id;
    private $name;
    private $description;
    private $events_id;

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setEventsId($events_id)
    {
        $this->events_id = $events_id;
    }

    public function getEventsId()
    {
        return $this->events_id;
    }

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