<?php
include 'navbar2.php';
session_start();
if(!isset($_SESSION['email'])){

    header("Location: form.php");
}
else
{
    echo 'welcome to your profile';
}
?>