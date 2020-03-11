<?php
session_start();
include_once 'db.php';

$sql = "UPDATE user SET status=false WHERE email='".$_SESSION['mail']."'";
$conn->query($sql);

session_destroy();

echo "<script>window.location.href='index.php'</script>"
?>