<!--Developed by: Gabohsoft 2023P2-->
<?php
  require_once 'includes/head.php';
	//session_start();
  $_SESSION['page'] = "inicio.php";
  $_SESSION['er_title'] = "Error de acceso a archivo";
	$_SESSION['er_user'] = "El archivo no se encuentra";
  $_SESSION['based'] = array();
  $_SESSION['level'] = rand(1, 152);
  leerFile('assets/base.csv', $_SESSION['level']);
  header('Location: inicio.php');
?>