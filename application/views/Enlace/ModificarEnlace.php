<br>
<br>
<div class="row">
  <?php if (validation_errors() != ""): ?>
  	Errores en el formulario.
  <?php endif ?>


<?php echo form_open('enlace/modificar?id='.$this->input->get('id', TRUE)) ?>
    
    <label for="title">Nombre</label>

    <input type="input" name="nombre" value="<?php echo  $enlace->Nombre?>"/>
    <br />
    <label for="title" >Dirección</label>
    <input type="input" name="direccion" value="<?php echo  $enlace->Direccion?>" /><br />
    <label for="title">Lista</label>
    <?php echo form_dropdown('lista', $listas,$enlace->idLista); ?>
    <br>
    <input type="submit" name="submit" value="Modificar" />

</form>
</div>