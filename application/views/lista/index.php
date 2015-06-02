<!DOCTYPE html>
<html>
<head>
    <title>Listas - Pinterestellar</title>
    <meta charset="UTF-8">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
</head>
<body>
<h1 align="center">MIS LISTAS</h1>
<div class="container" align="center">
	<table>
		<thead>
			<tr><h4><a href="<?php echo base_url()?>index.php/lista/create" align="center">Nueva Lista</a></h4></tr>
		</thead>
		<tbody>
			<?php 
			foreach ($listas as $lista):
				$list = 'index.php/lista/'.$lista['idLista'].'/';
				$list.= url_title(convert_accented_characters($lista['Nombre']),'-');
				$update = 'lista/update/'.$lista['idLista'];
				$delete = 'lista/delete/'.$lista['idLista'];
			?>
			<tr>
				<td><?php echo anchor($list, $lista['Nombre']) ?></td>
				<td><a href=<?php echo $update; ?>>EDITAR</a></td>
				<td><a href=<?php echo $delete; ?>>ELIMINAR</a></td>
			</tr>
			<?php endforeach ?>
		</tbody>
		
	</table>
</div>
</body>
</html>