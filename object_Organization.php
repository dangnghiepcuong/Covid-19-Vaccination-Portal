<?php
class Organization {
    private $ID;
    private $Name;
    private $ProvinceName;
    private $DistrictName;
    private $TownName;
    private $Street;

    public function Organization(){
        $this->ID = "";
        $this->Name = "";
        $this->ProvinceName = "";
        $this->DistrictName = "";
        $this->TownName = "";
        $this->Street = "";
    }

    public function set_id($id){
        $this->ID = $id;
    }

    public function set_name($name){
        $this->Name = $name;
    }

    public function set_provincename($provincename){
        $this->ProvinceName = $provincename;
    }

    public function set_districtname($districtname){
        $this->DistrictName = $districtname;
    }

    public function set_townname($townname){
        $this->TownName = $townname;
    }

    public function set_street($street){
        $this->Street = $street;
    }

    public function get_id(){
        return $this->ID;
    }

    public function get_name(){
        return $this->Name;
    }

    public function get_provincename(){
        return $this->ProvinceName;
    }

    public function get_districtname(){
        return $this->DistrictName;
    }

    public function get_townname(){
        return $this->TownName;
    }

    public function get_street(){
        return $this->Street;
    }
    
}
?>