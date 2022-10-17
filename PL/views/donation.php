<?php
    include ('../../BLL/UserManager.php');
    include('../../DTO/DonationDTORequest.php');
    session_start();
    if(isset($_POST['submit'])){
        if(isset($_SESSION['id'])){
            $donationDTORequest = new DonationDTORequest();
            $donationDTORequest->setAmount($_POST['other-payment']);
            $donationDTORequest->setId($_POST['donationId']);
            if($donationDTORequest->getAmount()==''){
                $donationDTORequest->setAmount($_POST['don-payment']);
            }
            $val = donateNow($donationDTORequest);
            if($val==true){
                echo "<script type='text/javascript'>
                    alert('thanks for your support');
                    window.location.replace('index.php');
                    </script>";
            }
        }
        else{
           echo "<script type='text/javascript'>
                    alert('pleas login first');
                    window.location.replace('login.php');
                    </script>";
        }
    }
?>

