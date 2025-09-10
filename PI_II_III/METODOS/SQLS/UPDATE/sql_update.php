<?php
//atualização da informação para Consulta
$sql_update_det_cons_psc = 'UPDATE `pi_ii_iii`.`tb_consultas` 
                        SET `conResumo` = ?, 
                            `conDetalhe` = ?, 
                            `conFeedPscPac` = ?,
                            `conDtaHraReg` = ?,
                            `conStsLan` = ? 
                        WHERE (`idCons` = ?);';
$sql_update_det_cons_pac = 'UPDATE `pi_ii_iii`.`tb_consultas` 
                             SET `conFeedPacPSc` = ?
                            WHERE (`idCons` = ?);';

?>