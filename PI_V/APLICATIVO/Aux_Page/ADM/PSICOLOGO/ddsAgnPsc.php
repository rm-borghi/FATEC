<div class="all_form">
    <header class="header">
        <h2>Detalhes de Agendamentos</h2>
    </header>
    <form class="frm_2" method="post" action="#"> 
        
        <div class="cntner_btn">
            <button type="submit" class="btn_exp" name="btn_exp">Exportar</button>
            <button type="submit" class="btn_exp" name="btn_upt">Atualizar</button>
        </div>

        <?php
            include $buscaListaAgendamentos;
        ?>

    </form>

</div>