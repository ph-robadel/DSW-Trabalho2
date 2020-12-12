<?php
    require_once("../model/modelo.php");
    require_once("Conexao.php");

    class ClienteDao {
        private $con;

        function __construct() {
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
            $sql->bindValue(':dataNascimento', $cliente->getDataNascimento());
            $sql->bindValue(':email', $cliente->getEmail());
            $sql->bindValue(':senha', $cliente->getSenha());
            
            $sql->execute();
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

        public function excluirCliente($id) {
            $sql = $this->con->query("delete from clientes where idClientes = $id");
        }

       public function getCliente($id) {
            $sql = $this->con->prepare("select * from clientes where idClientes = :id");

            $sql->bindValue(':id', $id);
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
            echo "<br>Ok";
            $sql = $this->con->prepare("update clientes set nome= :nome, endereco= :endereco , telefone= :telefone, cpf= :cpf, dtNascimento= :dataNascimento, email=:email, senha=:senha where idClientes = :id");
            
            $sql->bindValue(':nome', $cliente->getNome());
            $sql->bindValue(':endereco', $cliente->getEndereco());
            $sql->bindValue(':telefone', $cliente->getTelefone());
            $sql->bindValue(':cpf', $cliente->getCpf());
            $sql->bindValue(':dataNascimento', $cliente->getDataNascimento());
            $sql->bindValue(':email', $cliente->getEmail());
            $sql->bindValue(':senha', $cliente->getSenha());
            $sql->bindValue(':id', $cliente->getId());
            
            $sql->execute();
        }
    
    }
?>