<?php

namespace Acme;

class Patient extends Person
{
    private $paymentAmount;

    public function setPaymentAmount($paymentAmount)
    {
        $this->paymentAmount = $paymentAmount;
    }
    
    public function getPaymentAmount()
    {
        return "Payment = €".$this->paymentAmount."<br>";
    }

    public function setRole($role)
    {
        parent::setRole($role);
        $this->role = $role;
    }

    public function getRole()
    {
        return "role = ".$this->role."<br>";
    }
}