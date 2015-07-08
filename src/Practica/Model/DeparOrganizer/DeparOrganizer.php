<?php
/**
 * Created by PhpStorm.
 * User: klLaUuDyYu
 * Date: 7/8/2015
 * Time: 12:52 AM
 */

namespace Practica\Model\DeparOrganizer;


class DeparOrganizer {
    private $events_id;
    private $departaments_id;

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
    public function getDepartamentsId()
    {
        return $this->departaments_id;
    }

    /**
     * @param mixed $departaments_id
     */
    public function setDepartamentsId($departaments_id)
    {
        $this->departaments_id = $departaments_id;
    }
}