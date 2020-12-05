<?php
    include_once("../model/modelo.php");
    include_once("../dao/Conexao.php");

    class ClienteDao {
        private $con;

        public function ClienteDao() {
            $c = new Conexao();
            $this->con = $c->getConexao();
        }

        public function incluirCliente(Cliente $cliente) {
            $sql = $this->con->prepare("insert into clientes (Nome, Endereco, Telefone, CPF, DtNascimento,Email, Senha) values ( :nome, :endereco, :telefone, :cpf, :dataNascimento, :email, :senha)");

        
            $sql->bindValue(':nome', $cliente->getNome());
            $sql->bindValue(':endereco', $cliente->getEndereco());
            $sql->bindValue(':telefone', $cliente->getTelefone());
            $sql->bindValue(':cpf', $cliente->getCpf());
            $sql->bindValue(':dataDeNascimento', $this->converteDataMySQL($cliente->getDataNascimento()));
            $sql->bindValue(':email', $cliente->getEmail());
            $sql->bindValue(':senha', $cliente->getSenha());
            
            
            $sql->execute();
        }

        private function converteDataMySQL($data) {
            return date('Y-m-d', $data);
        }

        public function getClientes() {
            $rs = $this->con->query("select * from clientes");

            $lista = array();

            while ($cliente = $rs->fetch(PDO::FETCH_OBJ)) {
                $lista[] = $cliente;
            }
            return $lista;
        }

        public function excluirCliente($cpf) {
            $sql = $this->con->prepare("delete from clientes where CPF = :cpf");

            $sql->bindValue(':cpf', $cpf);

            $sql->execute();
        }

       public function getCliente($cpf) {
            $sql = $this->con->prepare("select * from clientes where CPF = :cpf");

            $sql->bindValue(':cpf', $cpf);

            $sql->execute();

            return $sql->fetch(PDO::FETCH_OBJ);
        }


  public function atualizarCliente(Cliente $cliente) {
        $sql = $this->con->prepare("update clientes set Nome= :nome, Endereco= :endereco ,Telefone=:telefone,Cpf=:cpf, DtNascimento= :dataNascimento, Email=:email,Senha=:senha where CPF = :cpf");
        
            $sql->bindValue(':nome', $cliente->getNome());
            $sql->bindValue(':endereco', $cliente->getEndereco());
            $sql->bindValue(':telefone', $cliente->getTelefone());
            $sql->bindValue(':cpf', $cliente->getCpf());
            $sql->bindValue(':dataDeNascimento', $this->converteDataMySQL($cliente->getDataNascimento()));
            $sql->bindValue(':email', $cliente->getEmail());
            $sql->bindValue(':senha', $cliente->getSenha());
        
        $sql->execute();
    }
    
    }
?>