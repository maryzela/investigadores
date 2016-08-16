<div class="row">
	<div class="col-md-8">
		<h1>Nuevo Usuario</h1>

		<form class="form-horizontal" name='fregistro' id='fregistro' role='form'>

			<div class="form-group">
				<label for="txt-paterno" class="col-sm-3 control-label">Paterno :</label>
				<div class="col-sm-3">
					<input type="text" class="form-control" id="txt-paterno" name="txt-paterno"  placeholder="Apellido Paterno" maxlength="25" autofocus>
				</div>
			</div>

			<div class="form-group">
				<label for="txt-materno" class="col-sm-3 control-label">Materno :</label>
				<div class="col-sm-3">
					<input type="text" class="form-control" id="txt-materno" name="txt-materno" placeholder="Apellido Materno" maxlength="25">
				</div>
			</div>

			<div class="form-group">
				<label for="txt-nombres" class="col-sm-3 control-label">Nombres :</label>
				<div class="col-sm-3">
					<input type="text" class="form-control" id="txt-nombres" name="txt-nombres" placeholder="Nombres" maxlength="35">
				</div>
			</div>

			<div class="form-group">
				<label for="txt-nombres" class="col-sm-3 control-label">Tipo Documento :</label>
				<div class="col-sm-3">
					<input type="text" class="form-control" id="txt-tipo_documento" name="txt-tipo_documento" placeholder="DNI-PASAPORTE" maxlength="35">
				</div>
			</div>
			<div class="form-group">
				<label for="txt-nombres" class="col-sm-3 control-label">Numero De Documento:</label>
				<div class="col-sm-3">
					<input type="text" class="form-control" id="txt-numero_de_documento" name="txt-numero_de_documento" placeholder="numero" maxlength="35">
				</div>
			</div>
            <div class="form-group">
				<label for="txt-nombres" class="col-sm-3 control-label">Nacionalidad :</label>
				<div class="col-sm-3">
					<input type="text" class="form-control" id="txt-nacionalidad" name="txt-nacionalidad" placeholder="Nacionalidad" maxlength="35">
				</div>
			</div>
			<div class="form-group">
				<label for="txt-nombres" class="col-sm-3 control-label">Reside En :</label>
				<div class="col-sm-3">
					<input type="text" class="form-control" id="txt-reside" name="txt-reside" placeholder="reside" maxlength="35">
				</div>
			</div>
			<div class="form-group">
				<label for="txt-nombres" class="col-sm-3 control-label">Ocupacion:</label>
				<div class="col-sm-3">
					<input type="text" class="form-control" id="txt-ocupacion" name="txt-ocupacion" placeholder="ocupacion" maxlength="35">
				</div>
			</div>

			<div class="form-group">
				<label for="txt-nombres" class="col-sm-3 control-label">Entidad u Organismo :</label>
				<div class="col-sm-3">
					<input type="text" class="form-control" id="txt-entidad_u_organismo" name="txt-entidad_u_organismo" placeholder="entidad" maxlength="35">
				</div>
			</div>

			<div class="form-group">
				<label for="txt-nombres" class="col-sm-3 control-label">Email :</label>
				<div class="col-sm-3">
					<input type="text" class="form-control" id="email" name="email" placeholder="email" maxlength="35">
				</div>
			</div>

			<div class="form-group">
				<label for="txt-nombres" class="col-sm-3 control-label">Telefono Celular :</label>
				<div class="col-sm-3">
					<input type="text" class="form-control" id="telefono" name="telefono" placeholder="telefono" maxlength="35">
				</div>
			</div>
			<div class="form-group">
				<label for="txt-nombres" class="col-sm-3 control-label">Direccion :</label>
				<div class="col-sm-3">
					<input type="text" class="form-control" id="email" name="direccion" placeholder="direccion" maxlength="35">
				</div>
			</div>


			<div class="form-group">
				<div class="col-sm-offset-3 col-sm-6 ">
					<button type="submit" class="btn btn-primary" id="btnGuardarNuevo">Guardar Nuevo Usuario</button>
				</div>
			</div>


		</form>
	</div>
	<div class="col-md-4">
		<div class="alert alert-success">
			<h1 class="text-primary" id="h1Resultado"></h1>
		</div>
	</div>
</div>
<?php
	require("pie.php");
?>