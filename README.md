# IEXE CARGAS ACADEMICAS

## Acerca del proyecto.

### Este proyecto tiene como finalidad automatizar los siguientes puntos:

- Creacion de periodos academicos **cursos y materias**
- Enrolamiento de alumnos a sus cursos correspondientes

### Comandos basicos

Algunos comandos generales y especificos de este proyecto los puedes consultar [aqui](https://gist.github.com/HectorIEXE/070c36a774c3e917dad6156eef5208a6) 

### Configuración inicial del proyecto

1. Clonar el repositorio 
 - `git clone git@github.com:marcocardona-iexe/cargas_automaticas.git`
2. Acceder al proyecto y estando dentro instalar las dependecias con composer 
 - `composer install`
3. Copiar el archivo env y crear otro pero debe ser nombrado como .env
4. Modificar las conexiones a la base de datos con forme a tus propias credenciales.
    - Crear DB con el nombre que desees
Agregar tus credenciales en el .env, ejemplo:

```
database.default.hostname = localhost
database.default.database = nombredetubase
database.default.username = root
database.default.password =
database.default.DBDriver = MySQLi
database.default.DBPrefix =
database.default.port = 3306
```
5. Agregar tu Api Key de Moodle que debiste generar desde la paltaforma en el .env
 ```
  MOODLE_API_BASE_URL=http://localhost/webservice/rest/server.php
  MOODLE_API_TOKEN=aquivatutoken
```
6. Ejecutar las migraciones para tener las tablas involucradas
 - `php spark migrate --all`
6. Ejecutar migraciones para generar datos.
7- `php spark db:seed UserSeeder`
8. Levantar servidor local
  - `php spark serve`
9. Acceder a la ruta que les proporcione el paso a anterior *http://localhost:8080/login*
10. Ingresa con los usuarios:
  - usuario: antonio / marcos
  - contraseña: admin123


  ## Versiones del proyecto

  - PHP 8.1.10
  - Codeigniter 4.6

| Paquete                | Versión Requerida |
|------------------------|------------------|
| codeigniter4/shield   | ^1.1             |
| fakerphp/faker        | ^1.9             |
| mikey179/vfsstream    | ^1.6             |
| phpunit/phpunit       | ^10.5.16         |
