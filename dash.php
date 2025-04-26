<?php
session_start();

if($_SESSION['role']=='admin'){
 header('location:admin.php');   
}else{
    header('location:dashboard.php');   
}


?>