<!--Developed by: Gabohsoft 2023P2-->
<?php
	session_start();
  if(isset($_GET['vlbt'])){
    $_SESSION['vlbt'] = $_GET['vlbt'];
  }
  else{
    $_SESSION['vlbt'] = 1;
  }
  header('Location: /sudoku/inicio.php');
?>