<div class="container">
	<br>
	<h1>Búsqueda de Usuarios</h1>
	<div class="row">
	<table class='table-condensed' >
		<thead>
        <tr>
          <th>#</th>          
          <th>Username</th>
        </tr>
      </thead>
     	<tbody>
     		<?php $i=0; ?>
			<?php foreach($query as $item):?>
			<tr>		
				<th scope="row"><?php echo ++$i; ?></th>
				<td><?php echo anchor('auth/show/'.$item->id, $item->username);?></td>						
			</tr>
			<?php endforeach;?>
		</tbody>
	</table>
	</div>
</div>

