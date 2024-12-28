# ud3_ejercicios 

# Preguntas correspondientes al ejercicio 4:

- ¿Qué crees que hace el método create de la clase Schema?
    Define y crea una nueva tabla en la base de datos con la estructura que le has proporcionado.

- ¿Qué crees que hace $table->string('email')->primary();?
    Crea una columna de tipo String llamada email y se define como clave primaria.

- ¿Cuantas tablas hay definidas? Indica el nombre de cada tabla
    Hay tres tablas definidas: Users, Cache, Jobs.
# Preguntas correspondientes al ejercicio 5.

- ¿Cuantas tablas aparecen?
  Me aparecen 9:
  cache
  cache_locks
  failed_jobs
  job_batches
  jobs
  migrations
  password_reset_tokens
  sessions
  users
  
# Preguntas correspondientes al ejercicio 6.

- Indica qué realiza los siguientes comandos:

php artisan migrate: Ejecuta todas las migraciones pendientes y crea las tablas en la base de datos.

php artisan migrate:status: Muestra el estado de cada migración indicando si se ha ejecutado o no.

php artisan migrate:rollback: Revierte la última migración ejecutada.

php artisan migrate:reset: Revierte todas las migraciones, eliminando las tablas creadas.

php artisan migrate:refresh: Combina reset y migrate para reiniciar las migraciones desde cero.

php artisan make:migration: Crea un nuevo archivo de migración.

php artisan migrate --seed: Ejecuta las migraciones y rellena las tablas con datos de prueba definidos en Seeders.

# Pregunta correspondiente al ejercicio 8.

- ¿Qué pasos debemos dar si queremos añadir el campo $table->string('apellido'); a la tabla alumnos del ejercicio anterior?

     - Crear una nueva migracion con el comando: php artisan make:migration add_apellido_to_alumnos. lo que hace que cree un nuevo archivo en la carpeta database/migrations.
     - Modificamos el archivo creado en la migración, añadiendo en el metodo up() =>  $table->string('apellido')->after('nombre');  y en el metodo down() =>  $table->dropColumn('apellido');
     - Ejecutamos la migración con el comando: php artisan migrate.
     - Verificamos la estructura de la tabla. Para ello nos conectamos al servidor de mariadb para confirmar que la columna se añadió correctamente. Una vez dentro seleccionamos la base de datos ejecutando: USE test2;
       y verificamos que la columna existe con el comando: DESCRIBE alumnos;
     - Una vez hecho todo esto, se mostraran todas las columnas.
