<?php
/**
 * Created by PhpStorm.
 * User: Bibu
 * Date: 7/7/2015
 * Time: 11:37 PM
 */

namespace Practica\Model\Events;


lass Event {

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
    public function getStartDate()
    {
        return $this->start_date;
    }

    /**
     * @param mixed $start_date
     */
    public function setStartDate($start_date)
    {
        $this->start_date = $start_date;
    }

    /**
     * @return mixed
     */
    public function getPeriod_Date()
    {
        return $this->end_date;
    }

    /**
     * @param mixed $period_date
     */
    public function setEndDate($period_date)
    {
        $this->period_date = $period_date;
    }


    public $start_date;
    public $period_date;


}