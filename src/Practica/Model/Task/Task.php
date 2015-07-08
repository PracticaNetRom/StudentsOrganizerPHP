<?php
/**
 * Created by PhpStorm.
 * User: klLaUuDyYu
 * Date: 7/8/2015
 * Time: 1:22 AM
 */

namespace Practica\Model\Task;


class Task {
    private $name;
    private $descriptions;
    private $events_id;

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

    /**
     * @return mixed
     */
    public function getEventsId()
    {
        return $this->events_id;
    }

    /**
     * @param mixed $events_id
     */
    public function setEventsId($events_id)
    {
        $this->events_id = $events_id;
    }

    /**
     * @return mixed
     */
    public function getDescriptions()
    {
        return $this->descriptions;
    }

    /**
     * @param mixed $descriptions
     */
    public function setDescriptions($descriptions)
    {
        $this->descriptions = $descriptions;
    }

}