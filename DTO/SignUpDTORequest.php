<?php
class SignUpDTORequest{
    private $fname;
    private $lname;
    private $email;
    private $gender;
    private $psw;
    
    public function setFname($fnamee){
        $this->fname = $fnamee;
    }
    public function getFname(){
       return $this->fname;
    }
    public function setLname($lnamee){
        $this->lname = $lnamee;
    }
    public function getLname(){
       return $this->lname;
    }
    public function setEmail($eemail){
        $this->email = $eemail;
    }
    public function getEmail(){
       return $this->email;
    }
    public function setGender($genderr){
        $this->gender = $genderr;
    }
    public function getGender(){
       return $this->gender;
    }
    public function setPsw($psww){
        $this->psw = $psww;
    }
    public function getPsw(){
       return $this->psw;
    }
    
    
}
?>
