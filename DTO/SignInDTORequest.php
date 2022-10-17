<?php
class SignInDTORequest{
    private $email;
    private $psw;
    
    public function setEmail($eemail){
        $this->email = $eemail;
    }
    public function getEmail(){
       return $this->email;
    }
    public function setPsw($psww){
        $this->psw = $psww;
    }
    public function getPsw(){
       return $this->psw;
    }
    
    
}
?>