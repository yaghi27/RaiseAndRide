<?php
    include('../../DAL/Connection.php');
    $conn = OpenCon();
    $id = $_POST['html'];
    $sql = "select * from donations where id = ".$id."";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        
        while($row = mysqli_fetch_array($result))
        {
            $array[] = $row;
        }
        echo json_encode($array);
    } else {
        echo json_encode(0);
    }
    CloseConn($conn);
?>

