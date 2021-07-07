# New-Star

New-Star es un juego de navegador web. El objetivo de este trabajo es un completo reinicio del 2Moons: Un nuevo diseño, nuevo modo de juego y mucho más. Este juego de navegador esta basado en el framework de [2Moons](https://github.com/jkroepke/2Moons). 

## Website de New-Star

Do you want to know more about us? Then go to our [website](https://yaro2709.github.io/New-Star-website).

## Galleria de New-Star

There is also a [gallery](https://yaro2709.github.io/New-Star-website/gallery) of the project so that anyone can visually familiarize themselves with the project.

## Comunidad de New-Star

Want to keep abreast of the latest developments? Then come visit us on [Discord](https://discord.gg/pu7faEb), [Telegram](https://t.me/newstarnet), [Facebook](https://www.facebook.com/groups/newstarnet), [Instagram](https://www.instagram.com/newstarnet)!

## Estructura del Repositorio

- [cache] - temporary cached server .tpl webpages
- [chat] - AJAX ingame client-side chat
- [includes]
  - game engine
  - configuration
  - administration
  - database scheme
  - external libraries
  - webpages functionality
- [install]
  - first installation
  - database creation
- [language] - translations: EN, RU, ES
- [licenses] - open source license schemes
- [sound] - media files
- [mods] - modifications that are devoid of support
- [scripts] - client-side web browser .js scripts
- [styles] 
  - webpages .css templates
  - webpages .tpl templates
  - fonts
  - images
 
## Instalación Local

- Clona la repo
- Instala los componentes: `apt install apache2 php7.3 php7.3-gd php7.3-fpm php7.3-mysql php7.3-curl php-ds libapache2-mod mysql-server`
- Configura mysql: `create user USER identified by PASSWORD; create database DB; grant all privileges on DB.* to USER;`
- Establece permisos de escritura a las carpetas: `cache/`, `includes/`
- Ejecuta el asistente: `127.0.0.1/install/install.php`