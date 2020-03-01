<?php 
    include_once "db.php";

    if(isset($_POST['save'])){
        if($_POST['register_user_password']==$_POST['register_user_confirm_password']){
        $sql = "INSERT INTO user (firstname, lastname, email, password) VALUES ('".$_POST["reg_user_firstname"]."','".$_POST["reg_user_lastname"]."','".$_POST["register_user_email"]."','".$_POST["register_user_password"]."')";
        
    

    if($conn->query($sql)){
        echo 'submitted';
    };


    $conn->close();


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

    <?php
    include_once 'link_inc.php'
    ?>

    <style>
        #student,
        #faculty {
            box-shadow: -4px 9px 25px -6px rgba(0, 0, 0, .1);
            padding: 10px 10px;
            /* margin-bottom: 15vh; */
        }

        .nav-pills .nav-link.active,
        .nav-pills .show>.nav-link {
            color: #fff;
            background-color: #FF9123;
        }

        a {
            color: #a5a5a5;
            text-decoration: none;
            background-color: transparent;
        }

        a:hover {
            color: #a5a5a5;
        }

        section{
            min-height:80vh;
        }

        .btn{
            background-color: transparent;
            border: 1px solid #FF9123;
            color: #FF9123;
            min-width: 100px;
        }

        .btn:hover{
            color: white;
            background-color: #FF9123;
        }
    </style>

</head>

<body>
    <?php include "plain_navbar.php" ?>

    <!-- <section class="login_container">
        
        <form action="register.php" method="post" class="login_box" id="register_form">
            <div class="form-heading">Sign Up</div> <br><br>

            <div style="font-weight: bold;">First name</div>
            <input type="text" name="reg_user_firstname" id="reg_user_firstname" required><br>

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
            <input type="submit" value="Sign Up" name='save' id = "save_button"><br>

            
            <span>
            <a href="login.php">Login</a></span>
            </div>
        </form>



        
    </section> -->

    <section>

        <div class="container">

            <ul class="nav nav-pills justify-content-center" style="padding: 5vh;">
                <li class="nav-item"><a class="nav-link active" data-toggle="pill" href="#student">PICT Student</a></li>


                <li class="nav-item"><a class="nav-link" data-toggle="pill" href="#faculty">PICT Faculty</a></li>
            </ul>



            <div class="tab-content">
                <div class="tab-pane active container" id="student">
                    <form id="register_form" method="POST" action="register.php" class="mb-4">
                        <div class="form-row">

                            <div class="form-group col-md-6">
                                <label for="reg_user_firstname">First Name</label>
                                <input type="text" class="form-control" name="reg_user_firstname"
                                    id="reg_user_firstname" placeholder="First Name" required>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="reg_user_lastname">Last Name</label>
                                <input type="text" class="form-control" name="reg_user_lastname" id="reg_user_lastname"
                                    placeholder="Last Name" required>
                            </div>

                        </div>
                        <div class="form-group">
                            <label for="register_user_email">Email Address</label>
                            <input type="email" class="form-control" name="register_user_email" id="register_user_email"
                                placeholder="xyz@example.com">
                        </div>

                        <div class="form-row">

                            <div class="form-group col-md-6">
                                <label for="register_user_password">Password</label>
                                <input type="password" class="form-control" name="register_user_password"
                                    id="register_user_password" placeholder="Password" required>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="register_user_password">Confirm Password</label>
                                <input type="password" class="form-control" name="register_user_confirm_password"
                                    id="register_user_confirm_password" placeholder="Password" required>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-6  form-group">
                                <label for="year">Select Year</label>
                                <select name="year" id="year" class="form-control" required>
                                    <option value="0">Select Year..</option>
                                    <option value="1">FE</option>
                                    <option value="2">SE</option>
                                    <option value="3">TE</option>
                                    <option value="4">BE</option>
                                </select>
                            </div>
                            <div class="col-md-6  form-group">
                                <label for="divi">Select division</label>
                                <select name="divi" id="divi" class="form-control" required>
                                    <option value="0">Select Division..</option>
                                    <option value="1">01</option>
                                    <option value="2">02</option>
                                    <option value="3">03</option>
                                    <option value="4">04</option>
                                    <option value="5">05</option>
                                    <option value="6">06</option>
                                    <option value="7">07</option>
                                    <option value="8">08</option>
                                    <option value="9">09</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>

                                </select>
                            </div>
                        </div>
                        <button type="submit" name='save' class="btn rounded-pill mt-3" style="margin-left: 50%;
                        transform: translateX(-50%);" id='save_button'>Sign in</button>
                    </form>

                </div>

                <div class="tab-pane fade container" id="faculty">

                    <form id="register_form2" method="POST" action="register.php" class="mb-4">
                        <div class="form-row">

                            <div class="form-group col-md-6">
                                <label for="reg_user_firstname">First Name</label>
                                <input type="text" class="form-control" name="reg_user_firstname"
                                    id="reg_user_firstname2" placeholder="First Name" required>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="reg_user_lastname">Last Name</label>
                                <input type="text" class="form-control" name="reg_user_lastname" id="reg_user_lastname2"
                                    placeholder="Last Name" required>
                            </div>

                        </div>
                        <div class="form-group">
                            <label for="register_user_email">Email Address</label>
                            <input type="email" class="form-control" name="register_user_email"
                                id="register_user_email2" placeholder="xyz@example.com">
                        </div>

                        <div class="form-row">

                            <div class="form-group col-md-6">
                                <label for="register_user_password">Password</label>
                                <input type="password" class="form-control" name="register_user_password"
                                    id="register_user_password2" placeholder="Password" required>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="register_user_password">Confirm Password</label>
                                <input type="password" class="form-control" name="register_user_confirm_password"
                                    id="register_user_confirm_password2" placeholder="Password" required>
                            </div>

                        </div>


                        <button type="submit" name='save' class="btn rounded-pill mt-3" style="margin-left: 50%;
                        transform: translateX(-50%);">Sign in</button>
                    </form>


                </div>
            </div>
        </div>

    </section>

    <?php include "footer.php" ?>


    <script src="vendor\js\jquery.validate.min.js"></script>
    <script>
        $(function () {

            $("#register_form").validate({
                rules: {
                    reg_user_firstname: {
                        required: true,
                        lettersonly: true
                    },
                    reg_user_lastname: {
                        required: true,
                        lettersonly: true
                    },
                    register_user_email: {
                        required: true,
                        email: true,
                        uniquemail: true,
                    },
                    register_user_password: {
                        required: true,
                        // number: true,
                        minlength: 5
                    },
                    register_user_confirm_password: {
                        equalTo: '#register_user_password'
                    }
                },
                messages: {
                    reg_user_firstname: {
                        required: "Please enter your first name",
                        lettersonly: "Please enter only alphabetical characters"
                    },
                    reg_user_lastname: {
                        required: "Please enter your last name",
                        lettersonly: "Please enter only alphabetical characters"
                    },
                    register_user_password: {
                        required: "Please provide a password",
                        // number: "Please provide a Numeric value",
                        minlength: "Your password must be at least 5 characters long"
                    },
                    register_user_email: {
                        email: "Please enter a valid email address",
                        uniquemail: "email already present",
                    },
                    register_user_confirm_password: {
                        required: "Please confirm password",
                        equalTo: "Password does not match",

                    }
                },

                submitHandler: function (form) {
                    form.submit();
                    alert(form.register_user_email.value)
                    alert("submitted")
                    // $('#save_button').value = "Creating Account..";
                    // Location.reload();
                    // alert("submitted");
                    console.log(form.register_user_email.value)

                }
            });


            jQuery.validator.addMethod("uniquemail", function (value, element) {

                var success = true;

                var data = new FormData();
                data.append('mail', value);

                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        if (xhttp.responseText == 'F') {
                            success = false
                        } else {
                            success = true
                        }
                    }
                };
                xhttp.open("POST", "uniuser.php", false);
                xhttp.send(data);

                return success;
            }, '');

            jQuery.validator.addMethod("lettersonly", function (value, element) {
                return this.optional(element) || /^[a-z]+$/i.test(value);
            }, "Letters only please");


        });



        $(function () {

            $("#register_form2").validate({
                rules: {
                    reg_user_firstname: {
                        required: true,
                        lettersonly: true
                    },
                    reg_user_lastname: {
                        required: true,
                        lettersonly: true
                    },
                    register_user_email: {
                        required: true,
                        email: true,
                        uniquemail: true,
                    },
                    register_user_password: {
                        required: true,
                        // number: true,
                        minlength: 5
                    },
                    register_user_confirm_password: {
                        equalTo: '#register_user_password2'
                    }
                },
                messages: {
                    reg_user_firstname: {
                        required: "Please enter your first name",
                        lettersonly: "Please enter only alphabetical characters"
                    },
                    reg_user_lastname: {
                        required: "Please enter your last name",
                        lettersonly: "Please enter only alphabetical characters"
                    },
                    register_user_password: {
                        required: "Please provide a password",
                        // number: "Please provide a Numeric value",
                        minlength: "Your password must be at least 5 characters long"
                    },
                    register_user_email: {
                        email: "Please enter a valid email address",
                        uniquemail: "email already present",
                    },
                    register_user_confirm_password: {
                        required: "Please confirm password",
                        equalTo: "Password does not match",

                    }
                },

                submitHandler: function (form) {
                    form.submit();
                    alert(form.register_user_email.value)
                    alert("submitted")
                    // $('#save_button').value = "Creating Account..";
                    // Location.reload();
                    // alert("submitted");
                    console.log(form.register_user_email.value)

                }
            });


            jQuery.validator.addMethod("uniquemail", function (value, element) {

                var success = true;

                var data = new FormData();
                data.append('mail', value);

                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        if (xhttp.responseText == 'F') {
                            success = false
                        } else {
                            success = true
                        }
                    }
                };
                xhttp.open("POST", "uniuser.php", false);
                xhttp.send(data);

                return success;
            }, '');

            jQuery.validator.addMethod("lettersonly", function (value, element) {
                return this.optional(element) || /^[a-z]+$/i.test(value);
            }, "Letters only please");


        });
    </script>

</body>

</html>