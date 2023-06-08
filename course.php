<?php

namespace Mannager;

class Course
{
    public readonly int $id;
    public $name;
    public function __construct($id, $name)
    {
        $this->name = $name;
        $this->id = $id;
    }
}
