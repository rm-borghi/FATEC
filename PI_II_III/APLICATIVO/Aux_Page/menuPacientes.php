<?php 
require_once '../../METODOS/ENDERECO/ende.php';
require_once '../../METODOS/FUNCOES/funcoes.php';
require_once '../../METODOS/FUNCOES/configConn.php';
require_once '../../METODOS/SQLS/SELECT/sql_select.php';
require_once '../../METODOS/SQLS/INSERT/sql_insert.php';
require_once '../../METODOS/SQLS/UPDATE/sql_update.php';

//Definições de data hora
date_default_timezone_set('America/Sao_Paulo');

session_start();

$_SESSION['item'] = 0;

val_session($_SESSION['user'],$index);

if (isset($_COOKIE['item'])) {
    $_SESSION['item'] = $_COOKIE['item'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=<?php echo $navbarCss?>>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
      
    <title>PROTOTIPO PI II III</title>    
</head>
<body>
    <div class="corpo">
        <?php 
        include $navBarPac;
        $dds = val_dds($_SESSION['item']);
        if (!$dds == null){
            include $dds;
        }
        ?>
    </div>

    <script src="../../JavaScript/script.js" type='module' defer></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script> 
</body>
</html>
