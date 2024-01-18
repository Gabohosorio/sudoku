<!--Developed by: Gabohsoft 2023S1-->
<?php
	require "includes/head.php";
  $_SESSION['er_title'] = "Ups!!.. Ha ocurrido un error!!";
  $_SESSION['er_access'] = "Error 401: Acceso a Servidor no autorizado";
  $_SESSION['er_user'] = "Base de datos o Servidor no autenticado..!";
  header('Location: '.$_SESSION['page']);
?>