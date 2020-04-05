<?php
{
	unset($_SESSION['id']);
    unset($_SESSION['user']);
    unset($_SESSION['role']);
    unset($_SESSION['mail']);
    header('location: ../index.php') ;
}
?>