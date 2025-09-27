<?php
//config de conexão
//Não determinado segurança de criptografia devido  ser projeto interno e rodado em server local
$config = require $_SERVER['DOCUMENT_ROOT'].'/APLICATIVO/Main_Page/ddsCnxSite.php';
/*

try {
    // DSN com charset utf8mb4
    $dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";

    // Opções de PDO para segurança e desempenho
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // lança exceções em erros
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // retorna resultados como array associativo
        PDO::ATTR_EMULATE_PREPARES => false, // usa prepared statements reais
    ];

    // Cria a conexão PDO
    $conn = new PDO($dsn, $user, $pass, $options);

    // Conexão bem-sucedida
    // echo "Conexão PDO estabelecida com sucesso!";
} catch (PDOException $e) {
    die("Erro na conexão com o banco: " . $e->getMessage());
}*/

$host = $config['host'];
$user = $config['user'];
$pass = $config['pass'];
$db   = $config['db'];

// Ativa o modo de exceção para mysqli
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    $conn = new mysqli($host, $user, $pass, $db);
    $conn->set_charset("utf8mb4");
} catch (mysqli_sql_exception $e) {
    die("Erro na conexão com o banco: " . $e->getMessage());
}


?>