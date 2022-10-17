<?php
class EditDTORequest{
    private $title;
    private $paragraph;
    private $image;
    private $goal;
    private $id;
    private $donation_id;
    public function setTitle($tytlee){
        $this->title = $tytlee;
    }
    public function getTitle(){
       return $this->title;
    }
    public function setParagraph($paragraphh){
        $this->paragraph = $paragraphh;
    }
    public function getParagraph(){
       return $this->paragraph;
    }
    public function setImage($imagee){
        $this->image = $imagee;
    }
    public function getImage(){
       return $this->image;
    }
    public function setGoal($goall){
        $this->goal = $goall;
    }
    public function getGoal(){
       return $this->goal;
    }
    public function setId($idd){
        $this->id = $idd;
    }
    public function getId(){
       return $this->id;
    }
        public function setdonation_id($donation_id){
        $this->donation_id = $donation_id;
    }
    public function getDonation_id(){
       return $this->donation_id;
    }
}
?>
