<html>
  <head>
    <title>Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/themes.css">
		<link rel="stylesheet" type="text/css" href="css/anim.css">
  </head>
  <body class="elegant fcol padding-05em">
		<h2>Página incial, carga automatica de <a class="green" target="__blank" href="https://jsonplaceholder.typicode.com/todos">https://jsonplaceholder.typicode.com/todos</a> mediante GET; a continuación, se interpreta la información recibida, que aparentemente corresponde a una lista de post's.</h2>
		<a class="fab relative green" href="new"><img src="assets/plus.svg"></a>
		@foreach ($data as $p)
		<div class="card">
			<div>Post id #{{$p->id}}</div>
			<div>{{ $p->title }}</div>
			@foreach ($users as $u)
			@if ($u->id == $p->userId)
			<div>Autor: {{$u->name}}</div>
			@endif
			@endforeach
			<div>Estado: {{$p->completed?'completo':'incompleto'}}</div>
			<a class="fab top-rigth yellow" href="d/{{$p->id}}"><img src="assets/pencil.svg"></a>
		</div>
		@endforeach
  </body>
</html>
