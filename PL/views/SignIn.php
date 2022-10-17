<?php
    include ('../../BLL/UserManager.php');
    include('../../DTO/SignInDTORequest.php');
    include('../../DTO/SignUpDTOResponse.php');
    
    if (isset($_POST['Login'])){
        $signInDTORequest = new SignInDTORequest();
        $signInDTORequest->setEmail($_POST['email2']);
        $psw = $_POST['psw2'];
        $psw = md5($psw);
        $signInDTORequest->setPsw($psw);
        
        if (!ValidateSignin($signInDTORequest) == true)
        {
            echo "<script type='text/javascript'>
            alert ('Please fill out all the inputs');
            </script>";
        }
        else{
            session_start();
            $val = SignIn($signInDTORequest);
            if($val == true)
            {
                
                echo "<script type='text/javascript'>
                window.location.replace('index.php');
                </script>";
            }
            else{
                echo "<script type='text/javascript'>
                alert('wrong email or password')
                window.location.replace('login.php');
                </script>";
            }
        }
    }
    function ValidateSignin($signInDTORequest) {
    if ($signInDTORequest->getEmail() == '' || $signInDTORequest->getPsw() == '' ) {
        return false;
    } else {
        return true;
    }
    }
?>