<?php
//gera lista de user e senhas
$sql_select_list_user_pwd_2 = 'SELECT 1 as Id,rtUser as User, rtPwd as Pwd, "root" as Nome,"root" as UserTipo FROM TB_Root WHERE rtUser = ?';

# Ajustar para nova versão do MySQL que está no banco de dados, não funfa com WITH()
$sql_select_list_user_pwd_1 = 'WITH tb as (SELECT idPsc as Id,pscLogUser as User, pscLogPwd as Pwd, pscNome as Nome,"psc" as UserTipo FROM tb_psicologo 
                                        UNION 
                                        SELECT idPac as Id,pacLogUser as User, pacLogPwd as Pwd, pacNome as Nome,"pac" as UserTipo FROM tb_pacientes
                                        UNION
                                        SELECT 1 as Id,rtUser as User, rtPwd as Pwd, "root" as Nome,"root" as UserTipo FROM TB_Root) 
                            SELECT Id, User, Pwd, Nome, UserTipo FROM tb WHERE tb.User = ?;';
# formato subqueries versão do mysql que não aceita WITH()
$sql_select_list_user_pwd = 'SELECT Id, User, Pwd, Nome, UserTipo
                            FROM (
                                SELECT idPsc AS Id, pscLogUser AS User, pscLogPwd AS Pwd, pscNome AS Nome, "psc" AS UserTipo
                                FROM tb_psicologo
                                UNION
                                SELECT idPac AS Id, pacLogUser AS User, pacLogPwd AS Pwd, pacNome AS Nome, "pac" AS UserTipo
                                FROM tb_pacientes
                                UNION
                                SELECT 1 AS Id, rtUser AS User, rtPwd AS Pwd, "root" AS Nome, "root" AS UserTipo
                                FROM TB_Root
                            ) AS tb
                            WHERE tb.User = ?;';

//busca toda a tabela pacientes
$sql_select_all_paciente = 'SELECT * FROM tb_pacientes;';

//select para localizar dados do paciente 
$sql_select_dds_paciente = 'SELECT
                                pac.pacNome,
                                pac.pacCpf,
                                pac.pacDtaNac,
                                pac.pacLogUser,
                                ed.endCep,
                                ed.endLogradouro,
                                ed.endNumero,
                                ed.endBairro,
                                ed.endComplemento,
                                ed.endCidade,
                                ed.endUF,
                                ctt.cttFixo,
                                ctt.cttCel,
                                ctt.cttEmail
                            FROM tb_pacientes pac
                                LEFT JOIN lt_ctt_end lt
                                    ON lt.idCttEnd = pac.pc_fk_idCttEnd
                                LEFT JOIN tb_contatos ctt
                                    ON ctt.idCtt = lt.ce_fk_idCtt
                                LEFT JOIN tb_endereco ed
                                    ON ed.idEnd = lt.ce_fk_idEnd
                            WHERE pac.idPac = ?;';

//busca todos os pacientes
$sql_select_all_dist_pac = 'SELECT DISTINCT pacId, pacNome FROM tb_pacientes;';

//busca toda a tabela psicologo
$sql_select_all_psicologo = 'SELECT * FROM tb_psicologo;';

//seleciona cidades *rever já que gera duplicatas devido ao idEnd
$sql_select_all_cidade_1 = 'WITH tb as (SELECT DISTINCT endCidade FROM tb_endereco)
                            SELECT
                                endCidade as Lst,
                                rank() over(order by endCidade) as Rnk
                            FROM tb;';
# versão sem WITH, e sem rank() over que não é suportado na versão do mysql do servidor
$sql_select_all_cidade = 'SELECT 
                                endCidade AS Lst,
                                @rank := @rank + 1 AS Rnk
                            FROM (
                                SELECT DISTINCT endCidade
                                FROM tb_endereco
                                ORDER BY endCidade
                            ) AS tb, (SELECT @rank := 0) AS r;';

//seleciona o último cadastro na paciente
$sql_select_maxid_pac = 'SELECT max(idPac) as maxId FROM tb_pacientes;';

//seleciona o último cadastro na psicologo
$sql_select_maxid_psc = 'SELECT max(idPsc) as maxId FROM tb_psicologo;';

//seleciona o último cadastro na contatos
$sql_select_maxid_ctt = 'SELECT max(idCtt) as maxId FROM tb_contatos;';

//seleciona o último cadastro na consultas
$sql_select_maxid_con = 'SELECT max(idCons) as maxId FROM tb_consultas;';

//seleciona o último cadastro na endereço
$sql_select_maxid_end = 'SELECT max(idEnd) as maxId FROM tb_endereco;';

//seleciona o último cadastro na contatos
$sql_select_maxid_lt_ctt_end = 'SELECT max(idCttEnd) as maxId FROM lt_ctt_end;';

//verifica se CPF já consta em base de dados
$sql_select_cpf = 'SELECT pacCpf FROM tb_pacientes WHERE pacCpf = ?;';

//verifica se Registro já consta em base de dados
$sql_select_registro = 'SELECT pscRegistro FROM tb_psicologo WHERE pscRegistro = ?;';

//busca lista de dados de Consulta caso seja psc
$sql_select_lista_cons_psc = 'SELECT 
                                cons.idCons as id,
                                cons.conDtaHraIn as "Data Inicio",
                                cons.conResumo as "Resumo",
                                cons.conStsLan as "Registrado?",
                                pac.pacNome as "Paciente",
                                cons.conFeedPacPsc as "FeedBack"
                            FROM tb_consultas cons
                                LEFT JOIN tb_pacientes pac
                                    ON pac.idPac = cons.cs_fk_idPac
                            WHERE cons.cs_fk_idPsc = ?;';

