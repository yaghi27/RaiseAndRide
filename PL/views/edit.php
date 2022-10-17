<?php
    include ('../../DAL/UserRepository.php');
    include('../../DTO/EditDTORequest.php');
    $target_dir = "../images/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    session_start();
    if (isset($_POST['Submit']))
    {
        if(isset($_SESSION['id'])){
        
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        
        if(pathinfo($target_file,PATHINFO_EXTENSION)==""){
        echo "<script type='text/javascript'>
                alert('please fill in all the criteria');
            window.location.replace('manage_donation.php');
         </script>";
        }
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
          $editDTORequest = new EditDTORequest();
          $editDTORequest->setTitle($_POST['title']);
          $editDTORequest->setParagraph($_POST['paragraph']);
          $editDTORequest->setGoal($_POST['goal']);
          $editDTORequest->setImage($name);
          $editDTORequest->setId($_SESSION['id']);
          $editDTORequest->setdonation_id($_POST['donation_id']);

          edit($editDTORequest);
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
    include('../../DTO/DeleteDTORequest.php');
    if (isset($_POST['Delete']))
    {
        $deleteDTORequest = new DeleteDTORequest();
      $deleteDTORequest->setdonation_id($_POST['donation_id']);
      echo $deleteDTORequest->getdonation_id();
      delete($deleteDTORequest);
      echo "<script type='text/javascript'>
            window.location.replace('manage_donation.php');
         </script>";
    }
?>