## Logica desarrollo
Considerando que lo que se quiere es consumir una API RESTful, necesitaremos un cliente que nos ayude con dicho consumo, para ello utilizamos guzzle.
Entonces, según a las especificaciones, como se quiere consumir en los verbos GET, POST, PUT y DELETE, entonces creamos una clase que:
- Nos instancie un objeto de la clase Client de Guzzle
- Preparamos el esquema de invoación de cada verbo o en otras palabras un metodo para cada verbo

Esta clase la llamé GClient y la guardé junto a los modelos en app/Models.

Ahora, una vez que tenemos nuestro cliente listo para recibir los diferentes verbos a utilizar, procedemos a configurar las rutas(routes/web.php) y el controlador de las mismas(app/Http/Controllers/ApiController.php); inicialmente configuré la ruta del index `/` para que consuma la API por GET apuntando al metodo index del controlador.

En cada vista(resources/views/), agregué botones que apuntan a las diferentes rutas.

Cada ruta ejecuta un método dentro del controlador y cada método tiene el consumo de cada método de la API según se requiere.
