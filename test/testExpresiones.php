<?php
	use PHPUnit\Framework\TestCase;
	use lib\utils\Expresiones;
	require_once "src\Expresiones.php";
	
	class testExpresiones extends TestCase{
		
		public function testCadenaBalanceada(){
			$cad = "()";
			$result = Expresiones::secuenciaParentesisBalanceada($cad);
			$this->assertequals(0, $result);
		}

		public function testCadenaNoBalanceadaAperturaIzq(){
			$cad = "(()";
			$result = Expresiones::secuenciaParentesisBalanceada($cad);
			$this->assertequals(1, $result);
		}

		public function testCadenaNoBalanceadaCierreIzq(){
			$cad = ")()";
			$result = Expresiones::secuenciaParentesisBalanceada($cad);
			$this->assertequals(-1, $result);
		}

		public function testCadenaNoBalanceadaAperturaDer(){
			$cad = "()(";
			$result = Expresiones::secuenciaParentesisBalanceada($cad);
			$this->assertequals(1, $result);
		}

		public function testCadenaNoBalanceadaCierreDer(){
			$cad = "())";
			$result = Expresiones::secuenciaParentesisBalanceada($cad);
			$this->assertequals(-1, $result);
		}
	}
?>