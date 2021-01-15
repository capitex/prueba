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
		<div>El método delete no devuelve un cuerpo, por tal razón sólo se analiza el código de respuesta HTTP tomando por exito el código 200.</div>
		@if ($sc == 200)
		<div class="card">
			<div>Post id #{{$id}} se ha eliminado</div>
			<a class="fab top-rigth green" href="../"><img src="../assets/home.svg"></a>
		</div>
		@else
		<div class="card">
			<div>Post id #{{$id}} no se ha podido eliminar status code {{$sc}}</div>
			<a class="fab top-rigth red" href="../delete/{{$id}}"><img src="../assets/eliminar.svg"></a>
		</div>
		@endif
  </body>
</html>
