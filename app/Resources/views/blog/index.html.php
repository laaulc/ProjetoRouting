<!DOCTYPE html>
<html>
<head>
	<title>Início</title>

	<style>
	body {
		background-color: #FFF0F5;
	}

	h2 {
		margin-left: 350px;
	}

	form {
		margin-top: 200px;
		margin-left: 200px;
	}

	</style>

</head>
<body>
		
		<form action = "<?php echo $view['router']->path('index') ?>" method="POST">
		<h2>Entrar</h2>

			<table style="width: 40%;" align="center">

			<tr>
			<td width="1%"<label><b>Usuário: </b></label></td>
			<td width="15%"><input type="text" name="nome_user"/></td>
			</tr>

			<tr>
			<td width="1%"<label><b>E-mail: </b></label></td>
			<td width="15%"><input type="email" name="email"/></td>
			</tr>

			<tr>
			<td width="1%"<label><b>Senha: </b></label></td>
			<td width="15%"><input type="password" name="senha"/></td>
			</tr>

			<tr> 
			<td align="left"><input type="submit" name="enviar"/></td>
			</tr>

			</table>
		</form>

</body>
</html>