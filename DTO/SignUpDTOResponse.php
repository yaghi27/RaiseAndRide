<?php
 class SignUpDTOResponse{
     private $status;
     
     public function setStatus($statuss){
        $this->status = $statuss;
    }
    public function getStatus(){
       return $this->status;
    }
 }
?>