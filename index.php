<?php include 'header.php'; ?>
	<div class="container-login">
		<h1>Login</h1>
		<hr>
		<form action="login.php" method="post">
			<div class="form-group">
				<label>E-mail: *</label>
				<input type="email" name="email" class="form-control" required>
			</div>

			<div class="form-group">
				<label>Senha: *</label>
				<input type="password" name="senha" class="form-control" required>
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-primary">Entrar</button>
			</div>
		</form>
	</div>
<?php include 'footer.php'; ?>
	