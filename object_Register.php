<?php
class Register {
    private $CitizenID;
    private $SchedID;
    private $Time;
    private $NO;
    private $Status;
    private $Image;
    private $DoseType;
    private $ID;

    public function Register(){
        $this->CitizenID = "";
        $this->SchedID = "";
        $this->Time = -1;
        $this->NO = -1;
        $this->Status = -1;
        $this->Image = "";
        $this->DoseType = "";
        $this->ID = -1;
    }

    public function set_citizenid($citizenid){
        $this->CitizenID = $citizenid;
    }

    public function set_schedid($schedid){
        $this->SchedID = $schedid;
    }

    public function set_time($time){
        $this->Time = $time;
    }

    public function set_no($no){
        $this->NO = $no;
    }

    public function set_status($status){
        $this->Status = $status;
    }

    public function set_image($image){
        $this->Image = $image;
    }

    public function set_dosetype($dosetype){
        $this->DoseType = $dosetype;
    }

    public function set_id($id){
        $this->ID = $id;
    }

    public function get_citizenid(){
        return $this->CitizenID;
    }

    public function get_schedid(){
        return $this->SchedID;
    }

    public function get_time(){
        return $this->Time;
    }

    public function get_no(){
        return $this->NO;
    }

    public function get_status(){
        return $this->Status;
    }

    public function get_image(){
        return $this->Image;
    }

    public function get_dosetype(){
        return $this->DoseType;
    }

    public function get_id(){
        return $this->ID;
    }
}
?>