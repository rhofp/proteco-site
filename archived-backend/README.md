# Proteco.mx

![logo](public/img/logo.png)

***proyecto en fase de desarrollo***

```shell
julio, 2019
HTML 5 | js | css3 | bootstrap v4.1 | laravel 5.8 | php7.3 | laravel/installer2.1
```
Ya era tiempo de renovar este sitio.

## Reglas de negocio

### Registro de usuarios 

`RELEVANCIA: importante`

`STATUS: implementada salvo pequeños detalles`

Implementar un sistema de registro mediante verificación cuenta por e-mail, en caso de que la cuenta no se verifique no se podrá navegar en el sitio como usuario logeado.

### Listado de cursos

`RELEVANCIA: importante`

`STATUS: Se listan todos los cursos que hay en la TABLA CURSOS pero falta incluir las restricciones mencionadas abajo`

Se deben mostrar los curso de PROTECO tomando en cuenta las siguientes reglas (dichas reglas se traducen en condicionales en programación)

* Mostrar los cursos con base en el periodo del semestre en el que nos encontramos
  * Semestral ó
  * Intersemestral
* Mostrar cursos sí y solo si el cupo disponible NO es cero.

### Carrito de Compras

`RELEVANCIA: importante`

`STATUS:Falta validar en que periodo del semestre nos encontramos y que los cursos no se translapen`

El carrito de compras deben de mostrarse solo si el usuario esta logeado. 

Si el periodo es intersemestral, en el carrito de compras máximo se pueden incluir hasta 6 cursos y estos no deben translaparse en horarios.

Si el periodo es semestral revisar que lo horarios y fechas no se translapen

### Generación de comprobante en PDF

`RELEVANCIA: importante`

### Comentarios del asistente

`RELEVANCIA: poca`

El asistente, mediante su cuenta de PROTECO podrá y deberá calificar a su instructor un día antes de que el curso haya terminado.

### Vistas de administrador

#### Control de asistentes inscritos

#### Agregar los datos de un curso

`RELEVANCIA: importante`

Los lugares y horarios del curso no deben translaparse.

Dar la posiblidad de usar un template de un curso dado previamente para solo cambiar fechas y horarios.

### Vista becario

`REVELANCIA: poca`

El becario puede ver el total de asistentes inscritos a su curso

El becario puede ver los comentarios de todos los cursos que ha dado

## Uso para desarrolladores

### Dependencias

El sitio web, al estar escrito en *laravel* y por ende se requiere tener instalado 

* npm 

  ```shell
  sudo pacman -S npm #instalacion en arch
  # Para distribuciones basadas en Debian se recomienda bajar el 
  # archivo binario de la pagina
  ```

* composer

  ```shell
  sudo pacman -S composer # instalacion en arch
  ```

* laravel

  ```shell
  composer global require laravel/installer
  ```

  Y se debe configurar el `$PATH`, para mi caso yo uso `fish shell` por lo cual

  ```shell
  vim ~/.config/fish/config.fish  # Para fish shell
  vim ~/.bashrc # Para bash
  ```

  ```shell
  set -gx $PATH $HOME/.config/composer/vendor/bin # Forma para fish shell
  ```

* Y el manejador de DB que vaya a utlizar, se recomienda `sqlite` para las pruebas
  
  * Si utliza `sqlite`, debe tener instalado  `php-sqlite` y buscar la forma de habilitarlo en su sistema operativo (Se hace distinto en cada OS).
  
    Para el caso de linux, después de instalar `php-sqlite,` debe abrir en modo escritura el archivo
  
    `/etc/php/php.ini` y descomentar `;extension=pdo_sqlite.so`
  
    En **resumen**
  
    ```shell
    sudo pacman -S php-slite
    sudo vim /etc/php/php.ini
    ```

## Instalación


```shell
composer install #Instala dependencia de php
```

```shell
npm install #Instala dependencias de js
```

```shell
npm run dev # Compila el app.js que por defecto se configura con VUE.js
```

#### Configuración de la base de datos y .env

Ahora debe configurar la conexión a la base de datos que vaya a usar (sqlite,MySQL,POSTGRESS,etc.), para realizar dicha configuración debe de modificar el archivo `.env`, si no tiene el archivo .env en el proyecto puede utilizar el `.env.example` como ejemplo, dicho archivo ya viene con las configuraciones para enlazarse con `sqlite`, por lo cual lo único que tiene que hacer es

```shell
cp .env.example .env
# El archivo .env debe ser configurado con un correo válido
y a continuación, adapte el email a sus necesidades

MAIL_DRIVER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=rhodfra.proteco@gmail.com
MAIL_PASSWORD=
MAIL_ENCRYPTION=tls
```

```shell
touch database/database.sqlite # El archivo creado es necesario para sqlite
php artisan key:generate
```



#### Hacer la migraciones y poblar la base de datos

```shell
php artisan migrate # Creando las tablas en la base de datos
```

```php
php artisan db:seed # Poblando la base de datos ... este comando tardará algo de tiempo
```

#### Lanzar el servidor

```shell
php artisan serve
php artisan serve --host 0.0.0.0 # Para poder ver la página el dispositivos móviles externos
```

##  Contribuciones

La guía para contribuir al proyecto se encuentre [aquí](CONTRIBUTING.md)

## Licencia

Proyecto de licencia privativa.