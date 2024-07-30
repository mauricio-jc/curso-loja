<?php include 'estrutura/header_front.php'; ?>
	<div style="max-width: 450px; margin: 0 auto; padding-top: 5%;">
		<h1 style="font-size: 45px;">Login</h1>
		<hr>
		<form action="login.php" method="post">
        <div style="display: block; margin-bottom: 15px; line-height: 25px;">
				<label style="max-width: 100%;">E-mail: *</label>
				<input type="email" name="email" style="width: 100%; height: 34px; border-radius: 6px; border: 1px solid #ccc; padding: 6px 12px; font-size: 14px; box-sizing: border-box;" required>
			</div>

			<div style="display: block; margin-bottom: 15px; line-height: 25px;">
				<label style="max-width: 100%;">Senha: *</label>
				<input type="password" name="senha" style="width: 100%; height: 34px; border-radius: 6px; border: 1px solid #ccc; padding: 6px 12px; font-size: 14px; box-sizing: border-box;" required>
			</div>

			<div style="display: block; margin-bottom: 15px; line-height: 25px;">
				<button type="submit" style="background-color: #286090; border: none; border-radius: 6px; color: #fff; padding: 12px 18px; font-size: 16px; cursor: pointer; text-decoration: none; display: inline-block; margin-top: 5px; margin-bottom: 5px;">Entrar</button>
			</div>
		</form>
	</div>
<?php include 'estrutura/footer_front.php'; ?>
	