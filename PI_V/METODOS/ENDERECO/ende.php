<?php

//Lista nomes de endereços Paginas
$index = 'https://poc-eclipsedataworks.devfatec-campinas.com.br/';
$menuPrincipal = '/APLICATIVO/Aux_Page/menuPrincipal.php';
$menuCadPac = './menuPacientes.php';
$menuCadast = './menuCadastro.php';
$menuCadPsc = './menuPsicologo.php';
$menuCadCon = './menuConsultas.php';
$quemSomos = '/APLICATIVO/Aux_Page/quemSomos.php';
$alpha = '/APLICATIVO/Aux_Page/versaoAlpha.php';

    //Paginas com funções de cadastro ou registro
        $cadSessao = $_SERVER['DOCUMENT_ROOT'] .'/APLICATIVO/Aux_Page/ADM/CONSULTA/cadNovSes.php';
        $cadPsicologo = $_SERVER['DOCUMENT_ROOT'] . '/APLICATIVO/Aux_Page/ADM/PSICOLOGO/cadNovPsc.php';
        $cadPaciente = $_SERVER['DOCUMENT_ROOT'] . '/APLICATIVO/Aux_Page/ADM/PACIENTE/cadNovPac.php';
        $cadConsulta = $_SERVER['DOCUMENT_ROOT'] . '/APLICATIVO/Aux_Page/ADM/CONSULTA/cadNovCon.php';
        $cadAnexo = $_SERVER['DOCUMENT_ROOT'] . '/APLICATIVO/Aux_Page/ADM/PACIENTE/cadNovAnx.php';
        $buscaListaConsultas = $_SERVER['DOCUMENT_ROOT'] . '/APLICATIVO/Aux_Page/ADM/CONSULTA/buscaListaCons.php';
        $buscaListaAgendamentos = $_SERVER['DOCUMENT_ROOT'] . '/APLICATIVO/Aux_Page/ADM/PSICOLOGO/buscaListAgndPsc.php';
        $buscaListaPacientes = $_SERVER['DOCUMENT_ROOT'] . '/APLICATIVO/Aux_Page/ADM/PACIENTE/buscaPac.php';
        $buscaListaSentimentos = $_SERVER['DOCUMENT_ROOT'] . '/APLICATIVO/Aux_Page/ADM/PACIENTE/buscaCadSent.php';

    //Paginas da função VAL_DDS() que retorna a pagina conforme o código das NAVBARS
        $ddsUpdtPac = './ADM/PACIENTE/ddsUpdtPac.php';
        $ddsSesPac = './ADM/PACIENTE/ddsSesPac.php';
        $ddsSentPac = './ADM/PACIENTE/ddsSentPac.php';
        $ddsCadAnx = './ADM/PACIENTE/ddsCadAnx.php';
        $ddsCadPsc = './ADM/PSICOLOGO/ddsCadPsc.php';
        $ddsCadPac =  './ADM/PACIENTE/ddsCadPac.php';
        $ddsAgnPsc = './ADM/PSICOLOGO/ddsAgnPsc.php';
        $ddsCadSes = './ADM/CONSULTA/ddsCadSes.php';
        $ddsCadCon = './ADM/CONSULTA/ddsCadCon.php';
        $ddsSentList = './ADM/PACIENTE/ddsSentList.php';
        $ddsDetPac = './ADM/PACIENTE/ddsDetPac.php';
        $ddsBusAnex = './ADM/PACIENTE/ddsBusAnex.php';
    
