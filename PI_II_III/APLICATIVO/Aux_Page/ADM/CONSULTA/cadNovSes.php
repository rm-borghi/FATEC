<?php
$dta = date('Y-m-d H:i:s');

IF($_SESSION['usertipo'] == 'psc'){
    $resumo = val_var($_POST['res_con']);
    $detalhe = val_var($_POST['cons_det']);
    $codCons = val_var($_POST['slcCon']);
    $feed = val_var($_POST['feed_con']);
    $sts = '1';

    //chama função de cadastro de novo agendamento de consulta 
    $update_cons = reg_cons_ses($conn,$sql_update_det_cons_psc,$resumo,$detalhe,$feed,$dta,$sts,$codCons);

    echo '<h1>Sucesso Registro: '.$update_cons.'</h1>';
}

//Execução mais simples, deixado como código na própria pagina
IF($_SESSION['usertipo'] == 'pac'){
    $feed = val_var($_POST['feed_psc']);
    $codCons = val_var($_POST['slcCon']);
    $sql = $conn->prepare($sql_update_det_cons_pac);
    $sql -> bind_param("ss",$feed,$codCons);
    
    if($sql->execute()){
        echo '<h1>Sucesso Registro.</h1>';
    }else{
        echo '<h1>Insucesso.'.$sql->error.'</h1>';
    }
}

IF($_SESSION['usertipo'] == 'root'){
    echo '<h1>Somente Paciente ou Psicologo podem registrar!</h1>';
}


?>