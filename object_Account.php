<?php
class Account {
    private $Username;
    private $Password;
    private $Role;
    private $Default;
    private $Status;

    public function __construct(){
        $this->Username = "";
        $this->Password = "";
        $this->Role = -1;
        $this->Default = "";
        $this->Status = -1;
    }

    public function set_username($username){
        $this->Username = $username;
    }

    public function set_password($password){
        $this->Password = $password;
    }

    public function set_role($role){
        $this->Role = $role;
    }

    public function set_default($default){
        $this->Default = $default;
    }

    public function set_status($status){
        $this->Status = $status;
    }

    public function get_username(){
        return $this->Username;
    }

    public function get_password(){
        return $this->Password;
    }

    public function get_role(){
        return $this->Role;
    }

    public function get_default(){
        return $this->Default;
    }

    public function get_status(){
        return $this->Status;
    }
}

?>