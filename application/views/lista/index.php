<br>
<h1 align="center">MIS LISTAS</h1>
<div class="container" align="center">
	<table>
		<thead>
			<tr><h4><a href="<?php echo base_url()?>index.php/lista/create" align="center">Nueva Lista</a></h4></tr>
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
				<td><a href=<?php echo $update; ?>>EDITAR</a></td>
				<td><a href=<?php echo $delete; ?>>ELIMINAR</a></td>
			</tr>
			<?php endforeach ?>
		</tbody>
	</table>
	<br><br><br>
</div>