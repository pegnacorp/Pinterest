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
				$url = 'index.php/lista/'.$lista['idLista'].'/';
				$url.= url_title(convert_accented_characters($lista['Nombre']),'-');
			?>
			<tr>
				<td><?php echo anchor($url, $lista['Nombre']) ?></td>
				<td>EDITAR</td>
				<td>ELIMINAR</td>
			</tr>
			<?php endforeach ?>
		</tbody>
		
	</table>
</div>
</body>
</html>