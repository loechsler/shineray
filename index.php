<?php
/**
 * Shineray
 * 
 * @version 2025-03-16 23:00:00
 * @author	Luciano M. Oechsler <luciano.oechsler@gmail.com>
 */

	/**
	 * Nome da Sessão
	 */
	session_name('Shineray');

	/**
	 * Configurações da Sessão
	 */
	session_set_cookie_params([
		'lifetime' => 3600,
		'path'     => '/',
		'domain'   => '',
		'secure'   => isset($_SERVER['HTTPS']),
		'httponly' => true,
		'samesite' => 'Strict'
	]);

	/**
	 * Iniciar Sessão
	 */
	session_start();

		/**
		 * Verificar credenciais de acesso
		 */
		if(isset($_SESSION['auth']) && ($_SESSION['auth'] == true)) {
			header('Location: painel/');
				exit();
		}
		else {
			header('Location: login/');
				exit();
		}
