<?php

namespace project5;

class Teacher extends Person
{
    private $numberOfTeachers = [];

    public function addNumberOfTeachers($numberOfTeachers)
    {
        $this->numberOfTeachers[] = $numberOfTeachers;
    }

    public function getNumberOfTeachers()
    {
        $print = "";
        foreach ($this->numberOfTeachers as $numberOfTeacher)
        {
            $print = $numberOfTeacher->getNumberOfStudents() / 25;
        }
        return $print;
    }
}