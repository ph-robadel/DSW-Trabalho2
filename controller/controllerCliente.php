<?php
    require_once("../model/modelo.php");
    require_once("../dao/ClienteDao.php");

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
            op4();
            break;
        case 5:
            op5();
            break;
        
        default:
            echo "<h1 style='text-align:center'>Opção não encontrada!</h1>";
            break;
    }
    
    function inserir(){
        $nome = $_REQUEST["nome"];
        $endereco = $_REQUEST["endereco"];
        $telefone = $_REQUEST["telefone"];
        $cpf = $_REQUEST["cpf"];
        $dataNascimento = $_REQUEST["dataNascimento"];
        $email = $_REQUEST["email"];
        $senha = $_REQUEST["senha"];
        
        $cliente = new Cliente($nome, $endereco, $telefone, $cpf, $dataNascimento,  $email, $senha);
        
        $clienteDao = new ClienteDao();
        var_dump($cliente);
        $clienteDao->incluirCliente($cliente);

        // exibir();
    }


    function exibir(){
        $clienteDao = new ClienteDao();
        $listaClientes = $clienteDao->getClientes();
        session_start();
        $_SESSION['clientes'] = $listaClientes;

        header("Location: ../restrito/exibirClientes.php");
    } 
    
    
    function buscar() {
        $cpf = (int) $_REQUEST['cpf'];
        $cliente = $clienteDao->getCliente($cpf);

        session_start();
        $_SESSION['cliente'] = $cliente;

        header("Location: ../restrito/formClienteAtualizar.php");
    }

    
    function op4(){
        $cpf = (int) $_REQUEST['cpf'];
        $clienteDao->excluirCliente($cpf);

        header("Location: ../controller/controllerCliente.php?opcao=2");
    }
    

    function op5(){
        
        $nome = $_REQUEST["nome"];
        $endereco = $_REQUEST["endereco"];
        $telefone = $_REQUEST["telefone"];
        $cpf = $_REQUEST["cpf"];
        $dataNascimento = $_REQUEST["dataNascimento"];
        $email = $_REQUEST["email"];
        $senha = $_REQUEST["senha"];
        $codCli = $_REQUEST["codCliente"];

        $cliente = new Cliente($nome, $endereco, $telefone, $cpf, $dataNascimento, $email, $senha);
        $cliente->setCodCliente($codCli);
        $clienteDao->atualizarCliente($cliente);
        
        header("Location: ../controller/controllerCliente.php?opcao=2");
    }
    
?>
