**Actualización de cambios**
Es importante contar con un entorno local para poder probar los cambios a empujar.

**Push**
Una vez que se hayan probado los cambios en el ambiente local, se procede a ejecutar el comando:

    $ git add --all
    $ git commit -m "Comentarios de los cambios"
    $ git push origin master

**Pull**
Dentro del servidor, se ejecutan los siguientes comandos:

    $ cd /var/www/landing_page
    $ git pull origin master
    $ sudo service nginx restart

¡Proceso de actualización completado!
    
