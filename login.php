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
        
        <form action="login.php" method="post" class="login_box">
            <div class="form-heading">Login</div> <br><br>

            Email <br>
            <input type="email" name="user_email" id="user_email" required> <br><br>
            Password <br>
            <input type="password" name="user_password" id="user_password" required>
            <br><br>
            <div class="login_submit_button">
            <input type="submit" value="Login"><br>
            <span>
            New here? <a href="register.php">Create Account</a></span>
            </div>
        </form>
        
    </section>
    
<?php include "footer.php" ?>
    
</body>

</html>