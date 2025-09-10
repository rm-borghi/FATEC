<?php
$dta = date('Y-m-d H:i:s');
$q_sql = sql_ver_cpf($conn,$sql_select_cpf,val_var($_POST['pac_cpf']));

if($q_sql != 0){
    echo "<H1>Já existe este Cadastro</H1>";
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
    $senha_crip = password_hash(val_var($_POST['pac_pwd_sys']),PASSWORD_DEFAULT);

    //chama função de cadastro de novo paciente a atribui ao indice de Contato e endereço
    $ins_nov_pac = cad_nov_pac(
        $conn,
        $sql_insert_novo_pac,
        $sql_select_maxid_pac,
        val_var($_POST['pac_nome']),
        val_var($_POST['pac_cpf']),
        val_var($_POST['pac_dta_nasc']),
        $dta,
        $_SESSION['user'],
        val_var($_POST['pac_sys_user']),
        $senha_crip,
        $ins_ctt_end
    );
    
    echo '<h1>Sucesso Inclusão: '.$ins_nov_pac.'</h1>';
        
}
?>