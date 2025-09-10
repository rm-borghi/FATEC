<?php
if(isset($_POST['btnEnvPac'])){
    include $cadPaciente;   
}
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
        <h2>Cadastro de Paciente</h2>
    </header>
    <form class="frm_2" method="post" action="#"> 
        <div class="frm_prim">
            <div id="cad_pac_hum" class="cont_dds"> 
                <span class="tit">Dados Pessoais</span>
                <div class="dds">
                    <div class="inp_dds">
                        <label>*Nome</label>
                        <input type="text" name="pac_nome" placeholder="Nome" required>
                    </div> 

                    <div class="inp_dds">
                        <label>*CPF</label>
                        <input type="text" name="pac_cpf" placeholder="CPF" required>
                    </div> 

                    <div class="inp_dds">
                        <label>*Data Nascimento</label>
                        <input type="date" name="pac_dta_nasc" required> 
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
                        <input type="int" name="end_cep" id = "cep" placeholder="CEP" required>
                    </div> 
                    
                    <div class="inp_dds">    
                        <label>*Logradouro</label> 
                        <input type="text" name="end_log" id = "logradouro" placeholder="Logradouro" required>
                    </div> 
                    
                    <div class="inp_dds">    
                        <label>*Número</label>             
                        <input type="int" name="end_num" id = "numero" placeholder="Número" required> 
                    </div> 
                                        
                    <div class="inp_dds">
                        <label>*Bairro</label>            
                        <input type="text" name="end_bairro" id = "bairro" placeholder="Bairro" required>
                    </div>

                    <div class="inp_dds">
                        <label>Complemento</label> 
                        <input type="text" name="end_compl" id = "complemento" placeholder="Complemento" >
                    </div> 
                    
                    <div class="inp_dds">
                        <label>*Cidade</label>             
                        <input type="text" name="end_cidade" id = "cidade" placeholder="Cidade" required> 
                    </div>            
                    
                    <div class="inp_dds">
                        <label>*UF</label>             
                        <input type="text" name="end_uf" id = "uf" placeholder="UF" required>
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
                        <input type="int" name="ctt_fixo" placeholder="Telefone Fixo" required>
                    </div>
                    
                    <div class="inp_dds">
                        <label for="ctt_cel">*Telefone Cel</label> 
                        <input type="int" name="ctt_cel" placeholder="Telefone Cel" required>
                    </div>
                    
                    <div class="inp_dds">
                        <label for="ctt_email">*Email</label> 
                        <input type="email" name="ctt_email" placeholder="Email" required> 
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
                        <input type="text" name="pac_sys_user" placeholder="Usuário" required>
                    </div>

                    <div class="inp_dds">   
                        <label>*Senha</label> 
                        <input type="password" name="pac_pwd_sys" placeholder="Senha" required>
                    </div>
                </div>
                <div class="cntner_btn">
                    <button type ="button" class="btn_env" onclick="mostrarTres()">Contato</button>
                </div>
            </div>

        </div>

            <div class="cntner_btn">
                <button type="submit" class="btn_env" name='btnEnvPac'>Enviar</button>
            </div>
    </form>
</div>