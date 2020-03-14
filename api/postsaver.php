<?php
session_start();
include '../check_token.php';

include_once '../db.php';

if (isset($_POST['job'])) {

    if($_POST['job']=="save"){
        $blog_id = uniqid();
        $author = $_SESSION['name'];
        $mail = $_SESSION['mail'];
        $sql = "INSERT INTO post_data (blog_id, title, category, thumb_img, content, public, fe_branch, fe_div, se_branch, se_div, te_branch, te_div, be_branch, be_div, type, author, mail) VALUES ('".$blog_id."','".$_POST['title']."','".$_POST['category']."','".$_POST['thumb_img']."','".$_POST['content']."','".$_POST['public']."','".$_POST['fe_branch']."','".$_POST['fe_div']."','".$_POST['se_branch']."','".$_POST['se_div']."','".$_POST['te_branch']."','".$_POST['te_div']."','".$_POST['be_branch']."','".$_POST['be_div']."','".$_POST['type']."','".$author."','".$mail."')";
                $conn->query($sql);
                echo $blog_id;

    }
    else if ($_POST['job']=="update") {
        $sql = "UPDATE post_data 
        SET title='".$_POST['title']."', category='".$_POST['category']."', thumb_img='".$_POST['thumb_img']."', content='".$_POST['content']."', public='".$_POST['public']."', fe_branch='".$_POST['fe_branch']."', fe_div='".$_POST['fe_div']."', se_branch='".$_POST['se_branch']."', se_div='".$_POST['se_div']."', te_branch='".$_POST['te_branch']."', te_div='".$_POST['te_div']."', be_branch='".$_POST['be_branch']."', be_div='".$_POST['be_div']."', type='".$_POST['type']."'
        WHERE blog_id='".$_POST['blog_id']."'";
        $conn->query($sql);
    }

    
}