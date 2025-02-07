# LikePlatform CLI

[![License: MIT](https://img.shields.io/badge/License-MIT-green.svg)](https://opensource.org/licenses/MIT)

LikePlatform CLI es una biblioteca de comandos Artisan diseñada para agilizar el desarrollo de proyectos y paquetes en el ecosistema LikePlatform.

## Descripción

Este paquete proporciona varios comandos para facilitar tareas habituales en proyectos Laravel. Algunos de estos comandos incluyen la creación de usuarios demo, la instalación de paquetes y agregar traducciones.

## Instalación

Para instalar este paquete, utiliza Composer:

```shell
composer require luinuxscl/likeplatform-cli
```

## Comandos Disponibles

El paquete incluye los siguientes comandos Artisan:

- **likeplatform:create-demo-user**:
  - Crea un usuario de demostración en la base de datos.
- **likeplatform:greet {name}**:
  - Muestra un saludo personalizado en la consola.
- **likeplatform:install**:
  - Realiza la instalación de varios paquetes de Composer necesarios y ejecuta una serie de comandos Artisan.
- **likeplatform:translate**:
  - Copia archivos de traducción a la carpeta `lang` en la raíz de la aplicación.

## Uso

Para utilizar cualquiera de estos comandos, simplemente ejecuta el comando Artisan correspondiente desde la línea de comandos dentro del directorio de tu proyecto Laravel. Por ejemplo:

```shell
php artisan likeplatform:create-demo-user
```

## Requisitos

- PHP 8.1 o superior
- Laravel con el paquete `illuminate/console` 11.0 o superior

## Contribución

Gracias por considerar contribuir a LikePlatform CLI! Por favor, envía cualquier solicitud de extracción en [GitHub](https://github.com/luinuxscl/likeplatform-cli).

## Licencia

Este proyecto está licenciado bajo la Licencia MIT. Para más detalles, consulta el archivo LICENSE.
