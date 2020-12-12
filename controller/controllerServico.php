<?php
    include_once("../model/modelo.php");
    include_once("../dao/ServicoDao.php");
    include_once("../dao/TipoDao.php");
    include_once("../dao/DataDisponivelDao.php");

    $opcao = (int) $_REQUEST['opcao'];
    switch ($opcao) {
        case 1:
            inserir();
            break;
        case 2:
            exibir();
            break;
        case 3:
            buscar();
            break;
        case 4:
            excluir();
            break;
        case 5:
            atualizar();
            break;
        case 6:
            telaCadastro();
            break;
        
        default:
            echo "<h1 style='text-align:center'>Opção não encontrada!</h1>";
            break;
    }
    
    function inserir(){
        session_start();
        $nome = $_REQUEST["nome"];
        $descricao = $_REQUEST["descricao"];
        $valor = (float) $_REQUEST["valor"];
        $idTipo = $_REQUEST["idTipo"];
        $idCliente = $_SESSION["login-cliente"]->idClientes;

        $servico = new Servico($idCliente, $idTipo, $nome, $valor, $descricao);
        $servicoDao = new ServicoDao();
        $servicoDao->incluirServico($servico);

        
        $idServico = $servicoDao->getUltimoId();
        $dataDisponivelDao = new DataDisponivelDao();
        for($i = 1; $i <= 7; $i++){
            $data = $_REQUEST["data$i"];
            if($data != ""){
                $dataDisponivelDao->incluirData($idServico, $data);
            }
        }

        header("Location: ../view/servicosCliente.php");

    } 
    
    function exibir(){
        $servicoDao = new ServicoDao();
        $listaServicos = $servicoDao->getServicos();
        session_start();
        $_SESSION['listaServicos'] = $listaServicos;
        header("Location:  ../view/servicos.php");
    }

    function buscar() {
        $idServico = (int) $_REQUEST['idServico'];
        $ServicoDao = new ServicoDao();
        $servico = $servicoDao->getServico($cpf);
        session_start();
        $_SESSION['servico'] = $servico;
        header("Location:  ../view/formServicoAtualizar.php");
    }

    function excluir(){
        $idServico = (int) $_REQUEST['idServico'];
        $ServicoDao = new ServicoDao();
        $servicoDao->excluirServico($idServico);

        header("Location: ../view/servicosCliente.php");
    }

    function atualizar(){
        $nome = $_REQUEST["nome"];
        $valor = $_REQUEST["valor"];
        $descricao = $_REQUEST["nome"];
        $id_tipo = $_REQUEST["id_tipo"];

        $servico = new Servico( $nome, $valor, $descricao, $id_tipo);
        $servico->setId_servico($idServico);
        $ServicoDao = new ServicoDao();
        
        $servicoDao->atualizarServico($servico);
        
        header("Location: ../view/servicosCliente.php");
    }

    function telaCadastro(){
        session_start();
        $tipoDao = new TipoDao();
        $tipos = $tipoDao->getTipos();
        $_SESSION["tipos"] = $tipos;
        
        header("Location:../view/formServico.php");
    }
    
?>
