<?php
$dta = date('Y-m-d H:i:s');

//condicionamento de váriaveis necessárias
$dta = val_var($_POST['cons_dta']);
$hrs_ini = val_var($_POST['consHraIni']);
$consTempo = date('H:i:s',strtotime($_POST['consTempo']));

$dtaHraIni = $dta.' '. $hrs_ini;

//criar o tempo final da consulta
$datetimeIni = new DateTime($dtaHraIni);
list($h, $m, $s) = explode(':', $consTempo);
$interval = new DateInterval("PT{$h}H{$m}M{$s}S");
$datetimeIni->add($interval);
$dta_fim = $datetimeIni->format('Y-m-d H:i:s');

$pac = val_var($_POST['cod_pac']);
$psc = val_var($_POST['cod_psic']); 

//verifica se no mesmo dia e hora o psicologo já tem agendamento
$q_sql = sql_ver_cons($conn,$sql_select_consulta,$psc,$dtaHraIni);

if($q_sql != 0){
    echo "<h1>Já existe este Cadastro</h1>";
}else{
    //chama função de cadastro de novo agendamento de consulta 
    $nov_cons = cad_nov_con(
        $conn,
        $sql_insert_nova_cons,
        $sql_select_maxid_con,
        $dtaHraIni,
        $dta_fim,
        $_SESSION['user'],
        $pac,
        $psc
    );

    echo '<h1>Sucesso Inclusão: '.$nov_cons.'</h1>';
}
?>