<?php
	$menu   = "Usuarios";
	$titulo = "Eliminar Usuario | LKG";								// Título
	$titulo_page = "Eliminar Usuario";
	include('modules/header.php');
	

	$id = $_GET['id'];
	include('scripts/db_connect.php');
?>
<main>
	<form action="scripts/usuario_acciones.php" method="POST">
	<div class="container mycontainer">
		<div class="row">
			<div class="col s12 m6 offset-m3 center-align">
				Para eliminar el Usuario escriba CONFIRMAR
			</div>
		</div>
		<div class="row">
			<div class="col m6 s12 input-field offset-m3">
				<input placeholder="Nombre del Usuario" id="id" name="id" type="text" class="" 
				value="<?php echo $id; ?>" hidden>
				<input name="eliminar" id="eliminar" type="text" class="validate" autofocus>
			</div>
			<div class="col m6 s12 input-field offset-m3">
				<button class="btn waves-effect waves-light mybtn rojo" id="sndeliminar" type="submit" name="action" value="eliminar" disabled>Eliminar Usuario</button>
			</div>
		</div>
	</div>
	</form>
</main>
<?php 
	include('modules/footer.php');
?>
