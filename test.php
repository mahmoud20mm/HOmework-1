<?php

require_once 'student.php';
require_once 'course.php';
require_once 'mannager.php';

use Mannager\Course;
use Mannager\Student;
use Mannager\Mannager;

$mannager = new Mannager();

$mannager->addStudent(new Student(1, 'mahmoud', 'mahmoud@gmail.com'));
$mannager->addStudent(new Student(2, 'ahmad', 'ahmad@gmail.com'));
$mannager->addStudent(new Student(3, 'ali', 'ali@gmail.com'));
$mannager->addStudent(new Student(4, 'alaa', 'alaa@gmail.com'));
$mannager->addCourse(2, new Course(1, 'PHP'));
$mannager->addCourse(2, new Course(2, 'Java'));
$mannager->addCourse(2, new Course(1, 'Python'));
$mannager->addCourse(3, new Course(1, 'C++'));
echo  $mannager->students[2]->course[0]->name;


?>
