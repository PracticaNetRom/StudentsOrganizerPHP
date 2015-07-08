<?php
/**
 * Created by PhpStorm.
 * User: Voicu
 * Date: 7/7/2015
 * Time: 6:12 PM
 */

namespace Practica\Model\FacultyStudent;


class FacultyStudent {

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
    public function getFacultyStartYear()
    {
        return $this->faculty_start_year;
    }

    /**
     * @param mixed $faculty_start_year
     */
    public function setFacultyStartYear($faculty_start_year)
    {
        $this->faculty_start_year = $faculty_start_year;
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

    /**
     * @return mixed
     */
    public function getFacultiesId()
    {
        return $this->faculties_id;
    }

    /**
     * @param mixed $faculties_id
     */
    public function setFacultiesId($faculties_id)
    {
        $this->faculties_id = $faculties_id;
    }
    public $faculties_id;
    public $students_id;
    public $faculty_start_year;

}