<?php 


    class Cliente{
        
        public $codCliente;
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
        function getCodCliente() {
            return $this->codCliente;
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

        function setCodCliente($codCliente) {
            $this->codCliente = $codCliente;
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
    public $nome;
    public $valor;
    public $descricao;
    public $idTipo;
   
    
    function Servico( $nome, $valor, $descricao, $idTipo) {
       
        $this->nome = $nome;
        $this->valor = $valor;
        $this->descricao = $descricao;
        $this->idTipo = $idTipo;
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

    function setIdServico($idServico) {
        $this->idServico = $idServico;
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

    function setId_tipo($idTipo) {
        $this->idTipo = $idTipo;
    }



    
}





//------------------------TIPO------------------------
class Tipo{
        
    public $idTipo;
    public $nome;
    public $valor;
   
   
    
    function Tipo($nome, $valor) {
       
        $this->nome = $nome;
        $this->valor = $valor;
    }
    
    function getId_tipo() {
        return $this->idTipo;
    }

    function getNome() {
        return $this->nome;
    }

    function getValor() {
        return $this->valor;
    }

    function setId_tipo($idTipo) {
        $this->idTipo = $idTipo;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setValor($valor) {
        $this->valor = $valor;
    }






    
}


?>