# Evaluación de Laravel

Por simplicidad escrito en español.

## Descripción

Este proyecto se monta sobre XAMPP utilizando:

- MariaDB como base de datos
- Laravel como framework Rest API
- Apache como servidor web

## Ejecución

El entorno requiere instalación de módulos de node.

~~~
npm install
~~~

Para poblar la base de datos:

~~~sh
php artisan migrate:fresh --seed
~~~

Ejecutar la aplicación Laravel

~~~sh
php artisan serve
~~~

La aplicación se levanta en la ruta local http://127.0.0.1:8000/

## Requerimientos de la aplicación

**Objetivo**: Crear un sistema de gestión de tareas que permita a los usuarios crearlas, asignarlas a otros usuarios, actualizarlas y eliminarlas.

## Requisitos Funcionales

### RF 01: Autenticación

Un usuario puede registrarse y autenticarse.

Se requiere el uso de herramientas como Laravel Breeze o Jetstream.

### RF 02: Gestión de Tareas

Un usuario puede:

- Crear tareas
- Asignarlas a otros usuarios
- Editarlas
- Eliminarlas

Cada tarea tiene:

- Una fecha de vencimiento
- Una descripción
- Un estado: Pendiente, en progreso, completada
- Un usuario asignado

### RF 03: Lista de tareas

Un usuario puede ver una lista de todas las tareas, con la capacidad de filtrarlas por estado.

### Observaciones

Hay aspectos que se consideran importantes para una app de este estilo pero no se implementan.

- Definir grupos de trabajo. La aplicación se limita a que cada usuario puede ver todas las tareas
- Definir roles. Un usuario puede asignar tareas a cualquier otro, no necesita ser un usuario lider o gestor.


## Criterios de evaluación

Respecto a base de datos:

- Uso de base de datos relacional (Postgres, MySql)
- Definir migraciones, modelos necesarios
- Se valora el diseño y uso eficiente de consultas

Respecto a la interfaz de usuario:

- No requiere complejidad en el diseño, solo facilidad de uso.
- Se sugiere usar Blade.

Respecto a la aplicación en general:

- Se deben cumplir todos los requisitos mencionados
- Se valora limpieza, organización y legibilidad
- Uso correcto de funcionalidad de Laravel
- Se valora uso de pruebas unitarias y medidas de seguridad

- Se utiliza una relacional, se deben crear modelos necesarios para gestión de tareas.


## Tareas

### Configuración de la base de datos

- [x] Definir tablas y migraciones (en plural)
- [x] Crear los modelos y factories
- [x] Implementar seeds para las tablas


## Deseable

- [ ] Pruebas Unitarias
- [ ] Implementar criterios de Seguridad (Revisar OWASP)

## Lujito

- [ ] Documentar APIs con Swagger
- [ ] Crear colecciones de requests

## Consideraciones durante el desarrollo

- Una tarea puede existir sin tener un usuario a cargo
- Cuando el usuario autor de una tarea es eliminado de la DB, la tarea sigue existiendo