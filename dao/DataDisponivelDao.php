<?php
    include_once("../model/modelo.php");
    include_once("Conexao.php");

    class DataDisponivelDao{
        private $con;

        public function DataDisponivelDao() {
            $c = new Conexao();
            $this->con = $c->getConexao();
        }

        public function incluirData($idServico, $data) {
            $sql = $this->con->prepare("insert into datasdisponiveis (idServico, data, disponivel) values (:idServico, :data, 1)");
            $sql->bindValue(':idServico', $idServico);
            $sql->bindValue(':data', $data);
            $sql->execute();
        }

        public function getDatas($idServico) {
            $rs = $this->con->query("select * from datasdisponiveis where idServico = :idServico");
            $sql->bindValue(':idServico', $idServico);
            $sql->execute();

            $lista = array();
            while ($datas = $rs->fetch(PDO::FETCH_OBJ)) {
                $lista[] = $datas;
            }
            return $lista;
        }
    
    }
?>