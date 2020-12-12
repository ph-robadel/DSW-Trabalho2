<?php
    include_once("../model/modelo.php");
    include_once("Conexao.php");

    class ServicoDao {
        private $con;

        function __construct() {
            $c = new Conexao();
            $this->con = $c->getConexao();
        }

        public function incluirServico(Servico $servico) {
            $sql = $this->con->prepare("insert into servicos (idCliente, idTipo, nome, valor, descricao) values (:idCliente, :idTipo, :nome, :valor, :descricao)");
            $sql->bindValue(':idCliente', $servico->getIdCliente());
            $sql->bindValue(':idTipo', $servico->getIdTipo());
            $sql->bindValue(':nome', $servico->getNome());
            $sql->bindValue(':valor', $servico->getValor());
            $sql->bindValue(':descricao', $servico->getDescricao());
            $sql->execute();
        }

        public function getServicos() {
            $rs = $this->con->query("select s.idServico, s.idCliente, s.idTipo, c.nome as nomeCliente, t.nome as nomeTipo, s.nome, s.descricao, s.valor 
                    from servicos s INNER JOIN tipo t ON (s.idTipo = t.idTipo) INNER JOIN clientes c ON (s.idCliente = c.idClientes)");

            $lista = array();

            while ($servico = $rs->fetch(PDO::FETCH_OBJ)) {
                $lista[] = $servico;
            }
            return $lista;
        }
        
        public function getServicosCliente($idCliente) {
            $rs = $this->con->query("select * from servicos where idCliente = $idCliente");

            $lista = array();
            while ($servico = $rs->fetch(PDO::FETCH_OBJ)) {
                $lista[] = $servico;
            }

            return $lista;
        }
        
        // Tipo serviço
        public function getIdTipo($idTipo) {
            $sql = $this->con->prepare(" select nome from tipo where idTipo= :idTipo");
            $sql->bindValue(':idTipo', $idTipo);

            $sql->execute();
            $tipo = $sql->fetch(PDO::FETCH_OBJ);

            return $tipo->nome;
        }


        public function excluirServico($idServico) {
            $this->con->query("delete from servicos where idServico= $idServico");
            $this->con->query("delete from datasdisponiveis where idServico = $idServico");
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

        public function getUltimoId(){
            $sql = $this->con->query("select MAX(idServico) as maior from servicos");
            $maior = $sql->fetch(PDO::FETCH_OBJ)->maior;
            return $maior;
        }
    
    }
?>