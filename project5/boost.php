<?php

require_once 'vendor/autoload.php';

use project5\Teacher;
use project5\Student;
use project5\schooltrip;
use project5\Group;
use project5\SchoolTripList;

$teacher1 = new Teacher();
$teacher1->setFirstName("Jan");
$teacher1->setLastName("Brugge");

$student1 = new Student();
$student1->setFirstName("Xander");
$student1->setLastName("Robbemond");
$student1->setPaid(50);
$student1->setPayMoney(30);

$schooltrip1 = new Schooltrip();
$schooltrip1->setName("Wallaby");

$group1 = new Group();
$group1->setName("APM2");
$group1->setClassMates(30);
$group1->setNumberOfStudents(26);
$group1->setNumberOfClasses(3);

$schooltripList1 = new SchoolTripList();

$student1->addClassname($group1);
$teacher1->addNumberOfTeachers($group1);
$group1->addGroup($student1);
$group1->addCollectedMoney($student1);
$group1->addCollectedMoneyPerClass($student1);
$schooltripList1->addStudentList($student1);
$schooltripList1->addClass($group1);
$schooltripList1->addTeacher($teacher1);

print "<h1>teacher</h1>";
print $teacher1->getFirstName();
print $teacher1->getLastName()."<br>";

print "<h1>student</h1>";
print $student1->getFirstName();
print $student1->getLastName();
print $student1->getPaid();
print $student1->getClassname()."<br><br>";

print "<h1>schooltrip</h1>";
print $schooltrip1->getName()."<br><br>";

print "<h1>group</h1>";
print $group1->getName()."<br>";
print "the money someon has to pay =".$group1->getGroup()."<br>";
print $group1->getClassmates()."<br>";
print $group1->getPercentage()."<br>";
print "the number of students that are going to the school trip = ".$group1->getNumberOfStudents()."<br>";
print "the total number of collected money = €".$group1->getCollectedMoney();
print $group1->getNumberOfClasses()."<br>";
print "the total number of collected money per class = €".$group1->getCollectedMoneyPerClass()."<br><br>";

print "<h1>school trip list</h1>";
print $schooltripList1->getClass()."<br>";
print "the amount of money someone has payed = €".$schooltripList1->getStudentList()."<br>";
print "number of teachers = ".round($schooltripList1->getTeachers(), 0, PHP_ROUND_HALF_UP)."<br><br>";