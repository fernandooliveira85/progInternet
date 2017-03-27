<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>pagina</title>
	</head>
	<body>

		<h1>{{$post->title}}</h1>

		<p>{{$post->content}}</p>


		{{Form::open(['url'=>'posts/'.$post->id,'method'=>'delete'])}}	
		{{Form::submit('excluir')}}
		{{Form::close()}}

	</body>
</html>