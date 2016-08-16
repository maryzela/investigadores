<?php
	require("datos.php");

	require("menu.php");/*requiere incrusta un archivo*/

	<div class="container">
		<?php require("datos.php");
		if($resultado=$conexion->query("SELECT * FROM usuarios")){
			echo "<table class='table'>";
			echo "<tr><th>paterno</th>
						<th>materno</th>
						<th>Nombres</th>
						<th>usuario</th>
						<th>fecha_registro</th>
				</tr>";
			
			while($fila=$resultado->fetch_assoc()){
				echo"<tr>
						<td>{$fila['paterno']}</td> 
						<td>{$fila['materno']}</td>
						<td>{$fila['nombres']}</td>
						<td>{$fila['fecha_registro']}</td>
						<td><a href='usuarios.modificar.formulario.php?id={$fila['usuario_id']}''><span class='glyphicon glyphicon-edit'></span></a>
							
						</td>

				</tr>";
				
				/*echo "<pre>"; print_r($fila); echo"</pre>";*/
			}
			echo "</table>";
		}
	
		else{
	?> <div class="alert alert-danger">no se puede obtener investigadores</div>
	<?php
		}

?>
	</div>

<?php
	require("pie.php");
?>
