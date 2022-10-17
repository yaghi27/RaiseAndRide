<?php
function OpenCon(){
    $dbHost = "127.0.0.1";
    $dbUser = "root";
    $dpPass = "";
    $dbName="riseandraise";
    $conn = new mysqli($dbHost, $dbUser, $dpPass, $dbName) or die ("Conn failed: %s\n" . $conn->error);
    return $conn;
}
function CloseConn($conn){
    $conn ->close();
}
?>
