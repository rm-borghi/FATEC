<?php
//chama função de localizar a partir da seleção do tipo de pesquisa
if (strtoupper(val_var($_POST['nome_bus'])) === 'TODOS'){
    //reaproveitada função com mesmo parâmetro de entrada
    $retorno = sql_busc_list_sent(
        $conn,
        $sql_select_bsc_nome_parc_sent,
        '%%',
    );
    $ret_lin = $retorno ->num_rows; 
}else{
    //reaproveitada função com mesmo parâmetro de entrada
    $retorno = sql_busc_list_sent(
        $conn,
        $sql_select_bsc_nome_parc_sent,
        '%'.$_POST['nome_bus'].'%'
    );
    $ret_lin = $retorno ->num_rows; 
}

if($ret_lin > 0){
    echo '<div class="cnt_card_sent">';
    while ($row = $retorno->fetch_assoc()){
        //saber se o sentimento é positivo ou negativo pelo Json no banco
        $json_data = json_decode($row['DdsJson'], true);
        $caminho = isset($json_data['caminho']) ? $json_data['caminho'] : '';
        $humor = isset($json_data['humor']) ? $json_data['humor'] : '';
        $sts_sen = isset($json_data['tipo']) ? $json_data['tipo'] : '';
        if ($sts_sen == 'negativo') {
            echo '<div class="card_sent_red">';
        }else{
            echo '<div class="card_sent_gre">';
        }
            echo '<div class="card">';
                echo '<img class="img_sent_tab" src="'.$caminho.'"
                    title="'.$row['Descricao'].'">';
            echo '</div>';
            echo '<div class="card">';
                echo "<p>Cadastro: ".$row['DataCad']."</p>";
                echo "<p>Paciente: ".$row['Nome']."</p>";
                echo "<p>Sentimento: ".$humor."</p>";
            echo '</div>';
        echo '</div>';
    }
    echo '</div>';
}else {
    echo '<h3>Sem resultados para a pesquisa</h3>';  
}

?>