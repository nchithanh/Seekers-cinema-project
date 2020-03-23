<?php
include "model/connect.php";
include_once "model/user.php";
 unset($_SESSION['id']);
 unset($_SESSION['user']);
 unset($_SESSION['role']);
 header('location: index.php') ;
?>