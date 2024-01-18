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
	  <div class="Contvtc" style="width: 390px; height: 430px; background: #E5E4C8;">
			<!--Information-->
			<div class="Contvcl Brd10 tx16" style="width: 366px; background: #F5F6CE;">
				<div class="Conthcl" style="height: 35px;">
					<b style="margin-right: 10px;">Level: </b><b id="Msg1">1</b>
				</div>
				<ul style="height: 35px;"><b>Time: </b><b id="Msg2">0</b>
				</ul>
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
							<label># del Sudoku:</label>
							<input id="numsdk" name="numsdk" type="number" min='1' max='152' style="width: 70px; margin-left: 7px;"
							 value="1" onchange="numsdk()">
						</div>
						<input type="button" class="Bt2" value="Load">
					</div><!--End Upper-->
					<!--Bottom-->
					<div class="Conthcc" style="margin-top: 30px;">
						<input type="button" class="Bt2" value="Restart">
					</div><!--End Bottom-->
				</div><!--End Buttons-->
			</div><!--End Numbers and buttons-->
			<!-- <script type="text/javascript">
				selbuttton();
			</script> -->
			<?php
				$cuadro = new Celda();
				echo "<h2>".$cuadro->color."</h2>";
				echo $cuadro;
				echo "</br>";
				var_dump($cuadro);
			?>
		</div><!--End Rigth-->
	</div>
</body>

<!--
<div id="ReStart" class="Contvcl">
					<ul style="font-size: 12px; font-weight: 900; color: #08298A;">Seleccione el Nivel</ul>
					<ul style="font-size: 14px;"> 
						<input type="button" id="NDw" class="Bt2" value="↓" onclick="LevelDw()"/>
						<input type="text" id="Nivel" class="BtNum" value="1" style="text-align: center" readonly/>
						<input type="button" id="NUp" class="Bt2" value="↑" onclick="LevelUp()"/>
					</ul>
					<ul><input type="button" id="Reiniciar" class="Bt" value="Restart" onclick="CargarNivel()"/></ul>
				</div>
				<div id="Mode" class="Contvcc">
					<div class="Contvcc">
						<ul><input type="button" id="Up" class="Bt1" value="↑"/></ul>
					</div>
					<div class="Conthcc">
						<ul>
							<input type="button" id="Lf" class="Bt1" value="←"/>
							<input type="button" id="Dw" class="Bt1" value="↓"/>
							<input type="button" id="Rg" class="Bt1" value="→"/>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<section id="Niveles">
		<?php
			/*$Lin="<data id='N"; $Tx=""; $Kn=0; $Ni=1;
			for($f=0; $f<count($Mapas); $f++)
			{	for($c=0; $c<count($Mapas[$f]); $c++)
					$Tx .= $Mapas[$f][$c];
				$Kn++;
				if($Kn==12) //número de líneas de cada nivel
				{ $Lin .= $Ni."' value='".$Tx."'></data>";
					echo $Lin;
					$Lin="<data id='N"; $Tx=""; $Kn=0; $Ni++;
				}
			}*/
		?>
	</section>
-->