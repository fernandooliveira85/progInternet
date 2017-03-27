<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Animais</title>

	<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <style>
            html, body {
                background-color: #fff;
                color: black;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: blue;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>

</head>



	<body>


		@foreach($animais as $animal)
			<h1>{{$animal->raca}} </h1>
			<p>{{$animal->idade}}</p>

			{{Form::open(['url'=>'posts/'.$animal->id,'method'=>'delete'])}} 
			{{Form::submit('excluir')}}
			{{Form::close()}}

			{{Form::open(['url'=>'posts/'.$animal->id.'/edit','method'=>'get'])}} 
			{{Form::submit('editar')}}
			{{Form::close()}}

			<hr>


			

			
		@endforeach

		
	</body>
</html>