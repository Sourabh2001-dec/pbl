<nav class="navbar navbar-expand-sm navbar-dark bg-dark sticky-top">
    <a class="navbar-brand" href="#"><img src="resources/img/logo.png" alt=""></a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
        aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">



            <li class="nav-item mx-2">
                <a class="nav-link text-white" href="createpost.php">Create</a>
            </li>


            <li class="nav-item mx-2">
                <a class="nav-link text-white" href="login.php">Contact</a>
            </li>

            <li class="nav-item mx-2">
                <a class="nav-link text-white" href="login.php">Login</a>
            </li>


            <li class="nav-item mx-2">
                <a class="nav-link text-white" href="register.php">Sign Up</a>
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
        </ul>
    </div>
</nav>