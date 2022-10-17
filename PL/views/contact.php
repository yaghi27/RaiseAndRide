<?php
    include('./PHPMailerAutoload.php');
    include ('../../BLL/UserManager.php');
    include('../../DTO/ContactDTORequest.php');
    session_start();
    if(isset($_POST['submit'])){
        if(isset($_SESSION['id'])){
            $contactDTORequest = new ContactDTORequest();
            $contactDTORequest->setEmail($_SESSION['email']);
            $contactDTORequest->setUserid($_SESSION['id']);
            $contactDTORequest->setMessage($_POST['message']);
            if (!ValidateContact($contactDTORequest))
            {
                echo "<script type='text/javascript'>
                alert ('Please fill out all the inputs');
                </script>";
            }
            else{
                $mail = new PHPMailer;
                $mail->SMTPDebug = 2;                   // Enable verbose debug output
                $mail->isSMTP();                        // Set mailer to use SMTP
                $mail->Host       = 'smtp.office365.com;';    // Specify main SMTP server
                $mail->SMTPAuth   = true;               // Enable SMTP authentication
                $mail->Username   = 'raiseandrise123@outlook.com';     // SMTP username
                $mail->Password   = 'RaisePass123';         // SMTP password
                $mail->SMTPSecure = 'tls';              // Enable TLS encryption, 'ssl' also accepted
                $mail->Port       = 587;                // TCP port to connect to
                $mail->setFrom('raiseandrise123@outlook.com', 'raiseandrise');           // Set sender of the mail
                $mail->addAddress($_SESSION['email'], $_SESSION['name']);   // Name is optional
                $mail->addAttachment('../images/famine.jpg');
                $mail->isHTML(true);                                  
                $mail->Subject = 'Thanks '.$_SESSION['name'].' for your feedback';
                $mail->Body    = '<div style="text-align:center">This email is auto-sent to tell you that your message has been recieved</div>';
                $mail->send();
                contact($contactDTORequest);
                echo "<script type='text/javascript'>
                window.location.replace('index.php') 
                </script>";
            }
        }
        else{
            echo "<script type='text/javascript'>
                alert('please login first');
                window.location.replace('index.php');
                </script>";
        }
    }
    function ValidateContact($ContactDTORequest) {
    if ($ContactDTORequest->getMessage() == '') {
        return false;
    } else {
        return true;
    }
    }
?>

