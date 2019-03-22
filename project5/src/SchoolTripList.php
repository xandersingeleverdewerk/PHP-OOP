<?php

namespace project5;

class SchoolTripList
{
    private $studentList = [];
    private $class = [];
    private $teachers = [];

    public function addStudentList($studentList)
    {
        $this->studentList[] = $studentList;
    }

    public function getStudentList()
    {
        $print = "";
        foreach ($this->studentList as $studentList)
        {
            $print = $studentList->getPaid();
        }
        return $print;
    }

    public function addClass($class)
    {
        $this->class[] = $class;
    }

    public function getClass()
    {
        $print = "";
        foreach ($this->class as $class)
        {
            $print = $class->getName();
        }
        return $print;
    }

    public function addTeacher($teacher)
    {
        $this->teachers[] = $teacher;
    }

    public function getTeachers()
    {
        $print = "";
        foreach ($this->teachers as $teacher)
        {
            $print = $teacher->getNumberOfTeachers();
        }
        return $print;
    }
}