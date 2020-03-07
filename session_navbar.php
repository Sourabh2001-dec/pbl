


<nav class="navbar navbar-expand-sm navbar-dark bg-dark sticky-top">
    <a class="navbar-brand" href="#"><img src="resources/img/logo.png" alt=""></a>
    <li class="nav-item btn bg-light rounded ml-auto  d-sm-none" style="font-size:90%;padding:3px 10px">
                <i class="fas fa-user" style="color:#3f3f3f;"></i>
                <?php 
        
        if (isset($_SESSION['name'])) {
            echo $_SESSION['name'];
        }
        ?>
            </li>

    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
        aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">



            <li class="nav-item mx-1">
                <a class="nav-link text-white" href="createpost.php">Create</a>
            </li>


            <li class="nav-item mx-1">
                <a class="nav-link text-white" href="login.php">Contact</a>
            </li>

            <li class="nav-item mx-1">
                <a class="nav-link text-white" href="login.php">Control Panel</a>
            </li>


            <li class="nav-item mx-1">
                <a class="nav-link text-white" href="logout.php">Logout</a>
            </li>


            <li class="nav-item d-sm-none text-white">
                <div class="nav-link text-white">
                    Category : <select id="category_select"
                        class="form-control-inline text-white bg-dark border border-0">
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

            <li class="nav-item btn bg-light rounded mx-1 d-sm-block d-none " style="font-size:100%;text-transform: capitalize;">
                <i class="fas fa-user" style="color:#3f3f3f;"></i>
                <?php 
        
        if (isset($_SESSION['name'])) {
            echo $_SESSION['name'];
        }
        ?>
            </li>
            
        </ul>
    </div>
</nav>