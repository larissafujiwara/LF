<?php include 'topo.php' ?>
<?php include 'database-usuario.php' ?>

<div class="container">
	<div class="page-header">
		<h2>Novo Usuário</h2>	
	</div>

	<form action="#" method="POST">
		<div class="form-group">
			<label for="usuario">Usuário</label>
			<input type="text" name="usuario" class="form-control" placeholder="Usuário" required>
		</div>
		<div class="form-group">
			<label for="senha">Senha</label>
			<input type="password" name="senha" class="form-control" placeholder="Senha" required>
		</div>

		<a href="index.php" class="btn btn-warning">Voltar</a>
		<button type="submit" class="btn btn-default">Cadastrar</button>
	</form>
</div>

<?php include 'rodape.php' ?>