<br>
<h1 align="center">LISTAS</h1>
<div class="container" align="center">
	<table class="table table-hover">
		<thead>
			<tr>
				<h4><a href="<?php echo base_url()?>index.php/lista/create" align="center" class="btn btn-success">
					<span class="glyphicon glyphicon-list"></span><strong> Nueva Lista</strong>
				</a></h4>
			</tr>
		</thead>
		<tbody>
			<?php 
			foreach ($listas as $lista):
				$list = 'index.php/lista/'.$lista['idLista'];
			?>
			<tr>
				<td>
					<a href=<?php echo $list; ?>><?php echo $lista['Nombre']; ?></a><br>
					&nbsp;&nbsp;
					<?php if(!strcmp("publica", $lista['Privacidad'])==0): ?>
					<span class="label label-danger">
					<?php else: ?>
					<span class="label label-primary">
					<?php endif ?>
						<?php echo $lista['Privacidad']; ?>
					</span>
				</td>
			</tr>
			<?php endforeach ?>
		</tbody>
	</table>
	<br><br><br>
</div>