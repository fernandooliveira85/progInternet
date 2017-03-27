<!DOCTYPE html>
<html>
	<head>
		<title>Inserindo</title>
	</head>
	<body>
	<h1>Inserir Animal</h1>	

	{{Form::open(['url'=>'posts','method'=>'post'])}}
		{{Form::label('nome', 'Insira o nome:')}}
		{{Form::text('raca', null, ['placeholder'=>'Nome do animal'])}}
		
		{{Form::label('idade','Insira a idade')}}
		{{Form::text('idade', null,['placeholder'=>'Idade do animal'])}}
		{{Form::submit('salvar')}}
	{{Form::close()}}

	</body>
</html>
