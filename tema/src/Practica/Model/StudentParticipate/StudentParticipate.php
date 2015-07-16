<?php
/**
 * Created by PhpStorm.
 * User: Voicu
 * Date: 7/7/2015
 * Time: 6:23 PM
 */

namespace Practica\Model\StudentParticipate;


class StudentParticipate {
    public $id;

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
    public $events_id;
    public $students_id;

}