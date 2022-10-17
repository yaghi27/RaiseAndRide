<?php
    class ContactDTORequest {
    private $email;
    private $message;
    private $userId;
    
    public function setEmail($eemail){
        $this->email = $eemail;
    }
    public function getEmail(){
       return $this->email;
    }
    public function setMessage($psww){
        $this->message = $psww;
    }
    public function getMessage(){
       return $this->message;
    }
    public function setUserid($eemail){
        $this->userId = $eemail;
    }
    public function getUserid(){
       return $this->userId;
    }
    }
?>
