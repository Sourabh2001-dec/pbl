<?php 
    include_once "db.php";

    if(isset($_POST['save'])){
        echo $_POST['divi'];
        if($_POST['register_user_password']==$_POST['register_user_confirm_password']){

            $uname = $_POST['register_user_email'];
            $password = $_POST['register_user_password'];

            if ($uname != "" && $password != ""){

            $sql = "select count(*) as cntUser from user where email='".$uname."' and password='".$password."'";
            $result = $conn->query($sql);
            $row = mysqli_fetch_array($result);
            $count = $row['cntUser'];

            if($count > 0){
                echo '';
                
            }else{
                $sql = "INSERT INTO user (firstname, lastname, email, password, is_teacher, year, division) VALUES ('".$_POST["reg_user_firstname"]."','".$_POST["reg_user_lastname"]."','".$_POST["register_user_email"]."','".$_POST["register_user_password"]."','".$_POST["is_teacher"]."','".$_POST["year"]."','".$_POST["divi"]."')";
                $conn->query($sql);
            
            }

            $conn->close();


        }
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

        section {
            min-height: 80vh;
        }

        .btn {
            background-color: transparent;
            border: 1px solid #FF9123;
            color: #FF9123;
            min-width: 100px;
        }

        .btn:hover {
            color: white;
            background-color: #FF9123;
        }
    </style>

</head>

<body>
    <?php include "plain_navbar.php" ?>

    
    
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Registration Successful!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!-- <div class="modal-body">
        Registration Successful
      </div> -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">OK</button>
        <a href="login.php"><button type="button" class="btn btn-primary">Go to Login</button></a>
      </div>
    </div>
  </div>
</div>


    <section>

        <div class="container">

            <ul class="nav nav-pills justify-content-center" style="padding: 5vh;">
                <li class="nav-item"><a class="nav-link active" data-toggle="pill" href="#student">PICT Student</a></li>


                <li class="nav-item"><a class="nav-link" data-toggle="pill" href="#faculty">PICT Faculty</a></li>
            </ul>



            <div class="tab-content">
                <div class="tab-pane active container" id="student">
                    <form id="register_form" class="mb-4">
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
                                    <option value=0>Select Year..</option>
                                    <option value="FE">FE</option>
                                    <option value="SE">SE</option>
                                    <option value="TE">TE</option>
                                    <option value="BE">BE</option>
                                </select>
                            </div>
                            <div class="col-md-6  form-group">
                                <label for="divi">Select division</label>
                                <select name="divi" id="divi" class="form-control" required>
                                    <option value=0>Select Division..</option>
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
                        transform: translateX(-50%);" id='save_button'>Sign Up</a>
                    </form>

                </div>

                <div class="tab-pane fade container" id="faculty">

                    <form id="register_form2" class="mb-4">
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
                        transform: translateX(-50%);">Sign Up</button>
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
                    },
                    divi : {
                        required : true,
                        selection : true
                    },
                    year : {
                        required : true,
                        selection : true
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

                    $.ajax({
                        type: "POST",
                        url: 'register.php',
                        data: {
                            register_user_confirm_password:form.register_user_confirm_password.value,
                            register_user_email:form.register_user_email.value,
                            register_user_password:form.register_user_password.value,
                            reg_user_lastname:form.reg_user_lastname.value,
                            reg_user_firstname:form.reg_user_firstname.value,
                            divi : form.divi.value,
                            year : form.year.value,
                            is_teacher : '0',
                            save : 'save'

                        }, // serializes the form's elements.
                        success: function () {
                            $('#myModal').modal('show');
                            alert(form.divi.value)
                            form.reset();      
                        }
                    });

                    

                    
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

            jQuery.validator.addMethod("selection", function (value, element) {
                if(value == 0){
                    return false;
                }
                else{
                    return true;
                }
            }, "Please do the selection");


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
                    $.ajax({
                        type: "POST",
                        url: 'register.php',
                        data: {
                            register_user_confirm_password:form.register_user_confirm_password.value,
                            register_user_email:form.register_user_email.value,
                            register_user_password:form.register_user_password.value,
                            reg_user_lastname:form.reg_user_lastname.value,
                            reg_user_firstname:form.reg_user_firstname.value,
                            divi : '0',
                            year : '0',
                            is_teacher : '1',
                            save : 'save'

                        }, // serializes the form's elements.
                        success: function () {
                            $('#myModal').modal('show');
                            form.reset();      
                        }
                    });


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