<?php
/**
 * Created by PhpStorm.
 * User: klLaUuDyYu
 * Date: 7/8/2015
 * Time: 12:53 AM
 */

namespace Practica\Model\FacultyAndStudent;


class FacultyAndStudent {
    private $faculties_id;
    private $students_id;
    private $faculty_start_year;

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
}