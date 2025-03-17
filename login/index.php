<?php
/**
 * Shineray
 * 
 * @version 2025-03-16 23:00:00
 * @author	Luciano M. Oechsler <luciano.oechsler@gmail.com>
 */

	/**
 	 * Iniciar sessão
	 */
	session_start();

	/**
	 * Verificação de credenciais
	 */
	if(isset($_SESSION['auth']) && ($_SESSION['auth'] == true)) {
		header('Location: painel/');
			exit();
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>Shineray</title>
	<meta content="no-cache, no-store, must-revalidate" http-equiv="Cache-Control">
	<meta content="no-cache" http-equiv="Pragma">
	<meta content="0" http-equiv="Expires">

	<link href="stylesheet/login.css" rel="stylesheet"  />
</head>
<body>
	<div id="document">

		<header>
			<img alt="Shineray" src="image/logo.png" />
		</header>

		<main>
			<h2>Autenticação</h2>

			<form action="">
				<input autofocus placeholder="Digite sua chave de acesso" type="password" value="" />
				<button class="clear">X</button>
			</form>
		</main>

		<section id="info"></section>
	</div>

	<script src="javascript/login.js"></script>
</body>
</html>