
<?php 
    include_once "db.php";

    if(isset($_POST['save'])){
        if($_POST['register_user_password']==$_POST['register_user_confirm_password']){
        $sql = "INSERT INTO user (firstname, lastname, email, password) VALUES ('".$_POST["reg_user_firstname"]."','".$_POST["reg_user_lastname"]."','".$_POST["register_user_email"]."','".$_POST["register_user_password"]."')";
        
    

$sql = "INSERT INTO user (firstname, lastname, email, password) VALUES ('".$_POST["reg_user_firstname"]."','".$_POST["reg_user_lastname"]."','".$_POST["register_user_email"]."','".$_POST["register_user_password"]."')";

$conn->query($sql);


$conn->close();

$json['message'] ="Entered data successfully";

echo json_encode($json);
        }
        else{
            echo "entered password and confirmed password does not match";
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
        
        <form action="register.php" method="post" class="login_box" id="register_form">
            <div class="form-heading">Sign Up</div> <br><br>

            <div style="font-weight: bold;">First name</div>
            <input type="text" name="reg_user_firstname" id="reg_user_firstname" required><br><br>

            <div style="font-weight: bold;">Last name</div> 
            <input type="text" name="reg_user_lastname" id="reg_user_lastname" required><br><br>

            <div style="font-weight: bold;">Email</div> 
            <input type="email" name="register_user_email" id="user_email" required> <br><br>
            <div style="font-weight: bold;">Password</div>
            <input type="password" name="register_user_password" id="register_user_password" required>
            <br><br>

            <div style="font-weight: bold;">Confirm Password</div> 
            <input type="password" name="register_user_confirm_password" id="confirm_user_password" required>
            <br><br>
            <div class="login_submit_button">
            <input type="submit" value="Sign Up" name='save'><br>

            
            <span>
            <a href="login.php">Login</a></span>
            </div>
        </form>
        
    </section>

    <?php include "footer.php" ?>
    <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js" integrity="sha256-sPB0F50YUDK0otDnsfNHawYmA5M0pjjUf4TvRJkGFrI=" crossorigin="anonymous"></script>
<script>
$(function() {
	  
	$("#register_form").validate({
	  rules: {
        reg_user_firstname: {
            required:true,
            lettersonly:true
        },
        reg_user_lastname: {
				required: true,
				lettersonly: true
			},
			register_user_email: {
				required: true,
				email: true
			},
			register_user_password: {
				required: true,
				// number: true,
				minlength: 5
			},
            register_user_confirm_password:{
                equalTo:'#register_user_password'
            }
		},
		messages: {
			reg_user_firstname: "Please enter your first name",
			reg_user_lastname: {
				required: "Please enter your last name",
				lettersonly: "Please enter only alphabetical characters"
			},
			register_user_password: {
				required: "Please provide a password",
				// number: "Please provide a Numeric value",
				minlength: "Your password must be at least 5 characters long"
			},
            register_user_email: "Please enter a valid email address",
            register_user_confirm_password : {
                required: "Please confirm password",
                equalTo : "Password does not match"
            }
		},

		submitHandler: function(form) {
			// $.ajax({
			// 	url: form.action,
			// 	type: form.method,
			// 	data: $(form).serialize(),
			// 	dataType: "json",
			// 	success: function(response) {
			// 		alert(response.message);
			// 		location.reload();
			// 	}            
            // });
            form.submit();
            alert("submitted");
            Location.reload();
		}
	});
	
	jQuery.validator.addMethod("lettersonly", function(value, element) {
	  return this.optional(element) || /^[a-z]+$/i.test(value);
	}, "Letters only please"); 

});
</script>
    
</body>
</html>