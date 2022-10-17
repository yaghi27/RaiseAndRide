<?php

    include ('Connection.php');
    function CheckUserExists($email) {
        $conn = OpenCon();
        $sql = "select * from users where email ='" . $email . "';";
        $result = mysqli_query($conn, $sql);
        CloseConn($conn);
        return $result;
    }

    function InsertUser($SignUpDTORequest) {
        $conn = OpenCon();
        $sql = "insert into users (name, lastname, email, gender, psw) "
                . "values('" . $SignUpDTORequest->getFname() . "','" . $SignUpDTORequest->getLname() . "','" . $SignUpDTORequest->getEmail() . "','" . $SignUpDTORequest->getGender() . "','" . $SignUpDTORequest->getPsw() . "');";
        if (mysqli_query($conn, $sql)) {
            http_response_code(200);
        } else {

            http_response_code(405);

            CloseConn($conn);
        }
    }

    function upload($uploadDTORequest){
        $conn = OpenCon();
        $sql="insert into donations(userId,image,tytle,paragraph,goal,raised) values(".$uploadDTORequest->getId().",'".$uploadDTORequest->getImage()."','".$uploadDTORequest->getTitle()."','".$uploadDTORequest->getParagraph()."','".$uploadDTORequest->getGoal()."','0')";
        if (mysqli_query($conn, $sql)) {
            http_response_code(200);
        } else {

            http_response_code(405);

            CloseConn($conn);
        }
    }
    function edit($EditDTORequest){
        $conn = OpenCon();
        
        $sql="update donations set userId =".$EditDTORequest->getId()." ,image = '".$EditDTORequest->getImage()."' ,tytle = '".$EditDTORequest->getTitle()."' ,paragraph='".$EditDTORequest->getParagraph()."' ,goal =".$EditDTORequest->getGoal()." where id=".$EditDTORequest->getdonation_id()." ";
        
        if (mysqli_query($conn, $sql)) {
            http_response_code(200);
        } else {

            http_response_code(405);

            CloseConn($conn);
        }
    }
        function delete($DeleteDTORequest){
        $conn = OpenCon();
        
         $sql="delete from donations where id=".$DeleteDTORequest->getdonation_id()." ";;
        if (mysqli_query($conn, $sql)) {
            http_response_code(200);
        } else {

            http_response_code(405);

            CloseConn($conn);
        }
    }
    function insertContact($ContactDTORequest){
        $conn = OpenCon();
        $sql="insert into contact(email,message,userid) values('".$ContactDTORequest->getEmail()."','".$ContactDTORequest->getMessage()."','".$ContactDTORequest->getUserid()."')";
        if (mysqli_query($conn, $sql)) {
            http_response_code(200);
        } else {

            http_response_code(405);

            CloseConn($conn);
        }        
    }
    function donate($DonationDTORequest){
        $conn = OpenCon();
        $sql="UPDATE `donations` SET `raised` = raised+ '".$DonationDTORequest->getAmount()."' WHERE `donations`.`id` =".$DonationDTORequest->getId()." ;";
        if (mysqli_query($conn, $sql)) {
            http_response_code(200);
        } else {

            http_response_code(405);

            CloseConn($conn);
        }
    }
?>
