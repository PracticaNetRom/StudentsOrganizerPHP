<?php
/**
 * Created by PhpStorm.
 * User: klLaUuDyYu
 * Date: 7/8/2015
 * Time: 12:50 AM
 */

namespace Practica\Model\Faculty;


class Faculty {
    private $name;

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

}