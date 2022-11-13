<?php
class Injection{
    private $CitizenID;
    private $InjNO;
    private $SchedID;
    private $DoseType;

    public function Injection(){
        $this->CitizenID = "";
        $this->InjNO = -1;
        $this->SchedID = "";
        $this->DoseType = "";
    }

    public function set_citizenid($citizenid){
        $this->CitizenID = $citizenid;
    }

    public function set_injno($injno){
        $this->InjNO = $injno;
    }

    public function set_schedid($schedid){
        $this->SchedID = $schedid;
    }

    public function set_dosetype($dosetype){
        $this->DoseType = $dosetype;
    }

    public function get_citizenid(){
        return $this->CitizenID;
    }

    public function get_injno(){
        return $this->InjNO;
    }

    public function get_schedid(){
        return $this->SchedID;
    }

    public function get_dosetype(){
        return $this->DoseType;
    }
}
?>