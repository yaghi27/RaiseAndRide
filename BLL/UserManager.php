<?php
    include ('../../DAL/UserRepository.php');
    function SignUp($SignUpDTORequest){
        $result = CheckUserExists ($SignUpDTORequest->getEmail());
        $row = mysqli_fetch_assoc($result);
        $signUpDTOResponse= new SignUpDTOResponse();

        if ($row < 1){
            InsertUser ($SignUpDTORequest);
            $signUpDTOResponse->setStatus(true);

        }
        else
        {
            $signUpDTOResponse->setStatus(false);
        }
        return $signUpDTOResponse;
    }
    function SignIn($SignInDTORequest){
        $conn = OpenCon();
        $sql =" select * from users where email ='" . $SignInDTORequest->getEmail() . "' and psw = '" . $SignInDTORequest->getPsw() . "';";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $_SESSION['name'] = $row['name'];
        $_SESSION['id'] = $row['id'];
        $_SESSION['lastname'] = $row['lastname'];
        $_SESSION['email'] = $row['email'];
        if($row >= 1)
        {
            return true;
        }
        else{
            return false;
        }
        $conn->CloseConn();
    }
    function contact($ContactDTORequest){
        insertContact($ContactDTORequest);
        return true;
    }
    function donateNow($DonationDTORequest){
      donate($DonationDTORequest);
      return true;
    };
?>