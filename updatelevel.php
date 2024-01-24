<!--Developed by: Gabohsoft 2023P2-->
<?php
  require_once 'includes/head.php';
  if(isset($_GET['lv'])){
    $_SESSION['level'] = $_GET['lv'];
    leerFile('assets/base.csv', $_SESSION['level']);
  }
  else{
    echo 'No se pude recibir la variable';
  }
  // $link = "location.href='/sudoku/inicio.php'";
  // echo "</br>";
  // echo $link."</br>";
  // echo "<input type='button' onclick=".$link." value='Volver'>";
  header('Location: /sudoku/inicio.php');
?>