<?php
    session_start();
    $_SESSION['pagina'] = 0;

    if (isset($_COOKIE['item'])) {
        $_SESSION['pagina'] = $_COOKIE['item'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Unna:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/style.css">
    <title>Document</title>
</head>
<body>
    <header class="cabecalho">
        <?php include_once 'header.php';?>
    </header>

    <main class="principal">
        <?php include_once 'principal.php';?>    
    </main>

    <nav class="exercicios">
        <?php 
            switch ($_SESSION['pagina']) {
                case '1':
                    include_once './Modulo1/aula1.php';
                    break;
                case '2':
                    include_once './Modulo1/aula2.php';
                    break;
                case '3':
                    include_once './Modulo1/aula3.php';
                    break;
                case '4':
                    include_once './Modulo1/aula4.php';
                    break;
                case '5':
                    include_once './Modulo1/aula5.php';
                    break;
                
                default:
                    # code...
                    break;
            }  
        ?>
    </nav>

    <footer class="rodape">
        <?php include_once 'footer.php'?>
    </footer>

    <script src="../JS/script.js"></script>
</body>
</html>
