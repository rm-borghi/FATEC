<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/METODOS/ENDERECO/ende.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=<?php echo $somosCss ?>>
    <title>Eclipse DataWorks</title>
</head>
<body>
    <header>
        <img src="<?php echo $img_background ?>" alt="Pscologia" class="objt_imagem">
        <div class=""> Hello World!!! Versão Alpha 1.14</div>
    </header>

    <div class="smos_cntner">
        <div class="smos_login">
            <spam class='tit_sms'>TIME ECLIPSE DATAWORKS</spam>
            <div class="dds">                    
                <div class="r_btn_sent"> 
                    <div class="rbtn_imag">
                        <img class='img_sent_rbtn' src='<?php echo $giovanni?>' alt=''
                            title="">
                        <label>Giovanni A. Longhini</label>
                        <label>Inovação Tecnológica</label>

                    </div>

                    <div class="rbtn_imag">
                        <img class='img_sent_rbtn' src='<?php echo $hugo?>' alt=''
                            title="">
                        <label>Hugo H. F. Claus</label>
                        <label>Qualidade</label>
                    </div>

                    <div class="rbtn_imag">
                        <img class='img_sent_rbtn' src='<?php echo $airton?>' alt=''
                            title="">
                        <label>Airton D. de Oliveira</label>
                        <label>Engenheiro de Software</label>
                    </div>

                </div>
            </div>

            <div class="dds">
                <div class="r_btn_sent"> 
                    <div class="rbtn_imag">
                        <img class='img_sent_rbtn' src='<?php echo $marcelo?>' alt=''
                            title="">
                        <label>Marcelo C. C. Leme</label>
                        <label>Analista de RH</label>                        
                    </div>
                
                    <div class="rbtn_imag">
                        <img class='img_sent_rbtn' src='<?php echo $rafael?>' alt=''
                            title="">
                        <label>Rafael M. Borghi</label>
                        <label>Estagiário</label>
                    </div>

                     </div>
                </div>
            </div>
        </div>
    </div>

    <div class="smos_cntner">
        <div class="smos_login">
        <spam class='tit_sms'>MISSÃO, VISÃO e VALORES</spam>
            <!--<div class="mvv_cntner">-->
                <div class="mvv_txt">
                    <h4>MISSÃO</h4>
                    <span>Na Eclipse Dataworks, nossa missão é ser a parceira ideal para organizações que buscam 
                        alcançar a excelência operacional. Estamos comprometidos em fornecer soluções criativas e 
                        personalizadas em tecnologia da informação, que promovem a otimização e a evolução contínua 
                        dos processos organizacionais.  </span>
                </div>
                <div class="mvv_txt">
                    <h4>VALORES</h4>
                    <span> São nossos valores: Excelência, Inovação, Parceria e Integridade.</span>
                </div>
                <div class="mvv_txt">
                    <h4>VISÃO</h4>
                    <span>A visão da Eclipse Dataworks é ser a referência em consultoria de TI, reconhecida pela sua 
                        excelência na entrega de soluções eficazes e inovadoras que transformam organizações e promovem 
                        o sucesso empresarial</span>
                </div>

                <div class="somos">
                    <a href="<?php echo $index?>">Voltar</a>
                </div>
            <!--</div>-->
        </div>
    </div>
    <footer></footer>
</body>
</html>