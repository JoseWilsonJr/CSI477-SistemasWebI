<?php
	
	//var_dump($_POST); /* comentário em bloco */

	if (isset($_POST["nome"])) {
		$nome = $_POST["nome"] . " (post) ";
	} else {
		$nome = $_GET["nome"] . " (get) ";
	}

	echo "<h1> Seja bem-vindo(a) $nome!</h1>";