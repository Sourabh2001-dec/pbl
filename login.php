
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>InfoGeek</title>

    <link rel="stylesheet" href="resources/css/style.css">
</head>

<body>
    <?php include "plain_navbar.php" ?>

    <section class="nav_fix login_container">
        
        <?php 
            if (isset($_SESSION['name'])) {
                echo isset($_SESSION['name']);
            };
        ?>



        <form class="login_box">
            <div class="form-heading">Login</div> <br><br>
            <span id="message" style="color:red"></span>
                
            Email <br>
            <input type="email" name="user_email" id="user_email" required> <br><br>
            Password <br>
            <input type="password" name="user_password" id="user_password" required>
            <br><br>
            <div class="login_submit_button">
            <input type="button" value="Login" name='login' id ='login_button'><br>

                

            <span>
            New here? <a href="register.php">Create Account</a></span>
            </div>
        </form>
        
    </section>
    
<?php include "footer.php" ?>
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<script>
$(document).ready(function(){
    $("#login_button").click(function(){
        var username = $("#user_email").val().trim();
        var password = $("#user_password").val().trim();
        console.log(username,password)

        if( username != "" && password != "" ){
            $.ajax({
                url:'login_verify.php',
                type:'POST',
                data:{username:username,password:password},
                success:function(response){
                    var msg = "";
                    if(response == 1){
                        window.location = "index.php";
                    }else{
                        msg = "Invalid username or password!";
                        $("#message").html(msg+"<br><br>");
                    }
                    
                }
            });
        }
    });
});
</script>
    
</body>

</html>