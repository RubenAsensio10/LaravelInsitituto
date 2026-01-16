# Instituto - Proyecto Laravel

Sistema de gestión para instituto desarrollado con Laravel 12.

## Requisitos

- PHP 8.2 o superior
- Composer
- Node.js y npm
- MySQL

## Instalación

1. Clonar el repositorio y entrar en la carpeta del proyecto

2. Instalar dependencias de PHP:
```bash
composer install
```

3. Instalar dependencias de Node:
```bash
npm install
```

4. Copiar el archivo de configuración:
```bash
cp .env.example .env
```

5. Generar la clave de la aplicación:
```bash
php artisan key:generate
```

6. Configurar la base de datos en el archivo `.env` con tus credenciales

7. Ejecutar las migraciones:
```bash
php artisan migrate
```

8. Ejecutar los seeders para crear usuarios de prueba:
```bash
php artisan db:seed
```

9. Compilar los assets:
```bash
npm run build
```

## Ejecutar el proyecto

Para desarrollo:
```bash
php artisan serve
```

La aplicación estará disponible en `http://localhost:8000`

## Usuarios de prueba

| Rol | Email | Contraseña |
|-----|-------|------------|
| Administrador | admin@instituto.com | password |
| Profesor | profesor@instituto.com | password |
| Estudiante | estudiante1@instituto.com | password |

## Comandos artisan utilizados

```bash
# Crear proyecto
composer create-project laravel/laravel instituto

# Instalar Breeze para autenticación
composer require laravel/breeze
php artisan breeze:install blade

# Instalar paquete de permisos y roles
composer require spatie/laravel-permission
php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider"

# Migraciones
php artisan migrate
php artisan migrate:fresh

# Seeders
php artisan db:seed

# Crear modelos y migraciones
php artisan make:model Alumno -m

# Limpiar caché
php artisan config:clear
php artisan cache:clear

# Servidor de desarrollo
php artisan serve
```