<?php
if(isset($_POST['btnUpdPac'])){
    #include $cadPaciente;   
}
//usado a função abaixo que requer apenas 1 parâmetro para consulta
$dds_cad = sql_busc_list_sent($conn,$sql_select_dds_paciente,$_SESSION['id']);
$dds_lin = $dds_cad -> num_rows;
$dds = $dds_cad -> fetch_assoc();

?>

<script>
//função para progredir entre um form e outro do paciente
function mostrarHum(){
    const elntos = document.querySelectorAll('.cont_dds');
        elntos.forEach(elnto => {
            elnto.classList.add('oculto');
        });
    document.getElementById('cad_pac_hum').classList.remove('oculto');
};

function mostrarDois(){
    const elntos = document.querySelectorAll('.cont_dds');
        elntos.forEach(elnto => {
            elnto.classList.add('oculto');
        });
    document.getElementById('cad_pac_doi').classList.remove('oculto');
};

function mostrarTres(){
    const elntos = document.querySelectorAll('.cont_dds');
        elntos.forEach(elnto => {
            elnto.classList.add('oculto');
        });
    document.getElementById('cad_pac_tre').classList.remove('oculto');
};

function mostrarQuatro(){
    const elntos = document.querySelectorAll('.cont_dds');
        elntos.forEach(elnto => {
            elnto.classList.add('oculto');
        });
    document.getElementById('cad_pac_qua').classList.remove('oculto');
};
</script>

<div class="all_form">
    <header class="header">
        <h2>Atualização Cadastro de Usuário</h2>
        <span class="tit">Atualização de dados Pessoais. Nova senha não obrigatório.</span>
    </header>
    <form class="frm_2" method="post" action="#"> 
        <div class="frm_prim">
            <div id="cad_pac_hum" class="cont_dds"> 
                <span class="tit">Dados Pessoais</span>
                <div class="dds">
                    <div class="inp_dds">
                        <label>*Nome</label>
                        <input type="text" name="pac_nome" value="<?php echo $dds['pacNome']?>" required>
                    </div> 

                    <div class="inp_dds">
                        <label>*CPF</label>
                        <input type="text" name="pac_cpf" value="<?php echo $dds['pacCpf']?>" required>
                    </div> 

                    <div class="inp_dds">
                        <label>*Data Nascimento</label>
                        <input type="date" name="pac_dta_nasc" value="<?php echo $dds['pacDtaNac']?>" required> 
                    </div>
                </div>
                <div class="cntner_btn">
                    <button type ="button" class="btn_env" onclick="mostrarDois()">Endereço</button>
                </div>  
            </div>
            
            <div id="cad_pac_doi" class="cont_dds oculto"> 
                <span class="tit">Dados Endereço</span>
                <div class="dds">
                    <div class="inp_dds">
                        <label>*CEP</label>             
                        <input type="int" name="end_cep" id = "cep" value="<?php echo $dds['endCep']?>" required>
                    </div> 
                    
                    <div class="inp_dds">    
                        <label>*Logradouro</label> 
                        <input type="text" name="end_log" id = "logradouro" value="<?php echo $dds['endLogradouro']?>" required>
                    </div> 
                    
                    <div class="inp_dds">    
                        <label>*Número</label>             
                        <input type="int" name="end_num" id = "numero" value="<?php echo $dds['endNumero']?>" required> 
                    </div> 
                                        
                    <div class="inp_dds">
                        <label>*Bairro</label>            
                        <input type="text" name="end_bairro" id = "bairro" value="<?php echo $dds['endBairro']?>" required>
                    </div>

                    <div class="inp_dds">
                        <label>Complemento</label> 
                        <input type="text" name="end_compl" id = "complemento" value="<?php echo $dds['endComplemento']?>" >
                    </div> 
                    
                    <div class="inp_dds">
                        <label>*Cidade</label>             
                        <input type="text" name="end_cidade" id = "cidade" value="<?php echo $dds['endCidade']?>"required> 
                    </div>            
                    
                    <div class="inp_dds">
                        <label>*UF</label>             
                        <input type="text" name="end_uf" id = "uf" value="<?php echo $dds['endUF']?>" required>
                    </div>
                </div>
                <div class="cntner_btn">
                    <button type ="button" class="btn_env" onclick="mostrarHum()">Pessoal</button>
                    <button type ="button" class="btn_env" onclick="mostrarTres()">Contato</button>
                </div>
            </div>
                        
            <div id="cad_pac_tre" class="cont_dds oculto"> 
                <span class="tit">Dados Contato</span>
                <div class="dds">
                    <div class="inp_dds">   
                        <label for="ctt_fixo">*Telefone Fixo</label>  
                        <input type="int" name="ctt_fixo" value="<?php echo $dds['cttFixo']?>" required>
                    </div>
                    
                    <div class="inp_dds">
                        <label for="ctt_cel">*Telefone Cel</label> 
                        <input type="int" name="ctt_cel" value="<?php echo $dds['cttCel']?>" required>
                    </div>
                    
                    <div class="inp_dds">
                        <label for="ctt_email">*Email</label> 
                        <input type="email" name="ctt_email" value="<?php echo $dds['cttEmail']?>" required> 
                    </div>
                </div>
                <div class="cntner_btn">
                    <button type ="button" class="btn_env" onclick="mostrarDois()">Endereço</button>
                    <button type ="button" class="btn_env" onclick="mostrarQuatro()">Sistema</button>
                </div>  
            </div>

            <div id="cad_pac_qua" class="cont_dds oculto"> 
                <span class="tit">Dados Sistema</span>
                <div class="dds">
                    <div class="inp_dds">   
                        <label>*Usuário</label> 
                        <input type="text" name="pac_sys_user" value="<?php echo $dds['pacLogUser']?>" required>
                    </div>

                    <div class="inp_dds">   
                        <label>Senha</label> 
                        <input type="password" name="pac_pwd_sys" placeholder="Nova Senha">
                    </div>
                </div>
                <div class="cntner_btn">
                    <button type ="button" class="btn_env" onclick="mostrarTres()">Contato</button>
                </div>
            </div>

        </div>

            <div class="cntner_btn">
                <button type="submit" class="btn_env" name='btnUpdPac'>Atualizar</button>
            </div>
    </form>
</div>