<?php
    include_once("../model/modelo.php");
    include_once("Conexao.php");

    class ServicoDao {
        private $con;

        public function ServicoDao() {
            $c = new Conexao();
            $this->con = $c->getConexao();
        }

        public function incluirServico(Servico $servico) {
            $sql = $this->con->prepare("insert into servicos (idTipo, nome, valor, descricao) values (:idTipo, :nome, :valor, :descricao)");

            $sql->bindValue(':idTipo', $servico->getIdTipo());
            $sql->bindValue(':nome', $servico->getNome());
            $sql->bindValue(':valor', $servico->getValor());
            $sql->bindValue(':descricao', $servico->getDescricao());
            
            
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



        public function excluirServico($idServico) {
            $sql = $this->con->prepare("delete from servicos where = :idServico");

            $sql->bindValue(':idServico', $idServico);

            $sql->execute();
        }

       public function getServico($idServico) {
            $sql = $this->con->prepare("select * from servicos where idServico = :idServico");

            $sql->bindValue(':idServico', $idServico);

            $sql->execute();

            return $sql->fetch(PDO::FETCH_OBJ);
        }


  public function atualizarServico(Servico $servico) {
        $sql = $this->con->prepare("insert into servicos (idTipo, nome, valor, descricao) values (:idTipo, :nome, :valor, :descricao)");
        
        $sql->bindValue(':idTipo', $servico->getIdTipo());
        $sql->bindValue(':nome', $servico->getNome());
        $sql->bindValue(':valor', $servico->getValor());
        $sql->bindValue(':descricao', $servico->getDescricao());
        
        $sql->execute();
    }
    
    }
?>