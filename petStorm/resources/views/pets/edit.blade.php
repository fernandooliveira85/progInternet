<!DOCTYPE html>
<html>
<head>
	<title>Editar</title>
</head>
<body>
<h1>Editar pet</h1>	
<div class="title m-b-md">
                    PetStorm
                </div>
{{Form::open(['url'=>'posts/'. $post->id,'method'=>'put'])}}
	{{Form::label('raca', 'raca:')}}
	{{Form::text('raca', $post->raca, ['placeholder'=>'Nome do animal'])}}
	
	{{Form::label('idade','idade')}}
	{{Form::text('idade', $post->idade,['placeholder'=>'idade'])}}
	{{Form::submit('editar')}}
{{Form::close()}}

</body>
</html>
