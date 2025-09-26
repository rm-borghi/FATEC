<?php 
require_once $_SERVER['DOCUMENT_ROOT'] . '/METODOS/ENDERECO/ende.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/METODOS/FUNCOES/funcoes.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/METODOS/FUNCOES/configConn.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/METODOS/SQLS/SELECT/sql_select.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/METODOS/SQLS/INSERT/sql_insert.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/METODOS/SQLS/UPDATE/sql_update.php';

date_default_timezone_set('America/Sao_Paulo');

session_start();
val_session($_SESSION['user'],$index);

$_SESSION['item'] = null;

if (isset($_COOKIE['item'])) {
    $_SESSION['item'] = $_COOKIE['item'];
    $_COOKIE['item'] = null;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href='<?php echo $navbarCss?>'>    
    <title>Menu Principal</title>    
</head>
<body>
    <div class="corpo">
        <?php include $navBarPrinc;
        $dds = val_dds($_SESSION['item']);
        if (!$dds == null){
            include $dds;
        }        
        ?>
    </div>    
        
    <script src="/JavaScript/script.js" defer></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script> 
</body>
</html>