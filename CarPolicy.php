<?php
class CarPolicy
{
    private $policyNumber="";
    private $yearlyPremium=0;
    private $dateOfLastClaim="";

    public function __construct()
    {
        $this->dateOfLastClaim=$dolc;
    }
    public function setDateOfLastClaim()
    {
        $currentDate = new DateTime();
        $lastDate = new DateTime($this->dateOfLastClaim);
        $interval = $currentDate->diff($lastDate);
        return $interval->format("%y");
    }

    public function __toString()
    {
        return "PN:" . $this->policyNumber;
    }
}

?>