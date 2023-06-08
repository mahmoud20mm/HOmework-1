<?php

namespace Mannager;

class Student
{
    public readonly int $id;
    public $name;
    public $email;
    public $course = array();

    public function __construct($id, $name, $email)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $course = [];
    }
}
