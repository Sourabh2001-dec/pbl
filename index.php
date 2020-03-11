<?php session_start(); ?>

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
        include 'session_navbar.php';
    }
    else{
        session_destroy();
        include 'navbar.php';
        
    }
     ?>
    <section class="row_user form_tab nav_fix clearfix">
        <div class="d-none d-sm-block">
            <div class="eight columns">
                <label for="category_select"> Category : </label><select name="category_select"
                    class="form-control-inline ml-1 w-25  custom-select">
                    <option value="">Physics</option>
                    <option value="">Mathematics</option>
                    <option value="">Sports</option>
                    <option value="">Mechanival Engineering</option>
                </select>
            </div>
            <div class="four columns">
                <form class="form-inline w-100" style="display:inline-block;">
                    <input class="form-control mr-sm-2 w-50 border " type="text" placeholder="Search">
                    <button class="btn btn-outline-warning ml-1 ml-md-0" type="submit">Search</button>
                </form>
            </div>
        </div>

    </section>
    <div class="row_user">
        <div class="wrapper clearfix">
            <div class="eight columns">
                <div class="display_title">
                    LATEST POSTS
                </div>
                <!-- -----------mainpost--------- -->
                <div class="main-post clearfix">
                    <img src="resources\img\berlin.jpg" alt="" class="post_image">

                    <div class="content">
                        <div class="post_title">This is the history behind the Large Hadron Collider</div>
                        <div class="post_by_info">
                            POST BY <div class="author">ANONYMOUS</div> ON <div class="post_date">
                                05/02/2020
                            </div>
                        </div>

                    </div>
                </div>

                <!-- ----------end of post--------- -->

                <!-- -----------mainpost--------- -->
                <div class="main-post clearfix">
                    <img src="resources\img\3.jpg" alt="" class="post_image">

                    <div class="content">
                        <div class="post_title">Tricks to be followed by students while solving a maths paper</div>
                        <div class="post_by_info">
                            POST BY <div class="author">ANONYMOUS</div> ON <div class="post_date">
                                05/02/2020
                            </div>
                        </div>

                    </div>
                </div>

                <!-- ----------end of post--------- -->




                <!-- -----------mainpost--------- -->
                <div class="main-post clearfix">
                    <img src="resources\img\3.jpg" alt="" class="post_image">

                    <div class="content">
                        <div class="post_title">Tricks to be followed by students while solving a maths paper</div>
                        <div class="post_by_info">
                            POST BY <div class="author">ANONYMOUS</div> ON <div class="post_date">
                                05/02/2020
                            </div>
                        </div>

                    </div>
                </div>

                <!-- ----------end of post--------- -->




                <!-- -----------mainpost--------- -->
                <div class="main-post clearfix">
                    <img src="resources\img\3.jpg" alt="" class="post_image">

                    <div class="content">
                        <div class="post_title">Tricks to be followed by students while solving a maths paper</div>
                        <div class="post_by_info">
                            POST BY <div class="author">ANONYMOUS</div> ON <div class="post_date">
                                05/02/2020
                            </div>
                        </div>

                    </div>
                </div>

                <!-- ----------end of post--------- -->



            </div>

            <?php include "rank_sidebar.php" ?>

        </div>
    </div>




    <div class="row_user load_more-row clearfix">
        <div class="load_more eight columns">
            <span>Load More</span>
        </div>
    </div>
    <?php include "footer.php" ?>



</body>

</html>