<?php
	class Web{
		public function cabeza($titulo=""){
			echo "<!doctype html>
					<html>
						<head><title>$titulo</title></head>
						<body>";
		}

				
		public function h1($nombre){
			echo "<h1>$nombre</h1>\n";
		}
		
		public function pie(){
			echo "		</body>
					</html>";
		}
		
		public function iform($url){
			echo "<form method='POST' action='$url'>\n";
		}
		public function fform(){
			echo "</form>\n";
		}
		public function input($tipo, $nombre){
			echo "<input type='$tipo' name='$nombre' id='$nombre'>\n";
		}
		public function submit($valor){
			echo "<input type='submit' value='$valor'>\n";
		}
		public function salto(){
			echo "<br/>";
		}

		public function oculto($nombre,$valor){
			echo "<input type='hidden' name='$nombre' id='$nombre' value='$valor'>\n";
		}

		public function enlace($url,$nombre){
			echo "<a href='$url'>$nombre</a>\n";
		}

		public function texto($nombre,$etiqueta,$valor){
			echo "<input type='text' name='$nombre' id='$nombre' value='$valor'>\n";
		}

	}
?>