<?php
    include_once("../model/modelo.php");
    include_once("../dao/TipoDao.php");

    $opcao = (int) $_REQUEST['opcao'];
    $tipoDao = new TipoDao();
    
    if ($opcao == 1) {
        $nome = $_REQUEST["nome"];
        $endereco = $_REQUEST["valor"];
        $tipo = new Tipo($nome, $valor);
        $tipoDao->incluirTipo($idTipo);
        header("Location: controllerTipo.php?opcao=2");

    } if ($opcao == 2) {
        $listaTipos = $tipoDao->getTipos();
        session_start();
        $_SESSION['listaTipos'] = $listaTipos;
        header("Location:  ../view/exibirTipos.php");


    } if ($opcao == 3) {

        $idTipo = (int) $_REQUEST['idTipo'];

        $tipo = $tipoDao->getTipo($cpf);

        session_start();
        $_SESSION['tipo'] = $tipo;

        header("Location:  ../view/formTipoAtualizar.php");


    } 
    if ($opcao == 4) {
        
        $idTipo = (int) $_REQUEST['idTipo'];

        $tipoDao->excluirTipo($idTipo);

        header("Location: controllerTipo.php?opcao=2");
    } 
     if ($opcao == 5) {
        
        $nome = $_REQUEST["nome"];
        $endereco = $_REQUEST["valor"];

        $tipo = new Tipo( $nome, $valor);
        
        $tipo->setId_tipo($idTipo);
        
        $tipoDao->atualizarTipo($tipo);
        
        header("Location: controllerTipo.php?opcao=2");
    }
    
?>
