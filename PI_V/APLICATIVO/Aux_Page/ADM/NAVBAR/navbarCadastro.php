<nav class="sidebar active">
    <div class="logo-menu">
        <h2 class="logo">Logo</h2>
        <i class='bx bx-menu toggle-btn'></i>
    </div>

    <ul class="list">
        <li class='list-item' id='301'>
            <a href='#'>
            <i class='bx bx-user-plus' ></i>
                <span class='link-name' style='--i:1;'>Psicologo</span>
            </a>
        </li>

        <li class='list-item' id='302'>
            <a href='#'>
                <i class='bx bx-user-plus' ></i>
                <span class='link-name' style='--i:2;'>Paciente</span>
            </a>
        </li> 
        
        <li class="list-item">
            <a href="<?php echo $menuPrincipal ?>">
                <i class='bx bx-left-arrow-alt'></i>
                <span class="link-name" style="--i:6;">Voltar</span>
            </a>
        </li> 

        <span class="link-name" style="--i:4;">
            Logado: <?php echo $_SESSION['user'];?></br>
            Tipo Acesso: <?php echo $_SESSION['usertipo'];?></br>
            ID: <?php echo $_SESSION['id'];?>     
        </span>       

    </ul>

</nav>
