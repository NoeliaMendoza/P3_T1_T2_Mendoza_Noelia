<?php
$title = "Posts";
$posts = $db->query(sql: 'SELECT * FROM posts ORDER BY id DESC LIMIT 6')->get(); //peticion a la base de datos 
//y almacena los datos en la variable
require __DIR__ . '/../../resources/home.template.php'; //Redirigue a la plantilla 
