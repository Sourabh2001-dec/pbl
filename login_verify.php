<?php
include_once 'db.php';
  
$uname = $_POST['username'];
$password = $_POST['password'];

if ($uname != "" && $password != ""){

    $sql = "select count(*) as cntUser from user where email='".$uname."' and password='".$password."'";
    $result = $conn->query($sql);
    $row = mysqli_fetch_array($result);
    $count = $row['cntUser'];

    if($count > 0){
        $sql = "select * from user where email='".$uname."' and password='".$password."'";
        $results = $conn->query($sql);
        $row = $results->fetch_assoc();
        session_start();
        $_SESSION['name']=$row['firstname'].' '.$row['lastname'];
        $_SESSION['mail']=$row['email'];
        echo 1;
    }else{
        echo 0;
    }
}
?>