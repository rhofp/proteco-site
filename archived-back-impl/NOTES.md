# Laravel Notes

## Basic configuration

```shell
lavarel new proteco
composer install 
npm install
npm run dev

# configure .env file

php artisan key:generate
```

## Login and register with verification

```shell
php artisan make:auth
php artisan migrate
```

* configure .env, yes one more time, look for smtp configurations.
  * Para el caso de gmail hay que habilitar la opción de "Acceso de aplicaciones poco seguras"
* Change User models, implement Must VerifyEmail

## Creamos los modelos para los cursos

```shell
php artisan make:model Course -m
php artisan make:model Class -m
php artisan make:model Semester -m
php artisan make:model Place -m
php artisan make:model ClassType -m
```



