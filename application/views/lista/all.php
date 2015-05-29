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
		<?php foreach ($listas as $lista): ?>
		<tr>
			<td><?php echo $lista['Nombre'] ?></td>
			<td>EDITAR</td>
			<td>ELIMINAR</td>
		</tr>
		<?php endforeach ?>
	</table>
</div>
</body>
</html>