<?php
//chama função de localizar a partir da seleção do tipo de pesquisa
switch (val_var($_POST['opr'])) {
    case 'cpf':
        $retorno = sql_loc_parcial(
                                $conn,
                                $sql_select_busca_parcial_pac_cpf,
                                $_POST['opr'],
                                '%'.$_POST['valor_bus'].'%'
                            );
        $ret_lin = $retorno ->num_rows;                                
        break;
    case 'nome':
        $retorno = sql_loc_parcial(
                                $conn,
                                $sql_select_busca_parcial_pac_nome,
                                $_POST['opr']
                                ,'%'.$_POST['valor_bus'].'%'
                            );
        $ret_lin = $retorno ->num_rows;  
        break;        
    case 'cidade':
        $retorno = sql_loc_parcial(
                                $conn,
                                $sql_select_busca_parcial_end_cid,
                                $_POST['opr'],
                                '%'.$_POST['valor_bus'].'%'
                            );
        $ret_lin = $retorno ->num_rows;  
        break;
    case 'mes_nasc':
        $retorno = '';
        $ret_lin = 0; #$retorno ->num_rows;  
        break;
    case 'telefone':
        $retorno = sql_loc_parcial(
                                $conn,
                                $sql_select_busca_parcial_pac_telef,
                                $_POST['opr'],
                                '%'.$_POST['valor_bus'].'%'
                            );
        $ret_lin = $retorno ->num_rows;
        break;
    case 'cep':
        $retorno = sql_loc_parcial(
                                $conn,
                                $sql_select_busca_parcial_end_cep,
                                $_POST['opr'],
                                '%'.$_POST['valor_bus'].'%'
                            );
        $ret_lin = $retorno ->num_rows;  
        break;                           
    default:
        # code...
        break;
}

#constroi a tabela associativa de acordo com cada consulta por pesquisa
if($ret_lin > 0){
    while ($row = $retorno->fetch_assoc()){
        $tabela[] = $row;
    }
    #pega as colunas do resultado
    $colunas = array_keys($tabela[0]);
    
    #construindo a tabela no HTML
        #inicio da tabela
        echo "<table> <tr>";

            #cabeçalho da tabela
            echo "<th>#</th>";
            foreach ($colunas as $coluna) {
                echo "<th>".val_var($coluna)."</th>";
            }
            
            echo "</tr>";

            #valores das linhas
            foreach ($retorno as $linha) {
                echo "<tr>";
                    echo "<td><button type='button' class='btn_tab'>
                            <i class='bx bx-dots-horizontal-rounded'></i>
                            </button></td>"; 
                    foreach ($colunas as $coluna) {
                        echo "<td>".val_var($linha[$coluna])."</td>"; 
                    }                                               
                echo "</tr>";
            }
    
        #fim da tabela
        echo "</table>";

}else {
    echo '<h3>Sem resultados para a pesquisa</h3>';  
}
?>