<?php
require('bd.php'); $nombre=$_POST['txt-nombres']; $_paterno=$_POST['txt-paterno']; $_materno=$_POST['txt-materno'];

 if($conexion->query ("INSERT INTO estudiante SET nombres='{$nombre}', paterno='{$paterno}', materno='{$materno}'")){
 	header("Location:estudiante.nuevo.formulario.php");
 }else{
 	echo"<h3> Error al guardar Nuevo Estudiante</h3>";
 }
<?php
require('datos.php');  $_paterno=$_POST['txt-paterno']; $_materno=$_POST['txt-materno'];$nombres=$_POST['txt-nombres'];$usuario=$_POST['txt-usuario'];$clave=$_POST['txt-clave'];$fecha_registro=$_POST['txt-fecha_registro'];

 if($conexion->query ("INSERT INTO usuario SET  paterno='{$paterno}', materno='{$materno}',nombres='{$nombre}',usuario='{$usuario}',clave='{$clave}',fecha_registro='{$fecha_registro}'")){
 	header("Location:nuevo.php");
 }else{
 	echo"<h3> Error al guardar Nuevo Estudiante</h3>";
 }
?>