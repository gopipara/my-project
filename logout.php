<?php
session_start();

if(!isset($_SESSION['user']))
{
 header("Location: home.php");
}
else if(isset($_SESSION['user'])!="")
{
 header("Location: login.php");
}

if(isset($_GET['logout']))
{
 session_destroy();
 unset($_SESSION['user']);
 header("Location: login.php");
}
?>