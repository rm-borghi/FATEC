<?php
//config de conexão
//Não determinado segurança de criptografia devido  ser projeto interno e rodado em server local

$host = 'db_eclipsedtw.mysql.dbaas.com.br';
$user = 'db_eclipsedtw';
$pass = 'r97f!eTRdguJ8o';
$db = 'db_eclipsedtw';

//coneção com o banco
$conn = new mysqli($host,$user,$pass,$db);

//verifica erro de conexão
if($conn->connect_error) {
    die("falha!!!".$connect_error);
}

?>