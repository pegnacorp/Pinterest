<br>
<h1 align="center">MIS LISTAS</h1>
<div class="container" align="center">
	<table class="table">
		<thead>
			<tr>
				<h4><a href="<?php echo base_url()?>index.php/lista/create" align="center" class="btn btn-success">
					<span class="glyphicon glyphicon-list"></span><strong> Nueva Lista</strong>
				</a></h4>
			</tr>
			<tr>
				&nbsp;
			</tr>
		</thead>
		<tbody>
			<?php 
			foreach ($listas as $lista):
				$list = 'index.php/lista/'.$lista['idLista'];
				$update = 'index.php/lista/update/'.$lista['idLista'];
				$delete = 'index.php/lista/delete/'.$lista['idLista'];
			?>
			<tr>
				<td><a href=<?php echo $list; ?>><?php echo $lista['Nombre']; ?></a></td>
				<td>&nbsp;</td>
				<td><a href=<?php echo $update; ?> class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span> EDITAR</a></td>
				<td><a href=<?php echo $delete; ?> class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> ELIMINAR</a></td>
			</tr>
			<?php endforeach ?>
		</tbody>
	</table>
	<br><br><br>
</div>