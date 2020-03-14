<?php

include 'db.php';

if (isset($_SESSION['mail'])) {
  $result = $conn->query("SELECT token FROM user_token where username='".$_SESSION['mail']."'");
 
  if (mysqli_num_rows($result) > 0) {
 
   $row = mysqli_fetch_array($result); 
   $token = $row['token']; 

   if($_SESSION['token'] != $token){
    session_destroy();
    header('Location: logout.php');
   }
  }
}