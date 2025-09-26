<?php
$dta = date('Y-m-d H:i:s');
$anxCod = $_SESSION['id'];
$anxDesc = val_var($_POST['detAnex']);

if($_SESSION['usertipo'] == 'pac'){
    $caminhoArq = $anxDiretorio . basename($_FILES['slc_arq']['name']);
    $arqExt = strtolower(pathinfo($caminhoArq, PATHINFO_EXTENSION));
    //inicia a variavel de verificação
    $uploadOk = 1;

    // Verifica o tamanho do arquivo, 2,1 MB máximo
    if ($_FILES['slc_arq']['size'] > 2100000) { 
        echo "<h3>Desculpe, o arquivo é muito grande.</h3>";
        $uploadOk = 0;
    }

    // Permite apenas certos tipos de arquivos, double check 
    $tipos = array('jpg', 'png');
    if (!in_array($arqExt, $tipos)) {
        echo "<h3>Desculpe, apenas arquivos JPG e PNG são permitidos.</h3>";
        $uploadOk = 0;
    }

    // Verifica final e uploads
    if ($uploadOk == 0) {
        echo "<h3>Desculpe, seu arquivo não foi enviado.</h3>";
    } else {
        // Tenta fazer o upload do arquivo
        if (move_uploaded_file($_FILES['slc_arq']['tmp_name'], $caminhoArq)) {
            echo "<h3>O arquivo " . htmlspecialchars(basename($_FILES['slc_arq']['name'])) 
                . " foi enviado com sucesso.</h3>";
            //inclui no banco a operação de registro do anexo
            //usado a função de sentimento por ter mesma qtdade de parâmetro
            $anxInsert = reg_humr_dia($conn,$sql_insert_novo_anexo,$caminhoArq,$anxDesc,$dta,$arqExt,$anxCod);
            echo '<h3>'.$anxInsert.' para o banco</h3>';
            echo '<h3>'.$arqExt.'</h3>';
        } else {
            echo "Desculpe, houve um erro ao enviar seu arquivo.";
        }
    }
}else{
    echo '<h3>Somente Pacientes podem anexar documentos!</h3>';
}


?>