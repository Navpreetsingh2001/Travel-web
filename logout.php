<?php
// include"connect.php";

// $_SESSION = [];
// session_unset();
// session_destroy();
session_start();

session_destroy();
header('location:index.php');

?>