
<?php 
    include_once "db.php";

    if(isset($_POST['save'])){
        if($_POST['register_user_password']==$_POST['register_user_confirm-password']){
        $sql = "INSERT INTO user (firstname, lastname, email, password) VALUES ('".$_POST["reg_user_firstname"]."','".$_POST["reg_user_lastname"]."','".$_POST["register_user_email"]."','".$_POST["register_user_password"]."')";
        
    

$sql = "INSERT INTO user (firstname, lastname, email, password) VALUES ('".$_POST["reg_user_firstname"]."','".$_POST["reg_user_lastname"]."','".$_POST["register_user_email"]."','".$_POST["register_user_password"]."')";

$conn->query($sql);


$conn->close();
        }
        else{
            echo "entered password and confirmed pawword does not match";
        }
}
?>


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
        
        <form action="register.php" method="post" class="login_box">
            <div>Sign Up</div> <br><br>

            First name <br>
            <input type="text" name="reg_user_firstname" id="reg_user_firstname" required><br><br>

            Last name <br>
            <input type="text" name="reg_user_lastname" id="reg_user_lastname" required><br><br>

            Email <br>
            <input type="email" name="register_user_email" id="user_email" required> <br><br>
            Password <br>
            <input type="password" name="register_user_password" id="user_password" required>
            <br><br>

            Confirm Password <br>
            <input type="password" name="register_user_confirm-password" id="user_password" required>
            <br><br>
            <div class="login_submit_button">
            <input type="submit" value="Sign Up" name='save'><br>

            
            <span>
            <a href="login.php">Login</a></span>
            </div>
        </form>
        
    </section>

    <?php include "footer.php" ?>
    <script src="resources\js\register.js"></script>
</body>
</html>