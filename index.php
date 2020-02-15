<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>InfoGeek</title>
    <link rel="stylesheet" href="resources\css\style.css">
    <link rel="stylesheet" href="vendor\css\skeleton.css">
</head>

<body>
    <?php include "navbar.php" ?>
    <section class="row form_tab nav_fix clearfix">
        Category : <select id="category_select">
            <option value="">Physics</option>
            <option value="">Mathematics</option>
            <option value="">Sports</option>
            <option value="">Mechanival Engineering</option>
        </select>
        <div class="search">
            <div class="nine columns clearfix">
            <input type="text" name="search" id="searchbox" placeholder="Search here.." class="searchbox">
            </div>

            <div class="three columns clearfix">
            <input type="submit" name="search_word" value="Search" class="searchbutton">
            </div>
        </div>
    </section>
    <div class="row">
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




    <div class="row load_more-row clearfix">
        <div class="load_more eight columns">
            <span>Load More</span>
        </div>
    </div>
    <?php include "footer.php" ?>
</body>

</html>