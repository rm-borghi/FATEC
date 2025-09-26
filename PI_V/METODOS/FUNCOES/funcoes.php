<?php

//function para conectar e dar fetch no id
function sql_fetch($conn,$sql){
    $a = mysqli_query($conn,$sql);
    $b = mysqli_fetch_all($a, MYSQLI_ASSOC);
    $a->close();
    return $b;
}

//function para conectar e dar fetch no id
function sql_fetch_param_txt($conn,$sql,$par){
    $n_sql = $conn->prepare($sql);
    $n_sql -> bind_param("s",$par);
    if($n_sql->execute()){
        $rid = sql_fetch($conn,$n_sql);
        $id = $rid[0];
        return $id;
    }else{
        return "".$n_sql->error;
    }
}

//function para verificar se já há CPF
function sql_ver_cpf($conn,$sql,$par){
    $v_sql = $conn->prepare($sql);
    $v_sql -> bind_param("s",$par);
    $v_sql -> execute();
    $q_sql = $v_sql->get_result();
    $val = $q_sql->num_rows;
    mysqli_free_result($q_sql);
    return $val;
}

//Função para retornar um json e insert no banco para a tabela de Humor
function dds_json($cam,$hum){
            $data = '{"caminho":"'.$cam.'","humor":"'.$hum.'"}';
            $ddo_json = json_decode($data);
            return $data;
}

//function para buscar a lista de agendamentos do psicologo
function sql_busca_cons($conn,$sql_psc,$sql_root,$sql_pac,$par,$tpac){
    switch ($tpac) {
        case 'root':
                $v_sql = $conn->query($sql_root);
                return $v_sql;
            break;
        case 'psc':
                $v_sql = $conn->prepare($sql_psc);
                $v_sql -> bind_param("s",$par);
                if($v_sql -> execute()){
                    $q_sql = $v_sql->get_result();
                    return $q_sql; 
                }else{
                    return "".$v_sql->error;
                }
            break;
        case 'pac':
                $v_sql = $conn->prepare($sql_pac);
                $v_sql -> bind_param("s",$par);
                if($v_sql -> execute()){
                    $q_sql = $v_sql->get_result();
                    return $q_sql; 
                }else{
                    return "".$v_sql->error;
                }
            break;
        
        default:
            # code...
            break;
    }

}

//function para buscar lista de sentimentos
function sql_busc_list_sent($conn,$sql,$par){
    $v_sql = $conn->prepare($sql);
    $v_sql -> bind_param("s",$par);
    $v_sql -> execute();
    $q_sql = $v_sql->get_result();
    return $q_sql;
}

//function para verificar se já há consulta para o psicologo na data e horário
//finalizar
function sql_ver_cons($conn,$sql,$par1,$par2){
    $v_sql = $conn->prepare($sql);
    $v_sql -> bind_param("is",$par1,$par2);
    $v_sql -> execute();
    $q_sql = $v_sql->get_result();
    $val = $q_sql->num_rows;
    mysqli_free_result($q_sql);
    return $val;
}

//function para localizar parte de registro de acordo com parâmetro
function sql_loc_parcial($conn,$sql,$op,$par){
    $v_sql = $conn->prepare($sql);
    if($op == 'telefone'){
        $v_sql -> bind_param("ss",$par,$par);
    }else{
        $v_sql -> bind_param("s",$par);
    }
    #Fetch para retornar a tabela de dados
    if($v_sql->execute()){
        $dds = $v_sql -> get_result();
        return $dds ;
    }else{
        return "".$v_sql->error;
    }        
}

//function para validar a variavel contra XSS
function val_var($var){
    $valida = htmlspecialchars($var,ENT_QUOTES,'UTF-8');
    return $valida;
}

//function para saber o maior id da tabela
function max_id($resultado){
    foreach($resultado[0] as $var){
        if($var == 0){
             $max_id = 1;
        }else{
             $max_id = $var;
        }
    }
    return $max_id;
}

//função para validar sessão
function val_session ($user,$end){
    if(is_null($user)){
        return header('Location: '.$end);
    }
}

