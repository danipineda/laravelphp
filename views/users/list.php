<main class="container">
	<section class="col-md-12 text-center">
		<h1>Listado de Usuarios</h1>

		<div class="col-md-12 m-2 d-flex justify-content-between">
			<h2>Usuarios</h2>
			
			<button data-toggle="modal" data-target="#newUser" class="btn btn-outline-info"">Agregar</button>
		</div>
		<section class="col-md-12">
			<table class="table table-dark table-hover">
			  <thead>
			    <tr class= "bg-info">
					
			      <th>#</th>
			      <th>Nombre</th>
			      <th>Email</th>
			      <th>Estado</th>
				  <th>Rol</th>
			      <th>Acciones</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php foreach($users as $user) :?>
				    <tr>
				      <td><?php echo $user->id ?></td>
				      <td><?php echo $user->name ?></td>
				      <td><?php echo $user->email ?></td>
				      <td><?php echo $user->status ?></td>
					  <td><?php echo $user->role ?></td>
				      <td>
				      	
				      	<button data-toggle="modal" data-target="#editUser<?php echo $user->id ?>" class="btn btn-outline-success">Editar</button>
				      	<a href="?controller=user&method=delete&id=<?php echo $user->id ?>" class="btn btn-outline-danger">Eliminar</a>	
				      </td>				      
				    </tr>
				    <?php include 'views/users/editModal.php' ?>
				  <?php endforeach ?>		    
			  </tbody>
			</table>
		</section>
	</section>

	<?php include 'views/users/newModal.php' ?>
</main>