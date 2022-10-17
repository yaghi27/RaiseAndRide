<?php
    class DonationDTORequest{
        private $amount;
        private $id;
        
        public function setAmount($eemail){
            $this->amount = $eemail;
        }
        public function getAmount(){
           return $this->amount;
        }
        public function setId($idd){
            $this->id = $idd;
        }
        public function getId(){
           return $this->id;
        }
        }
?>

