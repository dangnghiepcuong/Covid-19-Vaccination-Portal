<?php
class Certificate{
    private $CitizenID;
    private $Dose;
    private $CertType;

    public function __construct(){
        $this->CitizenID = "";
        $this->Dose = -1;
        $this->CertType = -1;
    }

    public function set_citizenid($citizenid){
        $this->CitizenID = $citizenid;
    }

    public function set_dose($dose){
        $this->Dose = $dose;
    }

    public function set_certtype($certtype){
        $this->CertType = $certtype;
    }

    public function get_citizenid(){
        return $this->CitizenID;
    }

    public function get_dose(){
        return $this->Dose;
    }

    public function get_certtype(){
        return $this->CertType;
    }
}

?>