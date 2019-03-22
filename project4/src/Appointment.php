<?php

namespace Acme;

class Appointment
{
    public static $appointment = [];
    //properties for the doctor
    private $startTime;
    private $endTime;
    private $totalTime;
    private $salary;
    private $hourlyWage;
    // properties for the nurse
    private $nurseStartTime;
    private $nurseEndTime;
    private $nurseTotalTime;
    private $nurseSalary;
    private $bonus;

    public static function addAppointment($appointment)
    {
        self::$appointment[] = $appointment;
    }

    public function getAppointment()
    {
        return self::$appointment;
    }

    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;
    }

    public function getStartTime()
    {
        return "Start time = ".$this->startTime."<br>";
    }

    public function setEndTime($endTime) 
    {
        $this->endTime = $endTime;
    }

    public function getEndTime() 
    {
        return "end time = ".$this->endTime."<br>";
    }

    public function getTotalTime()
    {
        $this->startTime=strtotime($this->startTime);
        $this->endTime=strtotime($this->endTime);

        $this->totalTime = ($this->endTime - $this->startTime)/3600;

        return "the time the doctor work = ".$this->totalTime." hour<br>";
    }

    public function setHourlyWage($hourlyWage)
    {
        $this->hourlyWage = $hourlyWage;
    }

    public function getHourlyWage()
    {
        return "hourly wage = €".$this->hourlyWage."<br>";
    }

    public function getDoctorSalary()
    {
        $this->salary = $this->totalTime * $this->hourlyWage;
        return "doctor salary = €".$this->salary."<br>";
    }

    public function setNurseStartTime($nurseStartTime)
    {
        $this->nurseStartTime = $nurseStartTime;
    }

    public function getNurseStartTime()
    {
        return "start time of nurse = ".$this->nurseStartTime."<br>";
    }

    public function setNurseEndTime($nurseEndTime)
    {
        $this->nurseEndTime = $nurseEndTime;
    }

    public function getNurseEndTime()
    {
        return "end time of nurse = ".$this->nurseEndTime."<br>";
    }

    public function getNurseTotalTime()
    {
        $this->nurseStartTime=strtotime($this->nurseStartTime);
        $this->nurseEndTime=strtotime($this->nurseEndTime);

        $this->nurseTotalTime = ($this->nurseEndTime - $this->nurseStartTime)/3600;

        return "the time the nurse work = ".$this->nurseTotalTime." hour<br>";
    }

    public function getBonus()
    {
        $this->bonus = $this->nurseTotalTime * $this->hourlyWage;
        return "bonus = €".$this->bonus."<br>";
    }

    public function setNurseSalary($nurseSalary)
    {
        $this->nurseSalary = $nurseSalary;
    }

    public function getNurseSalary()
    {
        $this->nurseSalary = $this->bonus + $this->nurseSalary;
        return "nurse salary = €".$this->nurseSalary."<br>";
    }
}