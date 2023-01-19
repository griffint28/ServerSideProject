<?php
class technician{
    private $id, $first_Name, $last_Name, $email, $phone, $password;
    
    public function __construct($first_Name, $last_Name, $email, $phone, $password) {
        $this->first_Name = $first_Name;
        $this->last_Name = $last_Name;
        $this->email = $email;
        $this->phone = $phone;
        $this->password = $password;
                
    }
    
    public function getID() {
        return $this->id;
    }

    public function getName() {
        $name = $this->first_Name . ' ' . $this->last_Name;
        return $name;
    }
    
    public function getFirstName() {
        return $this->first_Name;
    }
    
    public function getLastName() {
        return $this->last_Name;
    }
    
    
    public function getEmail() {
        return $this->email;
    }
        
    public function getPhone() {
        return $this->phone;
    }
     
    public function getPassword() {
        return $this->password;
    }
    
    public function setFirstName($value) {
        $this->first_Name = $value;
    }    
    
    public function setLastName($value) {
        $this->last_Name = $value;
    }
    
    
    
    public function setEmail($value) {
        $this->email= $value;
    }
    
    public function setPhone($value) {
        $this->phone = $value;
    }
    
    public function setID($value){
        $this->id = $value;
    }
    
    public function setPassword($value) {
        $this->password = $value;
    }
    
}