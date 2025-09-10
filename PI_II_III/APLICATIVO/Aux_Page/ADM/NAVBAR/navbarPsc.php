<nav class="sidebar active">
    <div class="logo-menu">
        <h2 class="logo">Logo</h2>
        <i class='bx bx-menu toggle-btn'></i>
    </div>

    <ul class="list">

        <li class="list-item" id='304'>
            <a href="#">
                <i class='bx bxs-chat'></i>
                <span class="link-name" style="--i:1;">Sessões</span>
            </a>
        </li>

        <li class="list-item" id='305'>
            <a href="#" >
                <i class='bx bx-message-rounded-dots'></i>
                <span class="link-name" style="--i:2;">Consulta</span>
            </a>
        </li>

        <li class="list-item" id='306'>
            <a href="#" >
                <i class='bx bxs-grid' ></i>
                <span class="link-name" style="--i:3;">Sentimentos</span>
            </a>
        </li>

        <li class="list-item" id='307'>
            <a href="#" >
                <i class='bx bx-search' ></i>
                <span class="link-name" style="--i:4;">Localizar</span>
            </a>
        </li>

        <li class="list-item" id='308'>
            <a href="#">
                <i class='bx bx-export'></i>
                <span class="link-name" style="--i:5;">Anexos</span>
            </a>
        </li>

        <li class="list-item">
            <a href="<?php echo $menuPrincipal ?>">
                <i class='bx bx-left-arrow-alt'></i>
                <span class="link-name" style="--i:6;">Voltar</span>
            </a>
        </li>
 
        <span class="link-name" style="--i:7;">
            Logado: <?php echo $_SESSION['user'];?></br>
            Tipo Acesso: <?php echo $_SESSION['usertipo'];?></br>
            ID: <?php echo $_SESSION['id'];?>
        </span>
        
    </ul>

</nav>


