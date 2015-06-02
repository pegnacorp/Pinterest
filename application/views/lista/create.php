<br>
<h1 align="center">Nueva Lista</h1>
<div class="container">
	<form method="post" action="<?php echo base_url();?>index.php/lista/create" class="form-horizontal" role="form">
		<div class="form-group">
    		<label for="nombre" class="col-lg-2 control-label">Nombre: </label>
    		<div class="col-lg-10">
      			<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre de la lista" value="<?php echo set_value('nombre') ?>">
      			<?php echo form_error('nombre'); ?>
    		</div>
  		</div>
  		
  		<div class="form-group">
    		<label for="descripcion" class="col-lg-2 control-label">Descripción: </label>
    		<div class="col-lg-10">
      			<textarea class="form-control" id="descripcion" name="descripcion" placeholder="Descripción de la lista"><?php echo set_value('descripcion'); ?></textarea>
      			<?php echo form_error('descripcion'); ?>
    		</div>
  		</div>

  		<div class="form-group">
    		<label for="privacidad" class="col-lg-2 control-label">Privacidad: </label>
    		<div class="col-lg-10">
    			<select class="form-control" name="privacidad" id="privacidad">
					<option value="" selected="selected">SELECCIONE</option>
					<option value="publica" <?php echo set_select('privacidad', 'publica') ?>>Pública</option>
					<option value="privada" <?php echo set_select('privacidad', 'privada') ?>>Privada</option>
				</select>
				<?php echo form_error('privacidad'); ?>
    		</div>
  		</div>
		
		<div class="form-group">
    		<div class="col-lg-offset-2 col-lg-10">
      		<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar</button>
    			<a href="<?php echo base_url();?>index.php/lista" class="btn btn-default"><span class="glyphicon glyphicon-remove"></span> Cancelar</a>
    		</div>
  		</div>
	</form>
	<br><br><br>
</div>