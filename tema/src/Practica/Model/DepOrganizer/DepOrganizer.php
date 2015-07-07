<?php
/**
 * Created by PhpStorm.
 * User: Voicu
 * Date: 7/7/2015
 * Time: 5:50 PM
 */

namespace Practica\Model\DepOrganizer;


class DepOrganizer {
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
    public function getDepartmentsId()
    {
        return $this->departments_id;
    }

    /**
     * @param mixed $departments_id
     */
    public function setDepartmentsId($departments_id)
    {
        $this->departments_id = $departments_id;
    }

    public $id;
    public $events_id;
    public $departments_id;
}