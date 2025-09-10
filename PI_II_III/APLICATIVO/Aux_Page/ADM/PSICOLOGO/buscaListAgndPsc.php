<?php
//$retorno = '';
$ret_lin = 0; 
#constroi a tabela associativa de acordo com cada consulta por pesquisa

$psc = $_SESSION['id'];

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
    echo '<h3>Verificar o que será dessa pagina, confusão com a "Sessão"</h3>';
}
?>