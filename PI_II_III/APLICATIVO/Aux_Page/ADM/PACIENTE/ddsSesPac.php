<?php
if(isset($_POST['btnEnvSesPac'])){
    include $cadSessao;   
}
?>
<!--deixado nesta pagina para não influenciar os demais inputs das outras paginas -->
<script>
    function limitarCaracteres(input) {
        if (input.value.length > 255) {
            input.value = input.value.slice(0, 255);
        }
    }
</script>

<div class="all_form">
    <header class="header">
        <h2>Registro de Sessão</h2>
    </header>
    <form class="frm_4" method="post" action="#">
        <div class="dds"> 
            Lista de Sessões do Paciente: <?php echo $_SESSION['user'];?></br>
            <button type="submit" class="btn_env" name='btnLoc' 
                value="<?php echo $_SESSION['user'];?>">Listar</button>
        </div>
    </form>

    <form class="frm_2" method="post" action="#"> 
        <div class="frm_prim">
            <div class="dds_pri"> 
                <span class="tit">FeedBack do Psicologo</span>
                <div class="dds">
                    <input class="consResumo" placeholder="Codar para trazer o feedback do Psicologo na seleção dos radio button">
                </div>
            </div>

            <div class="dds_pri"> 
                <span class="tit">FeedBack para o Psicologo</span>
                <div class="dds">
                    <label>Limite 255 caracteres </label>
                    <input class="consResumo" type="text" name="feed_psc" id="feed_psc" 
                        size="255" maxlength="255" required oninput="limitarCaracteres(this)">
                </div>
            </div>

        </div>

        <div class="cntner_btn">
            <button type="submit" class="btn_env" name='btnEnvSesPac'>Enviar</button>            
        </div>

        <div class="dds_pri"> 
               
        </div>

        <div class="dds">
            <?php 
                if(isset($_POST['btnLoc'])){
                include $buscaListaConsultas;   
            }
            ?>
        </div>
    </form>



</div>