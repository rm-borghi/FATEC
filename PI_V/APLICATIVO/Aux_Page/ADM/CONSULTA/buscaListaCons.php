<?php
$cod_lgd = $_SESSION['id'];//sql para localizar o codigo do psic logado
try {
    $retorno = sql_busca_cons(
        $conn,
        $sql_select_lista_cons_psc,
        $sql_select_lista_cons_root,
        $sql_select_lista_cons_pac,
        $cod_lgd,
        $_SESSION['usertipo'] // sql para retorno da listagem
    );

    if (!$retorno) {
        throw new Exception("Erro na execução da consulta SQL.");
    }

    $ret_lin = $retorno->num_rows; // qtd de linhas
} catch (Exception $e) {
    // Exibe ou registra o erro
    echo "Ocorreu um erro ao buscar os dados: " . $e->getMessage();
    // Você pode também usar error_log($e->getMessage()); para registrar
}

if($ret_lin > 0){
    echo '<h3>Vermelho = não registrado; Verde = Registrado (melhorar depois)</h3>';
    echo '<div class="cnt_card_sessao">';
    while ($row = $retorno->fetch_assoc()){
        //saber se o card está registrado ou não, identificação por cor
        if ($row['Registrado?'] == 1) {
            echo '<div class="card_sessao_gre">';
        }else{
            echo '<div class="card_sessao_red">';
        }
            //lançar os campos dentro do card
            echo "<input type='radio' name='slcCon' required value='"
                .val_var($row['id'])."'>"; 
            echo "<p>Data: ".$row['Data Inicio']."</p>";
            echo "<p>Resumo: ".$row['Resumo']."</p>";
            //para cada tipo de acesso uma informação é mostrada
            if($_SESSION['usertipo']=='psc'){
                echo "<p>Paciente: ".$row['Paciente']."</p>";
            }elseif ($_SESSION['usertipo']=='pac'){
                echo "<p>Psicologo: ".$row['Psicologo']."</p>";
            }else{
                echo "<p>Paciente: ".$row['Paciente']."</p>";
                echo "<p>Psicologo: ".$row['Psicologo']."</p>";
            }
        echo '</div>';
    }
    echo '</div>';    
}else {
    echo '<h3>Sem resultados para a pesquisa</h3>';  
}
?>
