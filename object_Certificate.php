<?php
include ("object_Citizen.php");

class Certificate{
    private $Citizen;
    private $Dose;
    private $CertType;

    public function __construct(){
        $this->Citizen = new Citizen();
        $this->Dose = -1;
        $this->CertType = -1;
    }

    public function set_citizen($citizen){
        $this->Citizen = $citizen;
    }

    public function set_dose($dose){
        $this->Dose = $dose;
    }

    public function set_certtype($certtype){
        $this->CertType = $certtype;
    }

    public function get_citizen(){
        return $this->Citizen;
    }

    public function get_dose(){
        return $this->Dose;
    }

    public function get_certtype(){
        return $this->CertType;
    }
}

?>