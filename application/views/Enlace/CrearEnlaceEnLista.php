
  <?php if (validation_errors() != ""): ?>
  	Errores en el formulario.
  <?php endif ?>

<div class="well"> 

<p class="lead">Agregar un enlace a la lista</p>
<?php echo form_open('enlace/crear/?id='.$this->input->get('lista', TRUE)) ?>

    <label for="title">Nombre</label>
    <input type="input" class="form-control input-lg" name="nombre" />
    <br />
    <label for="title" >Dirección</label>
    <input type="input" class="form-control input-lg" name="direccion" /><br />
    <input class="btn btn-primary pull-left" type="submit" name="submit" value="Crear" />

</form>
</div>