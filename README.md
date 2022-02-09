# Docker PHP Apache MariaDB phpMyAdmin

# Commands

### Run apps
``
make up
``

### Stop apps
``
make down
``

### Endpoints
* phpMyAdmin: http://localhost:8080
  * server: db-app
  * user: root
  * password: 
* App: POST http://localhost:3000/insertar_producto.php

### Use example

curl --location --request POST 'http://localhost:3000/insertar_producto.php' \
--form 'codigo="P002"' \
--form 'producto="Playstation 4"' \
--form 'precio="1699.00"' \
--form 'fabricante="Sony"'
