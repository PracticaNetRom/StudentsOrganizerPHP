<?php
/**
 * Created by PhpStorm.
 * User: klLaUuDyYu
 * Date: 7/8/2015
 * Time: 12:56 AM
 */

namespace Practica\Model\StudentParticipate;


class StudentParticipate {
    private $events_id;
    private $students_id;

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
}