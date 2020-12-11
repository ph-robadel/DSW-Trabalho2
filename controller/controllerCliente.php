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
            autenticar();
            break;
        case 4:
            excluir();
            break;
        case 5:
            atualizar();
            break;
        case 6:
            logoff();
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
        $clienteDao->incluirCliente($cliente);

        header("Location:../view/login.php");
    }


    // function exibir(){
    //     $clienteDao = new ClienteDao();
    //     $listaClientes = $clienteDao->getClientes();

    //     session_start();
    //     $_SESSION['clientes'] = $listaClientes;

    //     header("Location: ../view/exibirClientes.php");
    // }

    function autenticar(){
        $email = $_REQUEST['email'];
        $senha = $_REQUEST['senha'];
        
        $clienteDao = new ClienteDao();
        $cliente = $clienteDao->autenticarCliente($email, $senha);

        session_start();
        if($cliente == NULL){
            $_SESSION["login-status"] = 1;
            header("Location:../view/login.php");
        }else{
            $_SESSION["login-cliente"] = $cliente;
            header("Location:../view/servicos.php");
        }
    }
    
    
    // function buscar() {
    //     $id = (int) $_REQUEST['id'];
    //     $cliente = $clienteDao->getCliente($cpf);

    //     session_start();
    //     $_SESSION['cliente'] = $cliente;

    //     header("Location: ../view/formClienteAtualizar.php");
    // }

    
    function excluir(){
        session_start();
        $id = $_SESSION["login-cliente"]->idClientes;
        $clienteDao = new ClienteDao();
        $clienteDao->excluirCliente($id);
        logoff();
    }
    

    function atualizar(){
        session_start();
        if(!isset($_SESSION["login-cliente"])){
            header("Location:../view/login.php");
        }

        $nome = $_REQUEST["nome"];
        $endereco = $_REQUEST["endereco"];
        $telefone = $_REQUEST["telefone"];
        $cpf = $_REQUEST["cpf"];
        $dataNascimento = $_REQUEST["dataNascimento"];
        $email = $_REQUEST["email"];
        $senha = $_REQUEST["senha"];
        
        $id = $_SESSION["login-cliente"]->idClientes;

        $cliente = new Cliente($nome, $endereco, $telefone, $cpf, $dataNascimento, $email, $senha);
        $cliente->setId($id);

        $clienteDao = new ClienteDao();
        $clienteDao->atualizarCliente($cliente);

        $_SESSION["login-cliente"] = $clienteDao->getCliente($cliente->getId());

        header("Location:../view/dadosCliente.php");
    }

    function logoff(){
        session_start();
        if(isset($_SESSION["login-cliente"])){
            $_SESSION["login-cliente"] = NULL;
        }
        header("Location:../view/index.php");
    }
    
?>
