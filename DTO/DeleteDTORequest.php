<?php
class DeleteDTORequest{

    private $donation_id;

        public function setdonation_id($donation_id){
        $this->donation_id = $donation_id;
    }
    public function getDonation_id(){
       return $this->donation_id;
    }
}
?>


