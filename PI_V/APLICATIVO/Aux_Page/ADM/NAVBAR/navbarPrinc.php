<nav class="sidebar active">
    <div class="logo-menu">
        <h2 class="logo">Logo</h2>
        <i class='bx bx-menu toggle-btn'></i>
    </div>

    <ul class="list">
    <?php if($_SESSION['usertipo'] == 'pac' || $_SESSION['usertipo'] == 'root'){  
        echo "<li class='list-item' id='101'>
                <a href='".$menuCadPac."'>
                    <i class='bx bx-body'></i>
                    <span class='link-name' style='--i:1;'>Paciente</span>
                </a>
            </li>";
    }?>

    <?php if($_SESSION['usertipo'] == 'psc' || $_SESSION['usertipo'] == 'root'){  
        echo "<li class='list-item' id='102'>
            <a href='".$menuCadPsc."'>
                <i class='bx bx-shield-plus'></i>
                <span class='link-name' style='--i:2;'>Psicologo</span>
            </a>
        </li>";
    }?>

    <?php if($_SESSION['usertipo'] == 'root'){  
        echo "<li class='list-item' id='104'>
            <a href='".$menuCadast."'>
                <i class='bx bx-message-square-add'></i>
                <span class='link-name' style='--i:2;'>Cadastro</span>
            </a>
        </li>";
    }?>


        <li class="list-item" id='103'>
            <a href="#" >
                <i class='bx bxs-bell-ring' ></i>
                <span class="link-name" style="--i:3;">Notificações</span>
            </a>
        </li>

        <li class="list-item" id=''>
            <a href="<?php echo $index ?>" >
                <i class='bx bx-log-out-circle'></i>
                <span class="link-name" style="--i:4;">Sair</span>
            </a>
        </li>        

        <span class="link-name" style="--i:5;">
            Logado: <?php echo $_SESSION['user'];?></br>
            Tipo Acesso: <?php echo $_SESSION['usertipo'];?></br>
            ID: <?php echo $_SESSION['id'];?>     
        </span>

    </ul>

</nav>
