<?php

namespace Mannager;

class Mannager
{

    public array  $students = array();
    public function __construct()
    {
    }
    public function deleteStudent($stdId)
    {
        foreach ($this->students as $item) {
            if ($item->id == $stdId) {
                unset($this->students[$stdId]);
                return true;
            }
        }
        return false;
    }


    public function modifyStudentData($stdId, $name, $email)
    {
        foreach ($this->students as $item) {
            if ($item->id == $stdId) {
                $item->name = $name;
                $item->email = $email;
            }
        }
    }
    public function addCourse($stdId, $coursetoAdd)
    {
        foreach ($this->students as $item) {

            if ($item->id == $stdId) {
                array_push($item->course, $coursetoAdd);
            }
        }
    }
    public function addStudent($student)
    {
        array_push($this->students, $student);
    }
}
