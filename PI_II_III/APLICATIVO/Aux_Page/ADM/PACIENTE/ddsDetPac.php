<div class="all_form">
    <header class="header">
        <h2>Detalhes de Paciente</h2>
    </header>
    <form class="frm_2" method="post" action="#"> 
        <div class="frm_prim">
            <div class="dds_pri"> 
                <span class="tit">Opções de Busca</span>

                <div class="dds">
                    
                    <div class="r_btn"> 
                        <input type="radio" name="opr" value="cpf" checked>
                        <label>CPF</label>            

                        <input type="radio" name="opr" value="nome">
                        <label>Nome</label>            
                    </div> 

                    <div class="r_btn"> 
                        <input type="radio" name="opr" value="cidade">
                        <label>Cidade</label>

                        <input type="radio" name="opr" value="mes_nasc">
                        <label>Mês Nascimento</label>
                    </div>
                    
                    <div class="r_btn"> 
                        <input type="radio" name="opr" value="telefone">
                        <label>Telefone</label>

                        <input type="radio" name="opr" value="cep">
                        <label>CEP</label>
                    </div> 

                    <div class="inp_dds"> 
                        <label>*Informação para busca</label>
                        <input type="text" name="valor_bus" placeholder="Digite aqui" required>
                    </div> 

                </div>
            </div>           
        </div>

        <div class="cntner_btn">
            <button type="submit" class="btn_env" name="btnEnvPes">Enviar</button>
            <button type="submit" class="btn_exp">Exportar</button>
        </div>

        <?php
        if(!empty($_POST['valor_bus'])){    
            if($_POST['valor_bus'] && !empty($_POST['valor_bus'])){
                $opr = val_var($_POST['opr']);
                if(!empty($opr)){        
                    include $buscaListaPacientes;
                }else{
                    echo '<h1>Necessário escolha de tipo para Pesquisa</h1>';
                }
            }
        }
        ?>

    </form>

</div>