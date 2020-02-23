

<div class="navbar clearfix">

    <div class="logo">
        <a href="index.php"><img src="resources\img\logo2x.png" alt=""></a>
    </div>

    <ul class="navbar_menu session_nav">
        <li><a href="#">Create Post</a></li>
        <li><a href="logout.php">Logout</a></li>
        <li><a  style="color: black;font-weight:bold;"><i class="fas fa-user" style="color:#3f3f3f;"></i> &nbsp; <?php 
        
        if (isset($_SESSION['name'])) {
            echo $_SESSION['name'];
        }
        ?>
        </a></li>
        
    </ul>

</div>


















