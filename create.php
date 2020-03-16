<?php session_start();
include 'check_token.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>InfoGeek</title>
    <link rel="stylesheet" href="resources\css\style.css">
    <link rel="stylesheet" href="vendor\css\skeleton.css">
    <link rel="stylesheet" href="vendor\css\fontawesome.min.css">
    <link rel="stylesheet" href="vendor\css\all.css">
    <link rel="stylesheet" href="vendor/css/bootstrap.min.css">

    <script src="vendor/js/jquery.min.js"></script>
    <script src="vendor/js/popper.js"></script>
    <script src="vendor/js/bootstrap.min.js"></script>


</head>

<body>
    <?php 
    
    if (isset($_SESSION['name'])) {
        include 'navbar.php';
    }
    else{
        session_destroy();
        include 'navbar.php';
        
    }
     ?>

    
    <div class="container mt-5  ">
    <div class="row">
        <div class="col-md-4">
        <div class="card mx-auto " style="width: 18rem;">
            <img class="card-img-top" src="./resources/img/post.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Article</h5>
              <p class="card-text">with the help of this service you can create and publish articles for public as well as targeted members.</p>
              <a href="createpost.php" class="btn btn-primary">Create</a>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card mx-auto mt-1" style="width: 18rem;">
            <img class="card-img-top" src="./resources/img/message.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Broadcast Message</h5>
              <p class="card-text">With this service you can broadcast message for public as well as targeted members as email.</p>
              <a href="message.php" class="btn btn-primary">Create</a>
            </div>
          </div>
        </div>


        <div class="col-md-4">
          <div class="card mx-auto mt-1" style="width: 18rem;">
            <img class="card-img-top" src="./resources/img/notes.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Notes</h5>
              <p class="card-text">With this service you can create notes for public as well as targeted members</p>
              <a href="notes.php" class="btn btn-primary">Create</a>
            </div>
          </div>
        </div>
       
    </div>
    </div>

    <?php
    include 'footer.php' ?>
</body>
</html>