//Imagens
$img_background = '../../IMAGENS/psic_img_001.jpeg';
    //Sentimentos Negativos para a pagina de Emoções
        $sentNegativo = '../../IMAGENS/SENTIMENTOS/NEGATIVOS/sentNegativo.png';
        $sentIra = '../../IMAGENS/SENTIMENTOS/NEGATIVOS/sentIra.png';
        $sentMedo = '../../IMAGENS/SENTIMENTOS/NEGATIVOS/sentMedo.png';
        $sentPreocupacao = '../../IMAGENS/SENTIMENTOS/NEGATIVOS/sentPreocupacao.png';
        $sentTristeza = '../../IMAGENS/SENTIMENTOS/NEGATIVOS/sentTristeza.png';
        $sentCulpa = '../../IMAGENS/SENTIMENTOS/NEGATIVOS/sentCulpa.png';
        $sentEstresse = '../../IMAGENS/SENTIMENTOS/NEGATIVOS/sentEstresse.png';
        $sentFrustracao = '../../IMAGENS/SENTIMENTOS/NEGATIVOS/sentFrustracao.png';
        $sentIndignacao = '../../IMAGENS/SENTIMENTOS/NEGATIVOS/sentIndignacao.png';
        $sentVergonha = '../../IMAGENS/SENTIMENTOS/NEGATIVOS/sentVergonha.png';
        $sentVulnerabilidade = '../../IMAGENS/SENTIMENTOS/NEGATIVOS/sentIndignacao.png';
    //Sentimentos Positivos para a pagina de Emoções
        $sentPositivo = '../../IMAGENS/SENTIMENTOS/POSITIVOS/sentPositivo.png';
        $sentFeliz = '../../IMAGENS/SENTIMENTOS/POSITIVOS/sentFeliz.png';
        $sentAmor = '../../IMAGENS/SENTIMENTOS/POSITIVOS/sentAmor.png';
        $sentEuforia = '../../IMAGENS/SENTIMENTOS/POSITIVOS/sentEuforia.png';
        $sentEsperanca = '../../IMAGENS/SENTIMENTOS/POSITIVOS/sentEsperanca.png';
        $sentMotivacao = '../../IMAGENS/SENTIMENTOS/POSITIVOS/sentMotivacao.png';
        $sentPaixao = '../../IMAGENS/SENTIMENTOS/POSITIVOS/sentPaixao.png';
        $sentSatisfacao = '../../IMAGENS/SENTIMENTOS/POSITIVOS/sentSatisfacao.png';
        $sentDiversao = '../../IMAGENS/SENTIMENTOS/POSITIVOS/sentDiversao.png';
        $sentBemEstar = '../../IMAGENS/SENTIMENTOS/POSITIVOS/sentBemEstar.png';
        $sentEntusiasmo = '../../IMAGENS/SENTIMENTOS/POSITIVOS/sentEntusiasmo.png';
    //EQUIPE
        $giovanni = '../../IMAGENS/EQUIPE/giovanni.png'; 
        $airton = '../../IMAGENS/EQUIPE/Airton.png';
        $hugo = '../../IMAGENS/EQUIPE/hugo.png';
        //$renato = '../../IMAGENS/EQUIPE/renato.png';
        $marcelo = '../../IMAGENS/EQUIPE/marcelo.png';
        $rafael = '../../IMAGENS/EQUIPE/rafael.png';

//Configurações CCS
$navbarCss = '../../CSS/navbar.css';
$indexCss = '../../CSS/index.css';
$somosCss = '../../CSS/somos.css';
$pagCss = '../../CSS/pag.css';
$alphaCss = '../../CSS/alpha.css';

//Menu de Navegação
$navBarPrinc = '../../APLICATIVO/Aux_Page/ADM/NAVBAR/navbarPrinc.php';
$navBarPac = '../../APLICATIVO/Aux_Page/ADM/NAVBAR/navbarPac.php';
$navBarPsc = '../../APLICATIVO/Aux_Page/ADM/NAVBAR/navbarPsc.php';
$navBarCon = '../../APLICATIVO/Aux_Page/ADM/NAVBAR/navbarCon.php';
$navBarCadastro = '../../APLICATIVO/Aux_Page/ADM/NAVBAR/navbarCadastro.php';

//diretório para salvar arquivos
$anxDiretorio = '../../../PI_II_III/Anexos/';
?>