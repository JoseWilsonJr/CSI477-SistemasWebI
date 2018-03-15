<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Sistema Acadêmico</title>
	</head>
	<body>

		<!-- Links //-->
		<p><a href="{{ url('/') }}">Home</a></p>
		<p><a href="{{ url('/listar') }}">Alunos</a></p>
		<p><a href="{{ url('/cidades') }}">Cidades</a></p>
		<p><a href="{{ url('/info') }}">Informações</a></p>

		<!-- CONTEUDO //-->
		@yield('conteudo')

	</body>
</html>