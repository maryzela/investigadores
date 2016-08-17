<?php
  require_once "../model/AccionesClass.php";
  $acciones = new Acciones();
  $data = $acciones->MostrarTodo();

 ?>
<div class="row">
	<div class="col-md-8">
    <h1>Listado de investigadores</h1>
		<div id="divPrincipal"> </div>
	</div>
	<div class="col-md-4">

	</div>
</div>

<div class="container">
  <h2>LISTA</h2>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>APELLIDO PATERNO</th>
        <th>APELLIDO MATERNO</th>
        <th>NOMBRES</th>
        <th>NUMERO DNI</th>
        <th>NACIONALIDAD</th>
        <th>OCUPACION</th>
        <th>TELEFONO</th>
        <th>DIRECCION</th>
      </tr>
    </thead>
    <tbody>
    <?php
    while ($fila = $data->fetch_assoc())
    {
    ?>
      <tr>
        <td><?php echo $fila['paterno'];?></td>
        <td><?php echo $fila['materno'];?></td>
        <td><?php echo $fila['nombres'];?></td>
        <td><?php echo $fila['num_documento'];?></td>
        <td><?php echo $fila['nacionalidad'];?></td>
        <td><?php echo $fila['ocupacion'];?></td>
        <td><?php echo $fila['telefono'];?></td>
        <td><?php echo $fila['direccion'];?></td>
      </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
</div>
