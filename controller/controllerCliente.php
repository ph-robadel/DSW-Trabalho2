<?php
    require_once("../model/modelo.php");
    require_once("../dao/ClienteDao.php");

    $opcao = (int) $_REQUEST['opcao'];
    $clienteDao = new ClienteDao();
    
    if ($opcao == 1) {
        $nome = $_REQUEST["nome"];
        $endereco = $_REQUEST["endereco"];
        $telefone = $_REQUEST["telefone"];
        $cpf = $_REQUEST["cpf"];
        $dataNascimento = $_REQUEST["dataNascimento"];
        $email = $_REQUEST["email"];
        $senha = $_REQUEST["senha"];
        
        $cliente = new Cliente($nome, $endereco, $telefone, $cpf, $dataNascimento,  $email, $senha);
        $clienteDao->incluirCliente($cliente);

        header("Location: ../controller/controllerCliente.php?opcao=2");

    } if ($opcao == 2) {
        $clienteDao = new ClienteDao();
        $listaClientes = $clienteDao->getClientes();
        session_start();
        $_SESSION['clientes'] = $listaClientes;

        header("Location: ../restrito/exibirClientes.php");


    } if ($opcao == 3) {
        $cpf = (int) $_REQUEST['cpf'];
        $cliente = $clienteDao->getCliente($cpf);

        session_start();
        $_SESSION['cliente'] = $cliente;

        header("Location: ../restrito/formClienteAtualizar.php");


    } 
    if ($opcao == 4) {
        $cpf = (int) $_REQUEST['cpf'];
        $clienteDao->excluirCliente($cpf);

        header("Location: ../controller/controllerCliente.php?opcao=2");
    } 
     if ($opcao == 5) {
        
        $nome = $_REQUEST["nome"];
        $endereco = $_REQUEST["endereco"];
        $telefone = $_REQUEST["telefone"];
        $cpf = $_REQUEST["cpf"];
        $dataNascimento = $_REQUEST["dataNascimento"];
        $email = $_REQUEST["email"];
        $senha = $_REQUEST["senha"];
        $codCli = $_REQUEST["codCliente"]

        $cliente = new Cliente($nome, $endereco, $telefone, $cpf, $dataNascimento, $email, $senha);
        $cliente->setCodCliente($codCli);
        $clienteDao->atualizarCliente($cliente);
        
        header("Location: ../controller/controllerCliente.php?opcao=2");
    }
    
?>
