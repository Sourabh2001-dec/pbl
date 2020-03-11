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
        section {
            min-height: 79vh;
            padding-top: 10vh;
        }

        section form {
            box-shadow: -4px 9px 25px -6px rgba(0, 0, 0, .1);
            padding: 3%;

        }
    </style>

</head>

<body>
    <?php include "plain_navbar.php" ?>

    <section class="container">



        <form id="register_form">
            <div style="text-align:center;font-size:170%;color:#ff9123;margin-bottom: 20px;">
                Login
            </div>
            <div class="form-row">
                <div class="col-md-3"></div>
                <div class="msg col-md-6 text-danger"></div>
                <div class="col-md-3"></div>
            </div>
            <div class="form-row">
                <div class="col-md-3"></div>
                <div class="form-group col-md-6">
                    <label for="user_email">Email</label>
                    <input type="email" class="form-control" name="user_email" id="user_email" required>
                    <label for="user_password">Password</label>
                    <input type="password" class="form-control" name="user_password" id="user_password" required>

                </div>
                <div class="col-md-3"></div>
            </div>


            <div class="login_submit_button">
                <input type="button" value="Login" name='login' id='login_button'><br>

                <span>
                    New here? <a href="register.php">Create Account</a></span>
            </div>

        </form>










    </section>

    <?php include "footer.php" ?>

    <script>
        $(document).ready(function () {
            if ($("#user_email").val() != "") {
                $('input[type="password"]').focus();
            }

            var callback = function () {
                var username = $("#user_email").val().trim();
                var password = $("#user_password").val().trim();
                console.log(username, password)

                if (username != "" && password != "") {
                    $.ajax({
                        url: 'login_verify.php',
                        type: 'POST',
                        data: {
                            username: username,
                            password: password
                        },
                        success: function (response) {
                            var msg = "";
                            if (response == 1) {
                                window.location = "index.php";
                            } 
                            else if(response == 10){
                                $(".msg").html("Already Logged In On Another Device!");
                            }
                            else {
                                msg = "Invalid username or password!";
                                $(".msg").html(msg);
                            }

                        }
                    });
                }
            }

            $('input').keypress(function () {
                if (event.which == 13) {
                    callback()
                };
            })


            $("#login_button").click(function () {
                callback()
            });
        });
    </script>

</body>

</html>