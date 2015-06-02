<h1 align="center">Nueva Lista</h1>
<div class="container" align="center">
	<form method="post" action="<?php echo base_url();?>index.php/lista/create">
		
		<table>
			<tr>
				<td><label for="nombre">Nombre: </label></td>
				<td>&nbsp;</td>
				<td>
					<input type="text" name="nombre" id="nombre" value="<?php echo set_value('nombre') ?>">
					<?php echo form_error('nombre'); ?>
				</td>
			</tr>
			<tr>
				<td><label for="descripcion">Descripción: </label></td>
				<td>&nbsp;</td>
				<td>
					<textarea name="descripcion" id="descripcion" cols="15" rows="2"><?php echo set_value('descripcion'); ?></textarea>
					<?php echo form_error('descripcion'); ?>
				</td>
			</tr>
			<tr>
				<td><label for="privacidad">Privacidad: </label></td>
				<td>&nbsp;</td>
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
				<td colspan="3"><input type="submit" name="guardar" value="Guardar"></td>
			</tr>
		</table>
	</form>
	<br><br><br>
</div>