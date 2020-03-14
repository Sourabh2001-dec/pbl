<?php
include_once 'db.php';
  
$uname = $_POST['username'];
$password = $_POST['password'];

if ($uname != "" && $password != ""){

    $sql = "select count(*) as cntUser from user where email='".$uname."' and password='".$password."'";
    $result = $conn->query($sql);
    $row = mysqli_fetch_array($result);
    $count = $row['cntUser'];
    //1 for logged in 10 for not logged in
    if($count > 0){
        $sql = "select * from user where email='".$uname."' and password='".$password."'";
        $results = $conn->query($sql);
        $row = $results->fetch_assoc();

        if ($row['status']==false) {
            $sql = "UPDATE user SET status=true WHERE email='".$row['email']."'";
            $conn->query($sql);
            session_start();
            $_SESSION['name']=$row['firstname'].' '.$row['lastname'];
            $_SESSION['mail']=$row['email'];
            echo 1;
        }
        else{
            echo 10;
        }

        
    }else{
        echo 0;
    }
}


function getToken($length){
 $token = "";
 $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
 $codeAlphabet.= "abcdefghijklmnopqrstuvwxyz";
 $codeAlphabet.= "0123456789";
 $max = strlen($codeAlphabet); // edited

 for ($i=0; $i < $length; $i++) {
  $token .= $codeAlphabet[random_int(0, $max-1)];
 }

 return $token;
}
?>