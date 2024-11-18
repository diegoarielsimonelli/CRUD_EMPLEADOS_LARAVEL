# Empleados CRUD Laravel

## Características

-   Validación de datos: Se utilizan FormRequest para validar las peticiones de los usuarios, asegurando que los datos sean correctos antes de ser procesados.
-   Autenticación de datos: Uso de reglas de validación como unique para garantizar la unicidad de los emails.
-   Seeder: Se han utilizado seeders para insertar 3 usuarios de prueba en la base de datos.
-   Rutas de recursos: Implementación de rutas resource para facilitar la gestión de los empleados.
-   Interfaz de usuario: Se utiliza Bootstrap para un diseño limpio y funcional.

## Instalación

1. Clona el repositorio:

`git clone https://github.com/tuusuario/empleado-crud.git`

2. Instala las dependencias:

`composer install`

3. Configura tu archivo .env con los datos de conexión a la base de datos:

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=empleados
DB_USERNAME=root
DB_PASSWORD=
```

4. Crea las tablas de la base de datos:

`php artisan migrate`

5. Carga los datos de prueba::

`php artisan db:seed`

## Uso

-   Puedes acceder a la lista de empleados directamente a través de http://localhost:8000/.
-   Para gestionar los empleados, utiliza las rutas bajo http://localhost:8000/empleados.
-   La aplicación muestra una lista de empleados donde puedes crear, editar o eliminar registros.
-   Los cambios se validan antes de ser enviados al controlador mediante la validación de StoreEmpleadoRequest.
