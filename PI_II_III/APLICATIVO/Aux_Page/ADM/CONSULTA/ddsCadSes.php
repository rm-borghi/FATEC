<?php
if(isset($_POST['btnEnvSes'])){
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
            Lista de Sessões do Psicologo: <?php echo $_SESSION['user'];?></br>
            <button type="submit" class="btn_env" name='btnLoc' 
                value="<?php echo $_SESSION['user'];?>">Listar</button>
        </div>
    </form>

    <form class="frm_2" method="post" action="#"> 
        <div class="frm_prim">
            <div class="dds_pri"> 
                <span class="tit">Informações da Consulta</span>
                <div class="dds">
                    <label>*Resumo Consulta. Limite 255 caracteres </label>
                    <input class="consResumo" type="text" name="res_con" id="res_con" 
                        size="255" maxlength="255" required oninput="limitarCaracteres(this)">
                </div>
            </div>

            <div class="dds_pri">
                <div class="dds">
                    <label>*Detalhamento Consulta. Limite 65.535 caracteres</label>
                    <textarea name="cons_det" required></textarea>
                </div>
            </div>
            
        </div>

        <div class="dds_pri"> 
            <span class="tit">FeedBack ao Paciente</span>
            <div class="dds">
                <label>*Esta informação será mostrada ao Paciente em seu cadastro de Sessões </label>
                <input class="consResumo" type="text" name="feed_con" id="feed_con" 
                    size="255" maxlength="255" required oninput="limitarCaracteres(this)">
            </div>
        </div>

        <div class="cntner_btn">
            <button type="submit" class="btn_env" name='btnEnvSes'>Enviar</button>            
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