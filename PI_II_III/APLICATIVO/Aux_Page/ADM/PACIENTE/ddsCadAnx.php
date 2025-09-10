<div class="all_form">
    <header class="header">
        <h2>Envio de arquivos ao Psicologo</h2>
        <h3>Limite de 2MB para aquivos do tipo ".jpg" e ".png"</h3>
    </header>
    <form class="frm_2" method="post" action="#" enctype="multipart/form-data"> 
        <div class="frm_prim">
            <div class="dds_pri"> 
                <div class="dds">
                    <div class="inp_dds"> 
                        <label for="slc_arq">*Escolha um arquivo:</label>
                        <input type="file" name="slc_arq" 
                            accept=".jpg, .png" multiple required>                                           
                    </div>

                    <div class="inp_dds">
                        <label for="detAnex">*Detalhe a imagem. Limit 255 caracteres.</label>
                        <input type="text" name="detAnex" required>
                    </div>

                    <div class="cntner_btn">
                        <button type="submit" class="btn_env" name='btnEnvAnx'>Upload</button>
                    </div> 
                </div>
            </div>
        </div>

        <?php            
            if(ISSET($_POST['btnEnvAnx'])){
                include_once $cadAnexo;
            }
        ?>

    </form>

</div>