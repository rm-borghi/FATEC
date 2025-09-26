<?php
if(isset($_POST['btnEnvCon'])){
    include $cadConsulta;   
}
?>

<div class="all_form">
    <header class="header">
        <h2>Cadastro de Consulta</h2>
    </header>
    <form class="frm_2" method="post" action="#"> 
        <div class="frm_prim">
            <div class="dds_pri"> 
                <span class="tit">Dados Agendamento</span>
                <div class="dds">
                    <div class="inp_dds">
                        <label>*Nome Paciente</label>
                        <select name ="cod_pac">
                            <?php  
                                $pac = mysqli_query($conn, $sql_select_all_paciente); 
                                while($row_pac = mysqli_fetch_array($pac)) {?>                    
                                <option name="opt_pac" value = "<?php echo $row_pac['idPac'];?>"> 
                                    <?php echo $row_pac['pacNome'] ?> 
                                </option>
                            <?php }?>
                        </select>
                    </div> 

                    <div class="inp_dds">
                        <label>*Nome Psicologo</label>
                        <select name ="cod_psic">
                            <?php  
                                $psc = mysqli_query($conn, $sql_select_all_psicologo); 
                                while($row_psc = mysqli_fetch_array($psc)) {?>                    
                                <option name="opt_psc" value = "<?php echo $row_psc['idPsc'];?>"> 
                                    <?php echo $row_psc['pscNome'] ?> 
                                </option>
                            <?php }?>
                        </select>
                    </div> 

                    <div class="inp_dds">
                        <label>*Data Consulta</label>
                        <input type="date" name="cons_dta" required> 
                    </div>
                </div>

                <div class="dds">                            

                    <div class="inp_dds">
                        <label>*Hora Inicio Consulta</label>
                        <select id="horaInicio" name="consHraIni" required>
                            <optgroup label="08:00 - 11:00">
                                <option value="08:00">08:00</option>
                                <option value="09:00">09:00</option>
                                <option value="10:00">10:00</option>
                                <option value="11:00">11:00</option>
                            </optgroup>
                            <optgroup label="14:00 - 17:00">
                                <option value="14:00">14:00</option>
                                <option value="15:00">15:00</option>
                                <option value="16:00">16:00</option>
                                <option value="17:00">17:00</option>
                            </optgroup>
                        </select> 
                    </div>

                    <div class="inp_dds">
                        <label>*Tempo da Consulta</label>
                        <select id="tempoCons" name="consTempo" required>
                            <option value="01:00">01:00</option>
                            <option value="02:00">02:00</option>
                        </select> 
                    </div>

                </div>
            </div>
        </div>

            <div class="cntner_btn">
                <button type="submit" class="btn_env" name='btnEnvCon'>Enviar</button>
            </div>
    </form>
</div>