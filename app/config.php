<?php

/* Variables Globales */
define('SERVER','localhost');
define('USER','root');
define('PASSWORD','wesito15');
define('BD','sistemadeventas');

$servidor = "mysql:dbname=".BD.";host=".SERVER;

try{
    $pdo = new PDO($servidor, USER, PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    //echo "La conexión a la base de datos fue exitosa";
}catch (PDOException $e){
    //print_r($e);
    echo "Error al conectar a la base de datos.";
}

$URL = "http://localhost/sistema-ventas/";