//busca lista de dados de Consulta caso seja pac
$sql_select_lista_cons_pac = 'SELECT 
                                cons.idCons as id,
                                cons.conDtaHraIn as "Data Inicio",
                                cons.conResumo as "Resumo",
                                cons.conStsLan as "Registrado?",
                                psc.pscNome as "Psicologo",
                                cons.conFeedPscPac as "FeedBack"
                            FROM tb_consultas cons
                                LEFT JOIN tb_psicologo psc
                                    ON psc.idPsc = cons.cs_fk_idPsc
                            WHERE cons.cs_fk_idPsc = ?;';

//busca lista de dados de Consulta caso seja root
$sql_select_lista_cons_root = 'SELECT 
                                    cons.idCons as id,
                                    cons.conDtaHraIn as "Data Inicio",
                                    cons.conDtaHraFim as "Data Fim",
                                    cons.conResumo as "Resumo",
                                    cons.conStsLan as "Registrado?",
                                    pac.pacNome as "Paciente",
                                    cons.conFeedPacPsc as "Feed Pac",
                                    psc.pscNome as "Psicologo",
                                    cons.conFeedPscPac as "Feed Psc"
                               FROM tb_consultas cons
                               LEFT JOIN tb_pacientes pac
                                   ON pac.idPac = cons.cs_fk_idPac
                               LEFT JOIN tb_psicologo psc
                                   ON psc.idPsc = cons.cs_fk_idPsc;';

//verifica se tem consulta na data e hora para o Psicologo
$sql_select_consulta = 'SELECT idCons FROM tb_consultas WHERE cs_fk_idPsc = ? AND conDtaHraIn = ?;';

//busca de pacientes seleção de qualquer registro com pelo menos uma parte do texto
$sql_select_busca_parcial_pac_cpf = 'SELECT 
                                        idPac as Id,
                                        pacNome as Nome,
                                        pacCpf as CPF,
                                        pacDtaNac as Nascimento
                                    FROM tb_pacientes 
                                    WHERE pacCpf LIKE ?;';
$sql_select_busca_parcial_pac_nome = 'SELECT 
                                        idPac as Id,
                                        pacNome as Nome,
                                        pacCpf as CPF,
                                        pacDtaNac as Nascimento
                                      FROM tb_pacientes 
                                      WHERE pacNome LIKE ?;';
$sql_select_busca_parcial_end_cid = 'SELECT 
                                        pac.idPac as Id,
                                        pac.pacNome as Nome,
                                        pac.pacDtaNac as Nascimento,
                                        pac.pacDtaHraCad as Cadastro,
                                        ende.endLogradouro as Logradouro,
                                        ende.endBairro as Bairro,
                                        ende.endCidade as Cidade,
                                        ende.endCep as CEP
                                    FROM tb_pacientes pac
                                        LEFT JOIN lt_ctt_end cod_end
                                            ON pac.pc_fk_idCttEnd = cod_end.idCttEnd
                                        LEFT JOIN tb_endereco ende
                                            ON cod_end.ce_fk_idEnd = ende.idEnd
                                    WHERE ende.endCidade like ?;';
$sql_select_busca_parcial_end_cep = 'SELECT 
                                        pac.idPac as Id,
                                        pac.pacNome as Nome,
                                        pac.pacDtaNac as Nascimento,
                                        pac.pacDtaHraCad as Cadastro,
                                        ende.endLogradouro as Logradouro,
                                        ende.endBairro as Bairro,
                                        ende.endCidade as Cidade,
                                        ende.endCep as CEP
                                    FROM tb_pacientes pac
                                        LEFT JOIN lt_ctt_end cod_end
                                            ON pac.pc_fk_idCttEnd = cod_end.idCttEnd
                                        LEFT JOIN tb_endereco ende
                                            ON cod_end.ce_fk_idEnd = ende.idEnd
                                    WHERE ende.endCep like ?;';
$sql_select_busca_parcial_pac_telef = 'SELECT 
                                            pac.idPac as Id,
                                            pac.pacNome as Nome,
                                            pac.pacDtaNac as Nascimento,
                                            pac.pacDtaHraCad as Cadastro,
                                            ctt.cttFixo as Fixo,
                                            ctt.cttCel as Celular,
                                            ctt.cttEmail as Email    
                                        FROM tb_pacientes pac
                                            LEFT JOIN lt_ctt_end cod_ctt
                                                ON pac.pc_fk_idCttEnd = cod_ctt.idCttEnd
                                            LEFT JOIN tb_contatos ctt
                                                ON cod_ctt.ce_fk_idCtt = ctt.idCtt
                                        WHERE ctt.cttFixo like ? OR ctt.cttCel like ?;';

//select para busca de sentimerntos cadastrados, com nome parcial
$sql_select_bsc_nome_parc_sent = 'SELECT 
                                    hd.idHumor as Id,
                                    pac.pacNome as Nome,
                                    hd.hmrSituacao as Humor,
                                    hd.hmrDescricao as Descricao,
                                    hd.hmrDtaHraCad as DataCad,
                                    hd.hmrJson as DdsJson
                                FROM tb_humordia hd
                                    LEFT JOIN tb_pacientes pac
                                    ON hd.hu_fk_idPac = pac.idPac
                                WHERE pac.pacNome like ?
                                ORDER BY hd.hmrDtaHraCad DESC
                                LIMIT 18';

?>