<?php

$host = 'localhost';
$db = 'inmobiliaria';
$connection_string = "mysql:dbname=$db;host=$host;";
$username = 'deustoforma';
$password = 'deustoforma123';

$conexion= new mysqli($connection_string, $username, $password);

?>