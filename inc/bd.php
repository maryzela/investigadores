<html>
<body>
	<?php
	/*realiza conexion a la B. D.*/
	define ('SERVIDOR','localhost');
	define ('USUARIO','root');
	define ('CLAVE','');
	define ('BD','usuario');
	$conexion= new mysqli(SERVIDOR,USUARIO,CLAVE,BD);
	/*La loinea anterior realiza una conexion al servidor de base de datos usando el estilo 00*/
	if($conexion-> connect_errno)
	{
		printf("Error al conectar B.D.:%s\n", $conexion-> connect_errno);
		exit();
	}
	//$conexion-> query ("CREATE TABLE tmp(tmp_id INT)");
	/*$conexion-> query ("INSERT INTO estudiante
						SET paterno='FLORES',
						materno='ÑAÑA',
						nombres='FLORENCIO'
						");*/
	/* configuracion  de tablas de caracteres*/
	/*$conexion-> query ("INSERT INTO estudiante SET nombres = 'María'");*/
	/*fecha_registro: si esta como 0000-00-00 00:00:00
	es incorrecto.
	* el atributo "predeterminado" de este campo debe estar en: CURRENT_TIMESTAMP */
	/*La configuracion de las tablas de caracteres se utiliza en:
		1.- el archivo debe usar codificacion UTF8(No usar latin-1, ISD-8859-1)
		2.- Apache debe tener como charset por defecto UTF-8(httpd.conf)
		3.- PHP debe tener como charset por defecto UTF -8(php.ini)
		4.- mysql debe tener charset por defecto UTF-8(my.ini)
			
		*/
		echo "<h1>bien hecho conexion exitosa ala base de datos</h1>"; //Comentario
		/* UTF-8 sirve para caracteres*/
	?>
	<!--comentario-->
	<!--comentario-->
	<!--comentario-->
	<!--comentario-->
	<!--comentario-->
</body>
</html>