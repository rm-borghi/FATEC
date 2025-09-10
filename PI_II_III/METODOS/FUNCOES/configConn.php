<?php
//config de conexão
//Não determinado segurança de criptografia devido  ser projeto interno e rodado em server local

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'PI_II_III';

//coneção com o banco
$conn = new mysqli($host,$user,$pass,$db);

//verifica erro de conexão
if($conn->connect_error) {
    die("falha!!!".$connect_error);
}

?>