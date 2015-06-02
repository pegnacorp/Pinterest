<br>
<br><br><br>
<div class="container">
	<div class="row">
		<p><?php ?></p>
		<?php if ($isUser) {
			echo "<h2>Bienvenido ".$usuario->username."</h2>";
			}else{		?>
				<?php echo "<h2>Visitando el perfil de ".$usuario->username ."</h2>" ?>
				<?= form_open('Favorito/agregarFavorito');?>
			    <div class="input-group input-group-sm" style="max-width:360px;">
			    <div class="input-group-btn">
			    <?php echo form_input($idUsuarioObservador); ?>
			    <?php echo form_input($idUsuarioObservado); ?>
			    <button class="btn btn-default" type="submit" ><i class="glyphicon glyphicon-star">Agregar Favorito</i></button>
			    </input>
			    </div>
			    </div>
		    	<?= form_close(); ?>
			<?php
				}
			?>				
</div>