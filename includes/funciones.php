<?php
	function checkMail($email){ //Validar correcta sintaxis de un email
		$valid = false;
		if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
			$valid = true;
		}
		return $valid;
	}

	function recortar($texto, $pi, $pf){ //Recortar texto
		$t="";
		for($i=$pi; $i<strlen($texto) && $i<$pf; $i++)
			$t .= $texto[$i];
		return $t;
	}

	function findChar($texto, $pi, $ch){ //Buscar un caracter en un texto
		$i=$pi;
		while($i<strlen($texto) && $texto[$i]!=$ch)
			$i++;
		return $i;
	}

	function findBack($texto, $char){ ////Buscar un caracter en un texto hacia atras
		for($i=strlen($texto)-1; $i>=0; $i--)
		{	if($texto[$i] == $char[0])
				return $i;
		}
		return $i;
	}

	function leerFile($Filer){ //$Filer es el nombre del archivo. Ejplo 'types.txt'
		if(file_exists($Filer)){
			$Filetxt = fopen($Filer, 'r') or die("Archivo no existe!!");
			while(!feof($Filetxt)){
				$Content = fgets($Filetxt);
				echo '<p>'.$Content.'</p>';
			}
			fclose($Filetxt);		
		}
		else{
			echo '<p>El archivo: '.$Filer.' No existe!!</p>';
		}
	}

	function matriz(){
		$Nf=9; $Nc=9; $Tx=""; $Col0="#FFF"; $Col1="#ECEDEE";
		for($f=0; $f<$Nf; $f++)
		{	$Tx .= "<div class='Conthcc'>";
			for($c=0; $c<$Nc; $c++)
			{ $Tx .= "<input type='number' class='nospin BtPointer' style='width: 40px; text-align: center; ";
				$Tx .= "font-size: 16px; font-weight: 600; color: #021b28; background: ";
				if((($f<3 || $f>5) && ($c<3 || $c>5)) || (($f>2 && $f<6) && ($c>2 && $c<6))){
					$Tx .= $Col1;
				}
				else{
					$Tx .= $Col0;
				}
				$Tx .="' onclick='pushBt(this)' readonly>";
			}
			$Tx .= "</div>";
		}
		echo $Tx;
	}

	function matrizt(){
		$Nf=3; $Nc=3; $Vl=1; $Tx=""; $Color="#000";
		for($f=0; $f<$Nf; $f++){
			$Tx .= "<div class='Conthcc txtitle14'>";
			for($c=0; $c<$Nc; $c++){
				$link = "selbutton(".$Vl.")";
				$Tx .= "<p id='key".$Vl."' class='Btk' style='width: 40px; margin-right: 5px; margin-bottom: 5px; ";
				$Tx .= "text-align: center;' onclick=".$link.">".$Vl."</p>";
				$Vl++;
			}
			$Tx .= "</div>";
		}
		echo $Tx;
	}

	class Cuadro{
		public $color, $ancho, $estado;

		public function __construct(){
			$this->color = "#DDD";
      $this->ancho = 40;
      $this->estado = 0;
		}

		public function __destruct()
		{	}

		public function getColor(){
			return $this->color;
		}
		public function setColor($color){
			$this->color = $color;
		}
		public function getAncho(){
			return $this->ancho;
		}
		public function setAncho($ancho){
			$this->ancho = $ancho;
		}
		public function pushOn(){
			$this->estado = 1;
		} 
		public function pushOff(){
			$this->estado = 0;
		}
	}

	class Celda extends Cuadro{
		public $valor;

		public function __construct(){
			parent::__construct();
			$this->valor = 0;
		}

		public function __toString(){
			return $this->color."</br>".$this->ancho."</br>".$this->estado."</br>".$this->valor."</br>";
		}

		public function __destruct()
		{	}

		public function getValor(){
			return $this->valor;
		}
		public function setValor($valor){
			$this->valor = $valor;
		}
	}

?>