//função para validar qual dado aparece no menu
function val_dds($cod){

    switch ($cod) {
        //menus com código 100 estão no navBarPrinc.php

        //menu do paciente códigos 200
        case '201':
            //opção de atualização de cadastro paciente            
            $dds = './ADM/PACIENTE/ddsUpdtPac.php';
            break;
        case '202':
            //opção de ver consultas já realizadas
            $dds = './ADM/PACIENTE/ddsSesPac.php';
            break;
        case '203':
            //opção de sentimento de paciente
            $dds = './ADM/PACIENTE/ddsSentPac.php';
            break;
        case '204':
            //opção de envio de anexo
            $dds = './ADM/PACIENTE/ddsCadAnx.php';
            break;            
        case '205':
            //
            $dds = null;
            break;

        //menu do pscólogo & Root códigos 300
        case '301':
            //opção de cadastro novo psicologo
            $dds = './ADM/PSICOLOGO/ddsCadPsc.php';
            break;
        case '302':
            ///opção de cadastro novo paciente
            $dds = './ADM/PACIENTE/ddsCadPac.php';
            break;
        case '303':
            //opção de agendamentos do piscologo
            $dds = './ADM/PSICOLOGO/ddsAgnPsc.php';
            break;
        case '304':
            //opção de sessão
            $dds = './ADM/CONSULTA/ddsCadSes.php';
            break;
        case '305':
            //opção de Consulta
            $dds = './ADM/CONSULTA/ddsCadCon.php';
        break;
        case '306':
            //acompanhamento de Sentimentos
            $dds = './ADM/PACIENTE/ddsSentList.php';
        break;
        case '307':
            //localizar Paciente
            $dds = './ADM/PACIENTE/ddsDetPac.php';
        break;
        case '308':
            //localizar anexos
            $dds = './ADM/PACIENTE/ddsBusAnex.php';
        break;
        
        default:
            $dds = null;
            break;
    };
    return $dds;
}

//function para cadastrar endereço e contato
function cad_ctt_end(
                    $conn,
                    $sql_end, //sql insert endereço
                    $sql_ctt, //sql insert contato
                    $sql_cttend, //sql insert lt_ctt_end
                    $sql_cmid, //sql maxId contato
                    $sql_emid, //sql maxId endereço
                    $lt_ce_mid, //sql maxId lt_ctt_end
                    $dta,$usr, //dados dta hra e usuario
                    $el,$en,$eb,$ec,$ece,$euf,$ecom, //dados de endereço
                    $cf,$cc,$ce // dados de contato
                    )
{
    //prepara as conexões
    $n_end = $conn->prepare($sql_end);
    $n_ctt = $conn->prepare($sql_ctt);
    $n_ctt_end = $conn->prepare($sql_cttend);
    //atribui parametros
    $n_end->bind_param("sississss",$el,$en,$eb,$ec,$ece,$euf,$ecom,$dta,$usr);
    $n_ctt->bind_param("iisss",$cf,$cc,$ce,$dta,$usr);
    //valida insert e coleta ids
    if($n_end->execute() && $n_ctt->execute()){
        //se passou então pegar os indices e juntar na lt_ctt_end
            //para Contatos
            $res_ctt = sql_fetch($conn,$sql_cmid);
            $id_ctt = max_id($res_ctt);
            //para endereço
            $res_end = sql_fetch($conn,$sql_emid);
            $id_end = max_id($res_end);
            //tendo os valores de id associar na lt_ctt_end
            $n_ctt_end->bind_param("ii",$id_end,$id_ctt);
            //valida insert e coleta id
            if($n_ctt_end->execute()){;
                //pegar o id da lt_ctt_end deste aluno
                $res_ce = sql_fetch($conn,$lt_ce_mid);
                $id_ce = max_id($res_ce);
            }else{
                echo 'Erro SQL! '.$n_ctt_end->error;
            }   
    }else{
        echo 'Erro Geral SQL '.$n_end->error.' & '.$n_ctt->error;
    }

    $n_end->close();
    $n_ctt->close();
    $n_ctt_end->close();
    
    return $id_ce;
}

