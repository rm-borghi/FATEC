<?php

//cadastra dados contato
$sql_insert_novo_ctt = 'INSERT INTO tb_contatos (cttFixo,cttCel, cttEmail, cttDtaHraCad, cttUserCad)
	                        VALUES (?, ?, ?, ?, ?);';

//cadastra novo endereço
$sql_insert_novo_end = 'INSERT INTO tb_endereco (endLogradouro, endNumero, endBairro, endCidade, endCep, endUF, endComplemento,endDtaHraCad, endUserCad)
                            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?);';

//vincula dados de contato com dados de endereço
$sql_insert_novo_lt_ctt_end = 'INSERT INTO lt_ctt_end (ce_fk_idCtt, ce_fk_idEnd)
                                    VALUES (?, ?);';

//cadastra novo psicologo
$sql_insert_novo_psc = 'INSERT INTO tb_psicologo (pscRegistro, pscNome, pscRegistroValidade, pscEspecializacao, pscDtaCad, pscUserCad, pscLogUser, pscLogPwd, ps_fk_IdCttEnd)
                            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?);';

//cadastra novo paciente
$sql_insert_novo_pac = 'INSERT INTO tb_pacientes (pacNome, pacCpf, pacDtaNac, pacDtaHraCad, pacUserCad, pacLogUser, pacLogPwd, pc_fk_idCttEnd)
                            VALUES (?, ?, ?, ?, ?, ?, ?, ?);';

//cadastra nova consulta
$sql_insert_nova_cons = 'INSERT INTO tb_consultas (conDtaHraIn,conDtaHraFim,conUserCad,cs_fk_idPac,cs_fk_idPsc)
                            VALUES (?, ?, ?, ?, ?);'; 
                            
//cadastra novo sentimento
$sql_insert_novo_sent = 'INSERT INTO tb_humordia (hmrSituacao, hmrDescricao, hmrDtaHraCad,hmrJson,hu_fk_idPac) 
                            VALUES (?,?,?,?,?)';

//cadastra novo anexo
$sql_insert_novo_anexo = 'INSERT INTO TB_Anexos (anxCaminho, anxDescricao,anxDtaHra, anxFormato,axfk_idPac) 
                            VALUES (?,?,?,?,?)';
                            
?>