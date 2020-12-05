<?php
    include_once("../model/modelo.php");
    include_once("../dao/Conexao.php");

    class ServicoDao {
        private $con;

        public function ServicoDao() {
            $c = new Conexao();
            $this->con = $c->getConexao();
        }

        public function incluirServico(Servico $servico) {
            $sql = $this->con->prepare("insert into servicos (nome, valor) values (:nome, :valor)");

        
            $sql->bindValue(':nome', $servico->getNome());
            $sql->bindValue(':valor', $servico->getValor());
            
            $sql->execute();
        }

        private function converteDataMySQL($data) {
            return date('Y-m-d', $data);
        }

        public function getServicos() {
            $rs = $this->con->query("select * from servicos");

            $lista = array();

            while ($servico = $rs->fetch(PDO::FETCH_OBJ)) {
                $lista[] = $servico;
            }
            return $lista;
        }
        
        // Tipo serviço
        public function getId_tipo($idTipo) {
            $sql = $this->con->prepare(" select nome from tipo where idTipo= :idTipo");
            $sql->bindValue(':idTipo', $idTipo);

            $sql->execute();
            $tipo = $sql->fetch(PDO::FETCH_OBJ);

            return $tipo->nome;

        }



        public function excluirServico($cpf) {
            $sql = $this->con->prepare("delete from servicos where idServico= :idServico");

            $sql->bindValue(':cpf', $cpf);

            $sql->execute();
        }

       public function getServico($cpf) {
            $sql = $this->con->prepare("select * from servicos where idServico = :idServico");

            $sql->bindValue(':cpf', $cpf);

            $sql->execute();

            return $sql->fetch(PDO::FETCH_OBJ);
        }


  public function atualizarServico(Servico $servico) {
        $sql = $this->con->prepare("update servicos set Nome= :nome, Endereco= :endereco ,Telefone=: telefone, Cpf= :cpf, DtNascimento= :dataNascimento, Email= :email, Senha= :senha where idServico = :idServico");
        
            $sql->bindValue(':nome', $servico->getNome());
            $sql->bindValue(':endereco', $servico->getEndereco());
            $sql->bindValue(':telefone', $servico->getTelefone());
            $sql->bindValue(':cpf', $servico->getCpf());
            $sql->bindValue(':dataDeNascimento', $this->converteDataMySQL($servico->getDataNascimento()));
            $sql->bindValue(':email', $servico->getEmail());
            $sql->bindValue(':senha', $servico->getSenha());
        
        $sql->execute();
    }
    
    }
?>