//function para cadastrar paciente
function cad_nov_pac(
                    $conn,
                    $sql_pac, //sql insert paciente
                    $sql_pmid, //sql max id paciente
                    $pacNome,$pacCpf,$pacDtaNac, //dados de paciente
                    $dta,
                    $usr,
                    $pacLogUser,$pacLogPwd,$pc_fk_idCttEnd //dados de paciente
                    )
{
    //prepara as conexões
    $n_end = $conn->prepare($sql_pac);
    //atribui parametros
    $n_end->bind_param("sssssssi",$pacNome,$pacCpf,$pacDtaNac,$dta,$usr,$pacLogUser,$pacLogPwd,$pc_fk_idCttEnd);
    //valida insert e coleta ids
    if($n_end->execute()){
        //se passou então pegar os indices e juntar na lt_ctt_end
        //para Contatos
        $res_ctt = sql_fetch($conn,$sql_pmid);
        $id_ctt = max_id($res_ctt); 
    }else{
        echo 'Erro Geral SQL '.$n_end->error;
    }

    $n_end->close();
    
    return $id_ctt;
}

//function para cadastrar novo pscologo
function cad_nov_psc(
                    $conn,
                    $sql_psc, //sql insert pscologo
                    $sql_pmid, //sql max id psicologo
                    $pscRgt,$pscNome,$pscRgtVal,$pscEspc, //dados de psicologo
                    $dta,
                    $usr,
                    $pscLogUser,$pscLogPwd,$ps_fk_idCttEnd //dados de psicologo
                    )
                {
    //prepara as conexões
    $n_end = $conn->prepare($sql_psc);
    //atribui parametros
    $n_end->bind_param("isssssssi",$pscRgt,$pscNome,$pscRgtVal,$pscEspc,$dta,$usr,$pscLogUser,$pscLogPwd,$ps_fk_idCttEnd);
    //valida insert e coleta ids
    if($n_end->execute()){
        //se passou então pegar os indices e juntar na lt_ctt_end
        $res_ctt = sql_fetch($conn,$sql_pmid);
        $id_ctt = max_id($res_ctt); 
    }else{
    echo 'Erro Geral SQL '.$n_end->error;
    }

    $n_end->close();

    return $id_ctt;
}

//function para cadastrar nova consulta
function cad_nov_con(
    $conn,
    $sql_ins,
    $sql_mcons,
    $dthIni,
    $dtaFim,
    $usr,
    $pac,
    $psc
    )
{
    //prepara as conexões
    $n_end = $conn->prepare($sql_ins);
    //atribui parametros
    $n_end->bind_param("sssii",$dthIni,$dtaFim,$usr,$pac,$psc);
    //valida insert e coleta ids
    if($n_end->execute()){
        //se passou então pegar os indice
        $ids = sql_fetch($conn,$sql_mcons);
        $id_con = max_id($ids); 
    }else{
        echo 'Erro Geral SQL '.$n_end->error;
    }

    $n_end->close();

    return $id_con;
}

//function registrar as informações da Consulta
function reg_cons_ses(
    $conn,
    $sql_upd,
    $res,
    $det,
    $fdb,
    $dta,
    $sts,
    $cod
     )
{
    //prepara as conexões
    $n_end = $conn->prepare($sql_upd);
    //atribui parametros
    $n_end->bind_param("ssssss",$res,$det,$fdb,$dta,$sts,$cod);
    //valida insert e coleta ids
    if($n_end->execute()){
        //se passou 
        $msg = 'Sucesso!'; 
        $n_end->close();
        return $msg;
    }else{
        $n_end->close();
        $msg = 'Erro Geral SQL '.$n_end->error;
        return $msg;
    }
   
}

//function registrar as informações do humor
function reg_humr_dia(
    $conn,
    $sql,
    $cam,
    $desc,
    $dta,
    $txt,
    $usr
     )
{
    //prepara as conexões
    $n_end = $conn->prepare($sql);
    //atribui parametros
    $n_end->bind_param("ssssi",$cam,$desc,$dta,$txt,$usr);
    //valida insert e coleta ids
    if($n_end->execute()){
        //se passou 
        $msg = 'Sucesso!'; 
        $n_end->close();
        return $msg;
    }else{
        $n_end->close();
        $msg = 'Erro Geral SQL '.$n_end->error;
        return $msg;
    }
   
}



?>