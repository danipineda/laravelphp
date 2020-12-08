<main class="container">
	<section class="col-md-12 text-center">
		<h1>Listado de Categorias</h1>

		<div class="col-md-12 m-2 d-flex justify-content-between">
			<h2>Categorias</h2>
			<a href="?controller=category&method=new" class="btn btn-success">Agregar</a>
		</div>

		<section class="col-md-12 flex-nowrap table-responsive">
			<table class="table table-dark table-hover">
				<thead>
					<tr>
						<th>#</th>
						<th>Nombres</th>
						<th>Estado</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($categories as $category): ?>
						<tr>
							<td>
								<?php echo $category->id ?>
							</td>
							<td>
								<?php echo $category->name ?>
							</td>
							<td>
								<?php echo $category->status ?>
							</td>
							<td>
								<a href="?controller=category&method=edit&id=<?php echo $category->id  ?>" class="btn btn-outline-warning">Editar</a>
								<a href="?controller=category&method=delete&id=<?php echo $category->id  ?>" class="btn btn-outline-danger">Eliminar</a>
							</td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</section>
	</section>
</main>