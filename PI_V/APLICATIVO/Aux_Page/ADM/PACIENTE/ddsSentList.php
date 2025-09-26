<div class="all_form">
    <header class="header">
        <h2>Sentimentos Cadastrados pelos Pacientes</h2>
    </header>
    <form class="frm_2" method="post" action="#"> 
        <div class="frm_prim">
            <div class="dds_pri"> 
                <div class="dds">
                    <div class="inp_dds"> 
                        <label>*Digite nome parcial ou TODOS</label>
                        <input type="text" name="nome_bus" placeholder="Digite aqui" required>
                        <button type="submit" class="btn_env" name="btnSentPes">Buscar</button>                        
                    </div> 
                </div>
            </div>
        </div>

        <?php
            
            if(ISSET($_POST['btnSentPes'])){
                $valBusc = val_var($_POST['nome_bus']);
                echo '<h4>Busca por => '.$valBusc.'.</h4>';
                echo '<h4>Limitado aos 10 mais recentes</h4>';
                include $buscaListaSentimentos;
            }
        ?>

    </form>

</div>