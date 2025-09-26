<?php
//require_once '../../METODOS/SQLS/SELECT/sql_select.php';
//require_once '../../METODOS/FUNCOES/configConn.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/METODOS/ENDERECO/ende.php';
//require_once '../../METODOS/FUNCOES/funcoes.php';
/*<link rel="stylesheet" href='<?php echo $alphaCss ?>'>*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECLIPSE DataWorks</title>    
    <link rel="stylesheet" href='<?php echo $alphaCss ?>'>
</head>
<body>

<div class="alp_cntner">
    <div class="btnv">
    <a href="<?php echo $index ?>">VOLTAR</a>
    </div>

    <div class="alp_txt">
        <div class="cab">
            <p> Versão do Código </p>
            <p>Alpha Protótipo</p>
            <?php echo $_SERVER['HTTP_HOST'] ; echo $alphaCss ;?>
        </div>
        <div class="versao">
            
        <div class="cont_card">
            <div class="card">
                <p>1.0 HMTL, CSS e PHP tela de login</p>
                <div class="subitem">
                    <p>1.0.1 Criação da página "index.php"</p>
                    <p>1.0.2 Criação do script de estilização "index.css"</p>
                    <p>1.0.3 Estilização CSS base para demais páginas</p>
                    <p>1.0.4 Criação de Identidade visual para cores e contrastes</p>
                </div>
            </div>

            <div class="card">
                <p>1.1 Conexão com banco</p>
                <div class="subitem">
                    <p>1.1.1 Criação de estrutura para CRUD</p>
                    <p>1.1.2 Configuração de conexão com banco "configConn.php"</p>
                    <p>1.1.3 Criação de arquivo repositório de funções customizadas "funcoes.php"</p>
                    <p>1.1.4 Criação de rotina PHP e SQL de validação do usuário no arquivo "index.php"</p>
                </div>
            </div>

            <div class="card">
                <p>1.2 Adição de HTML, CSS e PHP do Menu Principal</p>
                <div class="subitem">
                    <p>1.2.1 Criação da pagina de Menu Principal "menuPrinc.php"</p>
                    <p>1.2.2 Criação do arquivo de navegação "navbarPrinc.php"</p>
                    <p>1.2.3 Criação do script CSS de estilização do elemento de navegação "navbar.css"</p>
                    <p>1.2.4 Criação de script JavaScript para funcionalidade ocultar do menu lateral "script.js"</p>
                    <p>1.2.5 Adicionado script JavaScript para chamado de páginas através do menu lateral "script.js"</p>
                </div>
            </div>
        </div>

        <div class="cont_card">
            <div class="card">                
                <p>1.3 Adição de HTML, CSS e PHP do Menu Paciente</p>
                <div class="subitem">
                    <p>1.3.1 Criação da página de Menu Paciente "menuCadPaci.php"</p>
                    <p>1.3.2 Criação do arquivo de navegação "navbarPaci.php"</p>
                    <p>1.3.3 Criação do script de estilização dos itens 1.3.1 e 1.3.2</p>
                    <p>1.3.4 ... perdi histórico do que fiz aqui aeuaeheuahea droga...</p>
                </div>
            </div>

            <div class="card">   
                <p>1.4 Adição de HTML, CSS e PHP de Barra lateral do Menu Paciente</p>
                <div class="subitem">
                    <p>1.4.1 Criação da estrutura de seleção da página por códigos</p>
                    <p>1.4.2 ... perdi histórico do que fiz aqui aeuaeheuahea droga...</p>
                </div>
            </div>

            <div class="card">   
                <p>1.5 Adição de HTML, CSS e PHP da RF01 - Cadastro de Paciente</p>
                <div class="subitem">
                    <p>1.5.1 BACKEND de Cadastro</p>
                    <p>1.5.2 INSERT do SQL validada</p>
                    <div class="subsubitem">
                        <p>1.5.2.1 Função "cad_ctt_end()" de inclusão de dados de endereço e contato validada</p>
                        <p>1.5.2.2 Função "cad_nov_pac()" de inclusão de dados pessoas paciente validada</p>
                    </div>
                    <p>1.5.3 Criado funcionalidade JavaScript de uso API VIACEP para preenchimento de endereço</p>
                </div>
            </div>
        </div>

        <div class="cont_card">
            <div class="card"> 
                <p>1.6 Adição de HTML, CSS e PHP da RF0 - Localizar/Buscar Paciente</p>
                <div class="subitem">
                    <p>1.6.1 Select para nome parcial criado e validado</p>
                    <p>1.6.2 Criado estrutura para seleção de tipo de pesquisa com base em alguns campos</p>
                    <p>1.6.3 Criado estrutura de formatação da SQL de resposta e transformada em tabela</p>
                    <div class="subsubitem">
                        <p>1.6.3.1 Alterado para tipo dinâmico de colunas não mais sendo fixa</p>
                    </div>
                    <p>1.6.4 Estilizado a tabela com base na identidade visual</p>
                    <p>1.6.5 Adicionado botões para chamada de tela Modal com base na seleção de Paciente</p>
                </div>
            </div>

            <div class="card"> 
                <p>1.7 Adição de HTML, CSS e PHP da RF0 - Exportar Dados Paciente</p>
                <div class="subitem">
                    <p>OBS: verificar com grupo se realmente é necessário</p>
                    <p>1.7.1 HOLD - Export para json</p>
                    <p>1.7.2 HOLD - Export para csv</p>
                    <p>1.7.3 HOLD - Export para Excel precisa de modo PHP especifico</p>
                    <p>1.7.4 Edição da página de login com dados de "Esqueci Senha" e "Cadastrar!"</p>
                    <div class="subsubitem">
                        <p>1.7.4.1 Discutir com grupo pois cadastro hoje é puramente pelo psicólogo, faz sentido deixar auto-serviço para potencial paciente?</p>
                    </div>
                    <p>1.7.5 Adicionado validação contra XSS com função htmlspecialchars do PHP</p>
                </div>
            </div>

            <div class="card">                 
                <p>1.8 Adição de métodos para criptografia de senha antes de inclusão em banco</p>
                <div class="subitem">
                    <p>1.8.1 Método de password_hash do PHP para criptografia</p>
                    <p>1.8.2 Método de password_verify do PHP para descriptografia e comparação</p>
                </div>
            </div>
        </div>

        <div class="cont_card">
            <div class="card">         
                <p>1.9 Adição de Cadastro de psicólogo</p>
                <div class="subitem">
                    <p>1.9.1 Ajustado dados para cadastro do psicólogo</p>
                    <p>1.9.2 Ajustado navegação da aba de psicólogo</p>
                    <p>1.9.3 Criado SQLs de insert de novo psicólogo</p>
                    <p>1.9.4 Ajustes de bugs diversos entre navegação de páginas</p>
                </div>
            </div>

            <div class="card">
                <p>1.10 Adição de tela para cadastro de Consulta</p>
                <div class="subitem">
                    <p>1.10.1 Efetuado criação dos SELECTs para seleção de Paciente e psicólogo</p>
                    <p>1.10.2 Reajustada tabela de Consulta para corrigir campos "NOT NULL"</p>
                    <p>1.10.3 Será necessário limitar horário de início para facilitar controle de Agendamento</p>
                    <p>1.10.4 Criado telas de listagem de Agendamentos para Psicólogo necessário amarrar SQLs para criar tabela</p>
                    <p>1.10.5 Criado SQLs de Insert e Select para registro no banco das Consultas</p>
                    <p>1.10.6 Criado laço de verificação para não registrar duplicatas de agendamento para Psicólogo (mesmo dia, mesmo hora, mesmo psicólogo)</p>
                    <div class="subsubitem">
                        <p>a. Necessário melhoria desse laço futuramente, já que é possível cadastrar vários para mesmo paciente</p>
                    </div>
                    <p>1.10.7 NOTA: devido ao crescente número de elementos ".php" criar pastas para classificar e melhorar gestão dos elementos</p>
                    <div class="subsubitem">
                        <p>1.10.7.1 Criado pastas depois mover elementos para as pastas e alterar caminhos</p>
                    </div>
                    <p>1.10.8 Criada página para Registro da Sessão - Consulta</p>
                    <p>1.10.9 Criados SQL de SELECT/INSERT/UPDATE para registros</p>
                    <p>1.10.10 Criado tabela com informação se a Sessão tem seu detalhamento lançado</p>
                    <div class="subsubitem">
                        <p>1.10.10.1 Funcionalidade para demonstrar apenas lista de sessões do Psicólogo logado</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="cont_card">
            <div class="card">           
                <p>1.11 Reorganização das pastas de códigos</p>
                <div class="subitem">
                    <p>1.11.1 Páginas auxiliares segmentadas entre ADM e USER</p>
                    <p>1.11.2 Quebra das pastas para refletir a que perfil elas se referem</p>
                    <p>1.11.3 Correções de bugs menores devido a nomes semelhantes de elementos HTML</p>
                </div>
            </div>

            <div class="card">                  
                <p>1.12 Adição de Página de Sentimento Paciente</p>
                <div class="subitem">
                    <p>1.12.1 Criação das Imagens com o Copilot Design</p>
                    <p>1.12.2 Criação da estrutura HTML para a seleção do Sentimento</p>
                    <p>1.12.3 Alteração da tabela de sentimento para acomodar o caminho e descrição do sentimento</p>
                    <p>1.12.4 Correções de bugs em várias páginas, não vou detalhar porque é chato demaissss</p>
                    <p>1.12.5 Melhoria no algoritmo de registro e demonstração de Sentimentos</p>
                </div>
            </div>

            <div class="card">  
                <p>1.13 Remodelagem de página do Paciente</p>
                <div class="subitem">
                    <p>1.13.1 Adicionado função para Atualizar cadastro</p>
                    <div class="subsubitem">
                        <p>a. SQL de UPDATE ainda não implementada</p>
                    </div>
                    <p>1.13.2 Opções de Agendar e Feedback inclusas</p>
                    <div class="subsubitem">
                        <p>a. Funções não estavam nos requisitos iniciais, discutir com grupo</p>
                    </div>
                    <p>1.13.3 Removidos botões de voltas das páginas já que não fazem sentido</p>
                    <p>1.13.4 Alterado SQL de "Sessões" para validar Psicólogo, assim trazendo somente seus apontamentos</p>
                    <div class="subsubitem">
                        <p>a. ROOT pode ver todas</p>
                    </div>
                    <p>1.13.5 Corrigidos bugs de navegação/dados em várias páginas</p>
                </div>
            </div>
        </div>

        <div class="cont_card">
            <div class="card">   
                <p>1.14 Criada página Quem Somos "Eclipse Works"</p>
                <div class="subitem">
                    <p>1.14.1 Adicionar os demais textos</p>
                    <p>1.14.2 Corrigido o script de criação de banco com atualização</p>
                    <p>1.14.3 Criado função para separar ROOT, ADM e USER</p>
                    <p>1.14.4 Criado fluxo de Feedback entre Paciente e Psicólogo e vice-versa</p>
                    <p>1.14.5 Criada pagina para Versão do Alpha</p>
                    <p>1.14.6 Efetuado alterações no CSS para melhorar visual</p>
                </div>
            </div>
        </div>
    </div>

    <div class="btnv">
        <a href="<?php echo $index ?>">VOLTAR</a>
    </div> 

</div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>