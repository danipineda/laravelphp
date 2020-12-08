<main class="container">
	<section class="col-md-12 text-center">
		<h1>Listado de Roles</h1>

		<div class="col-md-12 m-2 d-flex justify-content-between">
			<h2>Roles</h2>
		</div>

		<section class="col-md-12">
			<table class="table table-striped table-hover">
			  <thead>
			    <tr>
			      <th>#</th>
			      <th>Nombre</th>
			      <th>Estado</th>
			      <th>Acciones</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php foreach($roles as $role) :?>
				    <tr>
				      <td><?php echo $role->id ?></td>
				      <td><?php echo $role->name ?></td>
				      <td><?php echo $role->status ?></td>
				      <td>
				      	
				      </td>				      
				    </tr>
				  <?php endforeach ?>		    
			  </tbody>
			</table>
		</section>
	</section>
</main>