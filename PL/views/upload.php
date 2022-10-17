<?php
    include ('../../DAL/UserRepository.php');
    include('../../DTO/uploadDTORequest.php');
    $target_dir = "../images/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    session_start();
    if (isset($_POST['Submit']))
    {
        if(isset($_SESSION['id'])){
        
        $uploadOk = 1;
        if(pathinfo($target_file,PATHINFO_EXTENSION)==""){
        echo "<script type='text/javascript'>
                alert('please fill in all the criteria');
            window.location.replace('manage_donation.php');
         </script>";
        }
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        
          $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
          if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
          } else {
            echo "File is not an image.";
            $uploadOk = 0;
          }
                move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);

              $name = htmlspecialchars( basename( $_FILES["fileToUpload"]["name"]));
              $uuploadDTORequest = new uploadDTORequest();
              $uuploadDTORequest->setTitle($_POST['title']);
              $uuploadDTORequest->setParagraph($_POST['paragraph']);
              $uuploadDTORequest->setGoal($_POST['goal']);
              $uuploadDTORequest->setImage($name);
              $uuploadDTORequest->setId($_SESSION['id']);
              if(!validateUpload($uuploadDTORequest)){
                 echo "<script type='text/javascript'>
                      alert('please fill in all the criteria');
                  window.location.replace('manage_donation.php');
               </script>";
              }
              upload($uuploadDTORequest);
              echo "<script type='text/javascript'>
                  window.location.replace('manage_donation.php');
               </script>";
              }
        else{
           echo "<script type='text/javascript'>
                    alert('pleas login first');
                    window.location.replace('login.php');
                    </script>";
        }
    }
    function validateUpload($UploadDTORequest){
        if($UploadDTORequest->getTitle()==''||$UploadDTORequest->getParagraph()==''||$UploadDTORequest->getGoal()==''||$UploadDTORequest->getGoal()<=0 || $UploadDTORequest->getGoal()==''){
            return false;
        }
        else{
            return true;
        }
    }
?>