<?php
    include_once("../model/modelo.php");
    include_once("../dao/Conexao.php");

    class TipoDao {
        private $con;

        public function TipoDao() {
            $c = new Conexao();
            $this->con = $c->getConexao();
        }

        public function incluirTipo(Tipo $tipo) {
            $sql = $this->con->prepare("insert into tipo (nome, valor) values (:nome, :valor)");

        
            $sql->bindValue(':nome', $tipo->getNome());
            $sql->bindValue(':valor', $tipo->getValor());
            
            $sql->execute();
        }

        private function converteDataMySQL($data) {
            return date('Y-m-d', $data);
        }

        public function getTipos() {
            $rs = $this->con->query("select * from tipo");

            $lista = array();

            while ($tipo = $rs->fetch(PDO::FETCH_OBJ)) {
                $lista[] = $tipo;
            }
            return $lista;
        }

        public function excluirTipo($idTipo) {
            $sql = $this->con->prepare("delete from tipo where idTipo = :idTipo");

            $sql->bindValue(':idTipo', $idTipo);

            $sql->execute();
        }

       public function getTipo($idTipo) {
            $sql = $this->con->prepare("select * from tipo where idTipo = :idTipo");

            $sql->bindValue(':idTipo', $idTipo);

            $sql->execute();

            return $sql->fetch(PDO::FETCH_OBJ);
        }


  public function atualizarTipo(Tipo $tipo) {
        $sql = $this->con->prepare("update tipo set nome= :nome, valor= :valor  where idTipo= :idTipo");
        
            $sql->bindValue(':nome', $tipo->getNome());
            $sql->bindValue(':endereco', $tipo->getValor());
            ;
        
        $sql->execute();
    }
    
    }
?>