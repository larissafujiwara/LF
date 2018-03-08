<?php include 'topo.php' ?>
<?php include 'database-usuario.php' ?>

<div class="container">
	<div class="page-header">
		<h2>Gerenciar <small>Usuários</small></h2>
	</div>

	<table class="table table-striped">
		<thead>
			<tr>
				<th>#</th>
				<th>Nome</th>
				<th>Ações</th>
			</tr>
		</thead>
		<tbody>
		<?php if(listausuarios()): ?>
		<?php foreach (listausuarios() as $usuario):?>
			<tr>
			<td><?php echo $usuario['id']; ?></td>
			<td><?php echo $usuario['usuario']; ?></td>
			<td>
				<a href="edit.php?id=<?php echo $usuario['id']; ?>"
				class="btn btn-info">Editar Usuario</a>
				<form action="delete.php" method="POST">
				<input type="hidden" name="id" value="<?php echo $usuario['id']; ?>">
				<input type="submit" class="btn btn-danger" value="Deletar">
				</form>
			</td>
			</tr>
		<?php endforeach;?>
		<?php endif; ?>
		</tbody>
	</table>

	<div class="pull-right">
		<a href="new.php" class="btn btn-primary">Novo Usuario</a>
	</div>
</div>

<?php include 'rodape.php' ?>