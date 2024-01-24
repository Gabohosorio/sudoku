<!--Developed by: Gabohsoft 2023P2-->
<?php
  require_once 'includes/head.php';
  require_once 'includes/horizontalheader.php';
?>
<body>
  <div class="Contptc" style="width: 900px; height: 490px; margin-top: 10px;">
		<!--Left: Sudoku Matrix-->
	  <div class="Contvtc" style="width: 500px; height: 490px;">
			<?php
				matriz();
			?>
		</div><!--End Left-->
		<!--Right: Information and buttons-->
	  <div class="Contvtc" style="width: 390px; height: 430px; "> <!--background: #E5E4C8;"-->
			<!--Information-->
			<div class="Conthcl Brd10" style="width: 366px; background: #F5F6CE;">
				<!--Levels-->
				<div class="Contvcl tx16" style="width: 160px;">
					<div class="Conthcl" style="height: 35px;">
						<b style="margin-right: 10px;">Level: </b><b id="Msg1"><?=$_SESSION['level']?></b>
					</div>
					<ul style="height: 35px;"><b>Time: </b><b id="Msg2">0</b></ul>
				</div><!--End Leves-->
				<!--Instructions-->
				<div class="Contvcc txwarn12" style="width: 200px;">
					<p>Puede ingresar un número de Sudoku entre el 1 y el 152</p>
				</div><!--End Instructions-->
			</div><!--End Information-->
			<!--Numbers and buttons-->
			<div class="Conthcl" style="width: 366px; margin-top: 35px;">
				<!--Numbers-->
				<div class="Contvtl" style="width: 135px; margin-left: 15px;">
					<?php
						matrizt();
					?>
				</div><!--End Numbers-->
				<!--Buttons-->
				<div class="Contvtc" style="width: 215px; height: 130px; margin-left: 15px;">
					<!--Upper-->
					<div class="Conthbj" style="width: 190px;">
						<div class="Contvcl">
							<label class="txwarn14"># del Sudoku:</label>
							<input id="numsdk" name="numsdk" type="number" min='1' max='152' style="width: 70px; margin-left: 7px;"
							 value="<?=$_SESSION['level']?>" onchange="numsdk()">
						</div>
						<input type="button" class="Bt2" value="Load" onclick="numsdk()">
					</div><!--End Upper-->
					<!--Bottom-->
					<div class="Conthcc" style="margin-top: 30px;">
						<input type="button" class="Bt2" value="Restart" onclick="numsdk()">
					</div><!--End Bottom-->
				</div><!--End Buttons-->
			</div><!--End Numbers and buttons-->
			<!-- <script type="text/javascript">
				selbuttton();
			</script> -->
		</div><!--End Rigth-->
	</div>
	<?php
		loadLevel();
	?>
</body>

