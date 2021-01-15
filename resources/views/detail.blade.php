<html>
  <head>
    <title>Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<link rel="stylesheet" type="text/css" href="../css/themes.css">
		<link rel="stylesheet" type="text/css" href="../css/anim.css">
  </head>
  <body class="elegant fcol padding-05em">
		<div>A continuación se muestra la información interpretada de <a class="green" target="__blank" href="https://jsonplaceholder.typicode.com/todos/{{$data->id}}">https://jsonplaceholder.typicode.com/todos/{{$data->id}}</a> mediante GET, usando el botón de elimiar, se consumirá mediante DELETE, actualizando los campos y usando el botón de actualizar se consumira mediante PUT.</div>
		<form class="card" action="../update/{{$data->id}}" method="POST">
			@csrf
			<div>Post id #{{$data->id}}</div>
			<div>Titulo <input name="title" value="{{ $data->title }}"></div>
			<div>Autor <select name="userId">
					@foreach ($users as $u)
					@if ($u->id == $data->userId)
					<option selected="" value="{{$u->id}}">{{$u->name}}</option>
					@else
					<option value="{{$u->id}}">{{$u->name}}</option>
					@endif
					@endforeach
				</select></div>
			<div>Completo: <input type="checkbox" name="completed" {{$data->completed?'checked':''}}></div>
			<input type="submit" value="Actualizar">
			<a class="fab top-rigth red" href="../delete/{{$data->id}}"><img src="../assets/eliminar.svg"></a>
			<a class="fab top-rigth-2 green" href="../"><img src="../assets/home.svg"></a>
		</form>
  </body>
</html>
