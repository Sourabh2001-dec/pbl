<?php
include_once 'db.php';

if (isset($_POST['mail'])) {
    $mail = $_POST['mail'];

if ($mail != ""){

    $sql = "select count(*) as cntUser from user where email='".$mail."'";
    $result = $conn->query($sql);  
    $conn->close();
    $row = mysqli_fetch_array($result);
    $count = $row['cntUser'];

if($count > 0){
    echo 'F';
}else{
    echo 'T';
}
}
}

