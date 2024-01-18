<!--Developed by: Gabohsoft 2023P2-->
<?php
  require_once 'includes/head.php';
	$er_user = $_SESSION['er_user'];
?>
<script type="text/javascript">
	if(history.forward(1))
		location.replace(history.forward(1));
</script>
<body>
<div class="Contptc Contvtc Smbr2" style="width: 500px; margin-top: 30px; border-radius: 10px; background: #e9eae2;">
  <div class="Contvtc" style="margin-top: 30px;">
    <img class="ImgLog2" src="./assets/images/amisoftclaro80x40.png">
		<h5>Successful Registration!!</h5>
		<h6 class="txwarning">Excelente</h6>
		<?php
			echo '<h6 class="txwarning">'.$er_user.'</h6>';
		?>
	</div>
	<div class="Conthcc" style="margin-top: 20px;">
		<img class="ImgMdl" src="./assets/images/cheque0sf.png">
	</div>
	<div class="Conthcc" style="margin-top: 20px; ; margin-bottom: 30px;">
		<input type="button" class="Btc" onclick="location.href='reseterror.php'" value="Regresar">
	</div>
</div>
</body>
</html>
