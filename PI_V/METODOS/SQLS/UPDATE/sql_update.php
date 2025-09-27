<?php
//atualização da informação para Consulta
$sql_update_det_cons_psc = 'UPDATE `tb_consultas` 
                        SET `conResumo` = ?, 
                            `conDetalhe` = ?, 
                            `conFeedPscPac` = ?,
                            `conDtaHraReg` = ?,
                            `conStsLan` = ? 
                        WHERE (`idCons` = ?);';
$sql_update_det_cons_pac = 'UPDATE `tb_consultas` 
                             SET `conFeedPacPSc` = ?
                            WHERE (`idCons` = ?);';

?>