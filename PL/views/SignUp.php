<?php
include ('../../BLL/UserManager.php');
include('../../DTO/SignUpDTORequest.php');
include('../../DTO/SignUpDTOResponse.php');

if (isset($_POST['Submit'])){
    $signUpDTORequest = new SignUpDTORequest();
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $signUpDTORequest->setGender($_POST['gender']);
    $signUpDTORequest->setEmail($_POST['email']);
    $psw = $_POST['psw'];
    $psw = md5($psw);
    $signUpDTORequest->setPsw($_POST['psw']);
    $fname = stripslashes($fname);
    $fname=preg_replace('/[^a-zA-Z0-9_]/s','',$fname);

    $lname = stripslashes($lname);
    $lname=preg_replace('/[^a-zA-Z0-9_]/s','',$lname);
    $signUpDTORequest->setFname($fname);
    $signUpDTORequest->setLname($lname);
    
    if(!ValidateSignup($signUpDTORequest)){
        echo "<script type='text/javascript'>
        alert ('Please check entered values');
        </script>";
    }
    else {
        $signUpDTORequest->setPsw($psw);
        $result = SignUp($signUpDTORequest);
        if ($result){
            echo "<script type='text/javascript'>
            window.location.replace('login.php');
            </script>";
        }   
        else {
            echo "<script type='text/javascript'>
            alert ('email already in use');
            window.location.replace('login.php');
            </script>";
        }
    }
}
function ValidateSignup($signUpDTORequest) {
    if ($signUpDTORequest->getFname() == '' || $signUpDTORequest->getEmail() == '' || $signUpDTORequest->getLname() == '' || $signUpDTORequest->getPsw() == '' || strlen($signUpDTORequest->getPsw()) <= '8' 
            || (!preg_match("#[0-9]+#", $signUpDTORequest->getPsw())) || (!preg_match("#[A-Z]+#", $signUpDTORequest->getPsw())) 
            || (!preg_match("#[a-z]+#", $signUpDTORequest->getPsw()))) {
        return false;
    } else {
        return true;
    }
}
?>
