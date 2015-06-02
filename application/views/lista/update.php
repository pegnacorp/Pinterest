<br>
<h1 align="center">Actualizar Lista</h1>
<div class="container">
  <?php echo form_open('lista/update/'.$lista->idLista, array('class'=>'form-horizontal')); ?>
		<div class="form-group">
    		<?php echo form_label('Nombre: ', 'nombre', array('class' => 'col-lg-2 control-label')); ?>
    		<div class="col-lg-10">
      			<input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $lista->Nombre; ?>">
      			<?php echo form_error('nombre'); ?>
    		</div>
  		</div>
  		
  		<div class="form-group">
    		<?php echo form_label('Descripción: ', 'descripcion', array('class' => 'col-lg-2 control-label')); ?>
    		<div class="col-lg-10">
      			<textarea class="form-control" id="descripcion" name="descripcion"><?php echo $lista->Descripcion; ?></textarea>
      			<?php echo form_error('descripcion'); ?>
    		</div>
  		</div>

  		<div class="form-group">
    		<?php echo form_label('Privacidad: ', 'privacidad', array('class' => 'col-lg-2 control-label')); ?>
    		<div class="col-lg-10">
    			<select class="form-control" name="privacidad" id="privacidad">
					<?php if(!strcmp("publica", $lista->Pivacidad)==0): ?>
						<option value="publica" selected="selected">Pública</option>
						<option value="privada">Privada</option>
					<?php else: ?>
						<option value="publica">Pública</option>
						<option value="privada" selected="selected">Privada</option>
					<?php endif ?>
				</select>
				<?php echo form_error('privacidad'); ?>
    		</div>
  		</div>
		
		<div class="form-group">
    		<div class="col-lg-offset-2 col-lg-10">
      			<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar</button>
    			<a href="index.php/lista" class="btn btn-default"><span class="glyphicon glyphicon-remove"></span> Cancelar</a>
    		</div>
  		</div>
	</form>
	<br><br><br>
</div>