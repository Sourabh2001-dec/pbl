<?php
include_once 'db.php';
  
$uname = $_POST['username'];
$password = $_POST['password'];


if ($uname != "" && $password != ""){

    $sql = "select * from user where email='".$uname."' and password='".$password."'";
    $result = $conn->query($sql);
    $row = mysqli_fetch_assoc($result);
   
    if($row){
        $token = getToken(10);
        session_start();
        $_SESSION['name']=$row['firstname'].' '.$row['lastname'];
        $_SESSION['mail']=$row['email'];
        $_SESSION['token'] = $token;
        $result_token = $conn->query( "select count(*) as allcount from user_token where username='".$row['email']."'");
        $row_token = mysqli_fetch_assoc($result_token);
        if($row_token['allcount'] > 0){
            $conn->query("update user_token set token='".$token."' where username='".$row['email']."'");
        }else{
            $conn->query("insert into user_token(username,token) values('".$row['email']."','".$token."')");
        }
        echo 1;
        }else{
        echo 0;
        }


        
    }else{
        echo 0;
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