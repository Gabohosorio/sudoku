<!--Developed by: Gabohsoft 2023P2-->
<?php
	session_start();
  $_SESSION['page'] = "inicio.php";
  //$_SESSION['vlbt'] = 1;
  header('Location: inicio.php');
?>