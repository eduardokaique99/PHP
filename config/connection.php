<?php

$host = 'localhost';
$username = 'senac';
$passowrd = 'senac';
$database = 'aula';

$image_folder = 'assets/images/';

// criando conexão com o banco de dados 
$pdo = new PDO("mysql:host=$host;dbname=$database", $username, $passowrd);
// realizo um select para testar a conexão
//$sql = "SELECT * FROM noticias";
// executo o sql dentro do banco baseado nas informações da conexão
//$resultado = $pdo->query($sql);
//
//if($resultado){
//    echo 'Conexão realizada com sucesso!';
//}