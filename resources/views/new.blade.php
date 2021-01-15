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
		<div>Al hacer click en el botón crear, se consumirá el recurso <a class="green" target="__blank" href="https://jsonplaceholder.typicode.com/todos">https://jsonplaceholder.typicode.com/todos</a> mediante POST, enviando la data diligenciada.</div>
		<form class="card" action="create" method="POST">
			@csrf
			<div>Titulo <input name="title" value=""></div>
			<div>Autor <select name="userId">
					@foreach ($users as $u)
					<option value="{{$u->id}}">{{$u->name}}</option>
					@endforeach
				</select></div>
			<div>Completo: <input type="checkbox" name="completed"></div>
			<input type="submit" value="Crear">
			<a class="fab top-rigth green" href="./"><img src="assets/home.svg"></a>
		</form>
  </body>
</html>
