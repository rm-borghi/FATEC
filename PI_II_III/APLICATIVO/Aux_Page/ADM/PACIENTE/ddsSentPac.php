<!--deixado nesta pagina para não influenciar os demais inputs das outras paginas -->
<script>
    function limitarCaracteres(input) {
        if (input.value.length > 255) {
            input.value = input.value.slice(0, 255);
        }
    }           
</script>

<?php
    //função sem muitos paranauê escrita junto à pagina.
    if(isset($_POST['btnEnvSent']) && $_SESSION['usertipo'] == 'pac'){
        $arrayHmr = explode(";",val_var($_POST['opt']));
        $camJsn = $arrayHmr[0];
        $hmrJsn = $arrayHmr[1];
        $nov_sent = reg_humr_dia(
                        $conn,
                        $sql_insert_novo_sent,
                        val_var($_POST['opt']),
                        val_var($_POST['res_sent']),
                        date('Y-m-d H:i:s'),
                        dds_json($camJsn,$hmrJsn),
                        $_SESSION['id']);

        echo "<h1>".$nov_sent."</h1>";
 
      }else{
        echo '<h1>Somente Paciente pode Cadastrar!</h1>';
      }
?>

<div class="all_form">
    <header class="header">
        <h2>Registros de Sentimento</h2>
        <h4>Imagens geradas com Microsoft Copilot Design</h4>
    </header>
    <form class="frm_2" method="post" action="#"> 
        <div class="frm_prim">
            <div class="dds_pri"> 
                <span class="tit">Hoje meu sentimento é...</span>
                <div class="t_btn_sent"> 
                    <div class="tbtn_imag">
                        <input type="radio" id="btn_pos" name="optSent" checked onclick="showPage('page1')" placeholder="">
                        <img class='img_sent_tbtn' src='<?php echo $sentPositivo?>' alt='Positivo'>
                        <label for="btn_pos">Positivo</label>
                    </div>
                    
                    <div class="tbtn_imag">
                        <input type="radio" id="btn_neg" name="optSent" onclick="showPage('page2')" placeholder="">
                        <img class='img_sent_tbtn' src='<?php echo $sentNegativo?>' alt='Negativo'>
                        <label for="btn_neg">Negativo</label>
                    </div>
                </div>
            </div>

            <div class="dds_pri"> 
                <span class="tit">...pois, estou me sentido com</span>
                
                <div id="content">
                    <!--Busca a pagina de Itens do sentimento -->
                </div>

                <div class="dds">
                    <label>Resumo Sentimento. Limite 255 caracteres </label>
                    <input class="consResumo" type="text" name="res_sent" id="res_sent" 
                        size="255" maxlength="255" oninput="limitarCaracteres(this)"
                        placeholder="Digite aqui...">
                </div>

            </div>           
        </div>

        <div class="cntner_btn">
            <button type="submit" class="btn_env" name="btnEnvSent">Enviar</button>
        </div>

    </form>

</div>

<!--deixado nesta pagina para não influenciar os demais inputs das outras paginas -->
<script>
    function showPage(page) {
        let contentDiv = document.getElementById('content');

        if (page === 'page1') {
            contentDiv.innerHTML = `<?php include './ADM/PACIENTE/listSentPositivos.php'?>`;
        } else if (page === 'page2') {
            contentDiv.innerHTML = `<?php include './ADM/PACIENTE/listSentNegativos.php'?>`;
        }        
    }

    // Inicializa com a primeira página
    showPage('page1');
</script>