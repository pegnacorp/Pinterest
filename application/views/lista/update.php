<!DOCTYPE html>
<html>
<head>
    <title>Crear lista - Pinterestellar</title>
    <meta charset="UTF-8">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
</head>
<body>
	<h1 align="center">Actualizar Lista</h1>
	<div class="container" align="center">
		<form method="post" action="<?php echo base_url();?>index.php/lista/create">
			
			<table>
				<tr>
					<td><label for="nombre">Nombre: </label></td>
					<td>
						<input type="text" name="nombre" id="nombre" value="<?php echo set_value('nombre') ?>">
						<?php echo form_error('nombre'); ?>
					</td>
				</tr>
				<tr>
					<td><label for="descripcion">Descrición: </label></td>
					<td>
						<textarea name="descripcion" id="descripcion" cols="15" rows="2"><?php echo set_value('descripcion'); ?></textarea>
						<?php echo form_error('descripcion'); ?>
					</td>
				</tr>
				<tr>
					<td><label for="privacidad">Pivacidad: </label></td>
					<td>
						<select name="privacidad" id="privacidad">
							<option value="" selected="selected">SELECCIONE</option>
							<option value="publica" <?php echo set_select('privacidad', 'publica') ?>>Pública</option>
							<option value="privada" <?php echo set_select('privacidad', 'privada') ?>>Privada</option>
						</select>
						<?php echo form_error('privacidad'); ?>
					</td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" name="guardar" value="Guardar"></td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>