<?php 
	class clasePadre{
		public function metodoPadre(){
			return "hola desde el padre ";
		}
		public function metodo1(){
			return "este es metodo padre";
		}
	}

	class claseHijo extends clasePadre{
		public function metodohijo(){
			return self::metodo1();
		}
		public function metodo1(){
			return "este es metodo hijo";
		}
	}
//la herencia es obtener todas las propiedades de una clase a otra

//mediante la palabra reservada extends

	echo claseHijo::metodohijo();

	//instancia rapida o de doble puntuacion

 ?>