<nav class="navbar navbar-expand-sm sticky-top">
    <a class="navbar-brand" href="index.php"><img src="resources/img/Group 5.png" alt=""></a>

    <?php if (isset($_SESSION['name'])) {
        echo '<img src="resources/img/icons8-male-user-32.png" class="ml-auto mr-1 d-sm-none">';
    }?>

    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
        aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars" style="color : grey"></i>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">

        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">

            <?php 
        if (isset($_SESSION['name'])) {
            echo '<li class="nav-item">
            <div class="nav-link mx-1  btn bg-light rounded mx-1 " style="font-size:90%"><i class="fas fa-user" style="color:#3f3f3f;"></i>&nbsp;'.$_SESSION['name'].'</div> </li>';
        }
        
        ?>

            <li class="nav-item">
                <a class="nav-link mx-1 " href="create.php">Create</a>
            </li>


            <li class="nav-item">
                <a class="nav-link mx-1 " href="login.php">Contact</a>
            </li>



            <?php 
                if (isset($_SESSION['name'])) {
                    echo '<li class="nav-item ">
                    <a class="nav-link mx-1 text-white" href="logout.php">Logout</a>
                </li>';
                }
                else{
                    echo '<li class="nav-item">
                    <a class="nav-link mx-1 " href="login.php">Login</a>
                </li>
    
    
                <li class="nav-item ">
                    <a class="nav-link mx-1 " href="register.php">Sign Up</a>
                </li>';
                }
            ?>

            <li class="nav-item d-sm-none">
                <div class="nav-link mx-1">
                    <label for="category_select">Category: &nbsp;</label><select id="category_select"
                        class="form-control border w-75" name="category_select" style="display:inline-block">
                        <option value="">Physics</option>
                        <option value="">Mathematics</option>
                        <option value="">Sports</option>
                        <option value="">Mechanical Engineering</option>
                    </select>
                </div>

                <form class="form-inline w-100 py-1" style="display:inline-block;">
                    <input class="form-control-inline mr-sm-2  border rounded" style="width:60%;padding:.375rem .75rem;"
                        type="text" placeholder="Search">
                    <button class="btn btn-outline-warning " type="submit">Search</button>
                </form>

            </li>
        </ul>
    </div>
</nav>