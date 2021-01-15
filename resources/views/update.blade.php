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
		<div>A continuación se muestra la información interpretada de <a class="green" target="__blank" href="https://jsonplaceholder.typicode.com/todos/{{$data->id}}">https://jsonplaceholder.typicode.com/todos/{{$data->id}}</a> mediante PUT junto con la data actualizada anteriormente.</div>
		<div class="card">
			<div>Post id #{{$data->id}}</div>
			<div>{{ $data->title }}</div>
			@foreach ($users as $u)
			@if ($u->id == $data->userId)
			<div>Autor: {{$u->name}}</div>
			@endif
			@endforeach
			<div>Estado: {{$data->completed?'completo':'incompleto'}}</div>
			<a class="fab top-rigth-2 yellow" href="../d/{{$data->id}}"><img src="../assets/pencil.svg"></a>
			<a class="fab top-rigth red" href="../delete/{{$data->id}}"><img src="../assets/eliminar.svg"></a>
			<a class="fab top-rigth-3 green" href="../"><img src="../assets/home.svg"></a>
		</div>
  </body>
</html>
