<?php 
	//un metodo privado solo puede ser accedido
//en la misma clase donde fue creado, al mismo tiempo 
//no puede mostrarse fuera o en instancia 
//debe manejarse dentro deun metodo de la misma clase

	class clase1{
		private function saludar(){
			return "saludando";
		}
		public function mandaSaludo(){
			return self::saludar();
		}
	}


	echo clase1::mandaSaludo();

 ?>