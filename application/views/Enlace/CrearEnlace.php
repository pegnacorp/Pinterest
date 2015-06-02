
  <?php if (validation_errors() != ""): ?>
  	Errores en el formulario.
  <?php endif ?>


<?php echo form_open('enlace/crear') ?>

    <label for="title">Nombre</label>
    <input type="input" name="nombre" />
    <br />
    <label for="title">Dirección</label>
    <input type="input" name="direccion" /><br />
    <label for="title">Lista</label>
    

<?php echo form_dropdown('lista', $listas); ?>


    <input type="submit" name="submit" value="Crear" />

</form>