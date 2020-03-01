
<nav class="navbar navbar-expand-sm navbar-dark bg-dark sticky-top">
    <a class="navbar-brand" href="index.php"><img src="resources/img/logo.png" alt=""></a>

    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
        aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
    
    
    <?php  
    $url= $_SERVER['REQUEST_URI']; 
    $require = explode('/',$url)  ;
    $name = explode('.',$require[count($require)-1]);
    if($name[0] == 'register'){
        echo '<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
<li class="nav-item mx-1">
            <a class="nav-link text-white" href="index.php">Home</a>
        </li>

        <li class="nav-item mx-1">
            <a class="nav-link text-white" href="login.php">Login</a>
        </li>

        
    </ul>';

    }
    else if($name[0] == 'login'){
        echo '<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
<li class="nav-item mx-1">
            <a class="nav-link text-white" href="index.php">Home</a>
        </li>

        <li class="nav-item mx-1">
            <a class="nav-link text-white" href="register.php">Sign Up</a>
        </li>

        
    </ul>';

    };
    
    ?>
    </div>
</nav>