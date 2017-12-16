<?php
/**
 * Created by PhpStorm.
 * User: tanse
 * Date: 12/16/2017
 * Time: 3:52 PM
 */
session_start();
if(!isset($_SESSION['email'])){

    header("Location: index.php");

}
else{
session_destroy();
header("Location: index.php");
?>
}