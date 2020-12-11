<?php
    include_once("../model/modelo.php");
    include_once("../dao/ServicoDao.php");

    $opcao = (int) $_REQUEST['opcao'];
    $ServicoDao = new ServicoDao();
    
    if ($opcao == 1) {
        $nome = $_REQUEST["nome"];
        $valor = $_REQUEST["valor"];
        $descricao = $_REQUEST["nome"];
        $idTipo = $_REQUEST["idTipo"];
      

        $servico = new Servico($idTipo, $nome, $valor, $descricao );
        $servicoDao = new ServicoDao();
        $servicoDao->incluirServico($servico);

        header("Location: ../view/servicos.php");

    } if ($opcao == 2) {
        $listaServicos = $servicoDao->getServicos();

        session_start();
        $_SESSION['listaServicos'] = $listaServicos;

        header("Location:  ../view/exibirServicos.php");


    } if ($opcao == 3) {
        $idServico = (int) $_REQUEST['idServico'];

        $servico = $servicoDao->getServico($cpf);

        session_start();
        $_SESSION['servico'] = $servico;

        header("Location:  ../view/formServicoAtualizar.php");


    } 
    if ($opcao == 4) {
        $idServico = (int) $_REQUEST['idServico'];

        $servicoDao->excluirServico($idServico);

        header("Location: controllerServico.php?opcao=2");
    } 
     if ($opcao == 5) {
        
        $nome = $_REQUEST["nome"];
        $valor = $_REQUEST["valor"];
        $descricao = $_REQUEST["nome"];
        $id_tipo = $_REQUEST["id_tipo"];

        $servico = new Servico( $nome, $valor, $descricao, $id_tipo);
        
        $servico->setId_servico($idServico);
        
        $servicoDao->atualizarServico($servico);
        
        header("Location: controllerServico.php?opcao=2");
    }
    
?>
