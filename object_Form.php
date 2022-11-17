<?php
class Form {
    private $CitizenID;
    private $FilledDate;
    private $Choice;
    private $ID;

    public function __construct(){
        $this->CitizenID = "";
        $this->FilledDate = "";
        $this->Choice = "";
        $this->ID = -1;
    }

    public function set_citizenid($citizenid){
        $this->CitizenID = $citizenid;
    }

    public function set_filleddate($filleddate){
        $this->FilledDate = $filleddate;
    }

    public function set_choice($choice){
        $this->Choice = $choice;
    }

    public function set_id($id){
        $this->ID = $id;
    }

    public function get_citizenid(){
        return $this->CitizenID;
    }

    public function get_filleddate(){
        return $this->FilledDate;
    }

    public function get_choice(){
        return $this->Choice;
    }

    public function get_id(){
        return $this->ID;
    }
}
?>