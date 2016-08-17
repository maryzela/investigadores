<?php

	class Acciones{

		private $mysqli;

		function __construct()
		{
			require_once "../inc/Conexion.php";
			$conn = new Conexion();
			$this->mysqli = $conn->Conectar();
			return $this->mysqli;
		}

		function MostrarTodo(){
			$sql = "SELECT paterno,materno,nombres,num_documento,nacionalidad ,ocupacion,telefono,direccion FROM usuarios";
			$valor = $this->mysqli->query($sql);
			return $valor;
		}
	}

?>