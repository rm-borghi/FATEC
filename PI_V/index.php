<?php 
//Requisito de segurança
//Session() inicia uma sessão contendo dados de validação entre paginas
//Iniciada a sessão e destruido dados permanentes da sessão, visando não manter caches de dados
session_start();
session_destroy();
session_write_close();
date_default_timezone_set('America/Sao_Paulo');
$_COOKIE['item'] = null;

//Lista de requisições 
require_once $_SERVER['DOCUMENT_ROOT'] . '/METODOS/SQLS/SELECT/sql_select.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/METODOS/FUNCOES/configConn.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/METODOS/ENDERECO/ende.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/METODOS/FUNCOES/funcoes.php';

//Chamadas de funções backend para aplicativo
if(isset($_POST['ind_user']) && isset($_POST['ind_senha'])){
    $val_user = val_var($_POST['ind_user']);
    $val_pwd = val_var($_POST['ind_senha']);
    session_start();

    if($val_user != null && $val_pwd != null){
        $n_sql = $conn->prepare($sql_select_list_user_pwd);
        $n_sql->bind_param("s",$val_user);
        $n_sql->execute();
        $r_sql = $n_sql->get_result();
        $s_sql = $r_sql->fetch_assoc();
            if(isset($r_sql) && $r_sql->num_rows == 1 && //$val_pwd === $s_sql['Pwd'])
                password_verify($val_pwd,$s_sql['Pwd']))
                {
                $_SESSION['user'] = $val_user;
                $_SESSION['nom_user'] = $s_sql['Nome'];
                $_SESSION['usertipo'] = $s_sql['UserTipo'];
                $_SESSION['id'] = $s_sql['Id'];
                header('Location: '.$menuPrincipal); 
            }else{
                echo "<script>alert('erro password 1')</script>";
                //header('Location: '.$index); 
            }
    }else{
        echo "<script>alert('erro password 2')</script>";
        //header('Location: '.$index);
    }

    mysqli_free_result($r_sql);
    $conn->close();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/index.css">
    <title>Eclipse DataWorks - Prototipo</title>
</head>
<body>
    <header>
        <img src="<?php echo $img_background ?>" alt="Pscologia" class="objt_imagem">
        <div class=""> Hello World!!! Versão Alpha 1.14</div>
        <div class=""> 
            <span>VERSÃO PROTÓTIPO</span>
            <a href="<?php echo $alpha?>" class="txtAlpha">DOCUMENTAÇÃO</a>
        </div>
    </header>

    <div class="lgn_cntner">
        <div class="box_login">
            <h2>Login</h2>
            <form id="login-form" method="post" action="">
                    
                <div class="log_inpt">
                    <span class = "icon">
                        <ion-icon name="mail"></ion-icon>
                    </span>

                    <input type="text" name="ind_user"required>
                    <label>Usuário</label>
                </div>

                <div class="log_inpt">
                    <span class = "icon">
                        <ion-icon name="lock-closed"></ion-icon>
                    </span>
                    <input type="password" name="ind_senha" required>
                        <label>Senha</label>
                </div>                

                <button type="submit" class="ind_btn">Login</button>
                
            </form>

            <div class="cnt_lgn">
                <a href="#">Esqueceu Senha?</a>
                <a href="#">Contate-me!</a>
            </div>

            <div class="marca">
                <h4>2024 ECLIPSE DATAWORKS</h4>
            </div>

            <div class="somos">
                <a href="<?php echo $quemSomos ?>">Conheça-nos!</a>
            </div>
        </div>

    </div>

    <script src=""></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    
    <footer>
        
    </footer>
</body>
</html>