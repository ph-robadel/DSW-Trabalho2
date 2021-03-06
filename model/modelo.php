<?php 


    class Cliente{
        
        public $idCliente;
        public $nome;
        public $endereco;
        public $telefone;
        public $cpf;
        public $dataNascimento;
        public $email;
        public $senha;
        
        
        function Cliente( $nome, $endereco, $telefone, $cpf, $dataNascimento, $email, $senha) {
            
            $this->nome = $nome;
            $this->endereco = $endereco;
            $this->telefone = $telefone;
            $this->cpf = $cpf;
            $this->dataNascimento = $dataNascimento;
            $this->email = $email;
            $this->senha = $senha;
            
        
        }
        
        function getId() {
            return $this->idCliente;
        }

        function getNome() {
            return $this->nome;
        }

        function getEndereco() {
            return $this->endereco;
        }

        function getTelefone() {
            return $this->telefone;
        }

        function getCpf() {
            return $this->cpf;
        }

        function getDataNascimento() {
            return $this->dataNascimento;
        }

        function getEmail() {
            return $this->email;
        }

        function getSenha() {
            return $this->senha;
        }

        function setId($id) {
            $this->idCliente = $id;
        }

        function setNome($nome) {
            $this->nome = $nome;
        }

        function setEndereco($endereco) {
            $this->endereco = $endereco;
        }

        function setTelefone($telefone) {
            $this->telefone = $telefone;
        }

        function setCpf($cpf) {
            $this->cpf = $cpf;
        }

        function setDataNascimento($dataNascimento) {
            $this->dataNascimento = $dataNascimento;
        }

        function setEmail($email) {
            $this->email = $email;
        }

        function setSenha($senha) {
            $this->senha = $senha;
        }


    }   
    










//------------------------SERVIÇO------------------------
class Servico{
        
    public $idServico;
    public $idCliente;
    public $idTipo;
    public $nome;
    public $valor;
    public $descricao;
   
    
    function Servico( $idCliente, $idTipo, $nome, $valor, $descricao ) {
        $this->idTipo = $idTipo;
        $this->idCliente = $idCliente;
        $this->nome = $nome;
        $this->valor = $valor;
        $this->descricao = $descricao;
    }
    
    function getIdServico() {
        return $this->idServico;
    }

    function getNome() {
        return $this->nome;
    }

    function getValor() {
        return $this->valor;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getIdTipo() {
        return $this->idTipo;
    }

    function getIdCliente() {
        return $this->idCliente;
    }

    function setIdServico($idServico) {
        $this->idServico = $idServico;
    }

    function setIdCliente($idCliente) {
        $this->idCliente = $idCliente;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setValor($valor) {
        $this->valor = $valor;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setIdTipo($idTipo) {
        $this->idTipo = $idTipo;
    }
}





//------------------------TIPO------------------------
class Tipo{
        
    public $idTipo;
    public $nome;
   
    
    function Tipo($nome) {
        $this->nome = $nome;
    }
    
    function getId_tipo() {
        return $this->idTipo;
    }

    function getNome() {
        return $this->nome;
    }

    function setId_tipo($idTipo) {
        $this->idTipo = $idTipo;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }
    
}


?>