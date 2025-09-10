<?php
$dta = date('Y-m-d H:i:s');
//usada a mesma função de CPF para não duplicar função que faz a mesma coisa
$q_sql = sql_ver_cpf($conn,$sql_select_registro,val_var($_POST['psc_rgt']));

if($q_sql != 0){
    echo "<h1>Já existe este Cadastro</h1>";
}else{
    //chama função de cadastro de contato e endereço
    $ins_ctt_end = cad_ctt_end(
        $conn,
        $sql_insert_novo_end, //sql insert endereço
        $sql_insert_novo_ctt, //sql insert contato
        $sql_insert_novo_lt_ctt_end , //sql insert lt_ctt_end
        $sql_select_maxid_ctt, //sql maxId contato
        $sql_select_maxid_end, //sql maxId endereço
        $sql_select_maxid_lt_ctt_end, //sql maxId lt_ctt_end
        $dta,
        val_var($_SESSION['user']),
        val_var($_POST['end_log']),
        val_var($_POST['end_num']),
        val_var($_POST['end_bairro']),
        val_var($_POST['end_cidade']),
        val_var($_POST['end_cep']),
        val_var($_POST['end_uf']),
        val_var($_POST['end_compl']),
        val_var($_POST['ctt_fixo']),
        val_var($_POST['ctt_cel']),
        val_var($_POST['ctt_email'])
    );

    //criptografa a senha com o uso de metodo PHP 
    $senha_crip = password_hash(val_var($_POST['psc_pwd_sys']),PASSWORD_DEFAULT);

    //chama função de cadastro de novo psicologo a atribui ao indice de Contato e endereço
    $ins_nov_psc = cad_nov_psc(
        $conn,
        $sql_insert_novo_psc,
        $sql_select_maxid_psc,
        val_var($_POST['psc_rgt']),
        val_var($_POST['psc_nome']),
        val_var($_POST['psc_rgt_val']),
        val_var($_POST['psc_espec']),
        $dta,
        $_SESSION['user'],
        val_var($_POST['psc_sys_user']),
        $senha_crip,
        $ins_ctt_end
    );
    
    echo '<h1>Sucesso Inclusão: '.$ins_nov_psc.'</h1>';
        
}
?>