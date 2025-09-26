<nav class="sidebar active">
    <div class="logo-menu">
        <h2 class="logo">Logo</h2>
        <i class='bx bx-menu toggle-btn'></i>
    </div>

    <ul class="list">
        <li class="list-item" id='201'>
            <a href="#">
                <i class='bx bx-refresh' ></i>
                <span class="link-name" style="--i:1;">Atualizar</span>
            </a>
        </li>

        <li class="list-item " id='202'>
            <a href="#">
                <i class='bx bxs-user-detail'></i>
                <span class="link-name" style="--i:2;">Consultas</span>
            </a>
        </li>

        <li class="list-item" id='203'>
            <a href="#">
                <i class='bx bx-happy-heart-eyes'></i>
                <span class="link-name" style="--i:3;">Sentimento</span>
            </a>
        </li>

        <li class="list-item" id='204'>
            <a href="#">
                <i class='bx bx-folder-plus'></i>
                <span class="link-name" style="--i:4;">Anexos</span>
            </a>
        </li>
        <!--
        <li class="list-item" id='205'>
            <a href="#">
                <i class='bx bx-calendar'></i>
                <span class="link-name" style="--i:5;">Agendar</span>
            </a>
        </li>  
        -->
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


