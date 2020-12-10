<?php
    require_once("../model/modelo.php");
    require_once("Conexao.php");

    class ClienteDao {
        private $con;

        public function ClienteDao() {
            $c = new Conexao();
            $this->con = $c->getConexao();
        }

        public function incluirCliente(Cliente $cliente) {
            $sql = $this->con->prepare("insert into clientes (nome, endereco, telefone, cpf, dtNascimento, email, senha)
                                        values ( :nome, :endereco, :telefone, :cpf, :dataNascimento, :email, :senha)");
            
            $sql->bindValue(':nome', $cliente->getNome());
            $sql->bindValue(':endereco', $cliente->getEndereco());
            $sql->bindValue(':telefone', $cliente->getTelefone());
            $sql->bindValue(':cpf', $cliente->getCpf());
            $sql->bindValue(':dataNascimento', $this->converteDataMySQL($cliente->getDataNascimento()));
            $sql->bindValue(':email', $cliente->getEmail());
            $sql->bindValue(':senha', $cliente->getSenha());
            
            $sql->execute();
        }

        private function converteDataMySQL($data) {
            return date('Y-m-d', $data);
        }

        // public function getClientes(){
        //     $sql = $this->con->prepare("SELECT * FROM clientes");
        //     $sql->execute();
      
        //     $lista = array();
        //     while($autor = $sql->fetch(PDO::FETCH_OBJ)){
        //        $lista[] = $cliente;
        //     }
        //     return $lista;
        // }

        public function getClientes() {
            $rs = $this->con->query("SELECT * FROM clientes");

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

        public function autenticarCliente($email, $senha){
            $sql = $this->con->prepare("select * from clientes where email = :email and senha = :senha");
            $sql->bindValue(':email', $email);
            $sql->bindValue(':senha', $senha);
            $sql->execute();
    
            if($sql->rowCount() > 0 )
                $cliente = $sql->fetch(PDO::FETCH_OBJ);
            else
                $cliente = NULL;
            
            return $cliente;
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