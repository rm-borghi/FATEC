<?php
//config de conexão
//Não determinado segurança de criptografia devido  ser projeto interno e rodado em server local

$host = 'db_eclipsedtw.mysql.dbaas.com.br';
$user = 'db_eclipsedtw';
$pass = 'r97f!eTRdguJ8o';
$db = 'db_eclipsedtw';

// Ativa o modo de exceção para mysqli
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    $conn = new mysqli($host, $user, $pass, $db);
    $conn->set_charset("utf8mb4");
} catch (mysqli_sql_exception $e) {
    die("Erro na conexão com o banco: " . $e->getMessage());
}

/*coneção com o banco
$conn = new mysqli($host,$user,$pass,$db);
//$mysqli->set_charset("utf8mb4");
//verifica erro de conexão
if($conn->connect_error) {
    die("falha!!!".$connect_error);
}*/

?>