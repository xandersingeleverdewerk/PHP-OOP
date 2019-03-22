<?php

use Acme\Appointment;
use Acme\Doctor;
use Acme\Nurse;
use Acme\Patient;

$patient1 = new Patient();
$patient1->setEyeColor("blue");
$patient1->setHairColor("blond");
$patient1->setLength(180);
$patient1->setWeight(70);
$patient1->setPaymentAmount(2);
$patient1->setRole("patient");

$doctor1 = new Doctor();
$doctor1->setEyeColor("brown");
$doctor1->setHairColor("dark brown");
$doctor1->setLength(170);
$doctor1->setWeight(56);
$doctor1->setSalary(90000);
$doctor1->setRole("doctor");

$nurse1 = new Nurse();
$nurse1->setEyeColor("red");
$nurse1->setHairColor("pink");
$nurse1->setLength(70);
$nurse1->setWeight(20);
$nurse1->setSalary(130000);
$nurse1->setRole("nurse");

$appointment1 = new Appointment();
$appointment1->setStartTime("14:00");
$appointment1->setEndTime("16:00");
$appointment1->setHourlyWage(500);
$appointment1->setNurseStartTime("14:00");
$appointment1->setNurseEndTime("15:00");
$appointment1->setNurseSalary(500);

Appointment::addAppointment($doctor1);
Appointment::addAppointment($patient1);
$appointment = 'Acme\Appointment';
$appointment::getAppointment();

print "<h1>patient</h1>";
print $patient1->getEyeColor();
print $patient1->getHairColor();
print $patient1->getLength();
print $patient1->getWeight();
print $patient1->getPaymentAmount();
print $patient1->getRole();
print "<br>";

print "<h1>doctor</h1>";
print $doctor1->getEyeColor();
print $doctor1->getHairColor();
print $doctor1->getLength();
print $doctor1->getWeight();
print $doctor1->getSalary();
print $doctor1->getRole();
print "<br>";

print "<h1>nurse</h1>";
print $nurse1->getEyeColor();
print $nurse1->getHairColor();
print $nurse1->getLength();
print $nurse1->getWeight();
print $nurse1->getSalary();
print $nurse1->getRole();
print "<br>";

print "<h1>appointment</h1>";
print "<h2>doctor</h2>";
print $appointment1->getStartTime();
print $appointment1->getEndTime();
print $appointment1->getTotalTime();
print $appointment1->getHourlyWage();
print $appointment1->getDoctorSalary();
print "<br>";

print "<h2>nurse</h2>";
print $appointment1->getNurseStartTime();
print $appointment1->getNurseEndTime();
print $appointment1->getNurseTotalTime();
print $appointment1->getBonus();
print $appointment1->getNurseSalary();