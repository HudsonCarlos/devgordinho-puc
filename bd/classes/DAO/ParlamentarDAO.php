<?php

require_once("conexao.php");

//require_once("fisicaDAO.php");

class ParlamentarDAO {

    function __construct() {
        $this->con = new Conexao();
        $this->pdo = $this->con->Connect();
    }

    public function cadastrarParlamentar() {
        try {


            $stmt = $this->pdo->prepare("insert into usuario "
                    . "(nome, email, telefone, senha, cpf, datanascimento, cidade, estado, rua, bairro, cep, status, perfil) "
                    . "values "
                    . "(:nome, :email, :telefone, :senha, :cpf, :datanascimento, :cidade, :estado, :rua, :bairro, :cep, :status, :perfil)");
            $param = array(
                ":nome" => $entUsuario->getNome(),
                ":email" => $entUsuario->getEmail(),
                ":telefone" => $entUsuario->getTelefone(),
                ":senha" => $entUsuario->getSenha(),
                ":cpf" => $entUsuario->getCpf(),
                ":datanascimento" => $entUsuario->getDataNascimento(),
                ":cidade" => $entUsuario->getCidade(),
                ":estado" => $entUsuario->getEstado(),
                ":rua" => $entUsuario->getRua(),
                ":bairro" => $entUsuario->getBairro(),
                ":cep" => $entUsuario->getCep(),
                ":status" => 0,
                ":perfil" => 2
                    //FAZER A CONSULTA NA TABELA IMAGEM **************************************************************
            );
            $stmt->execute($param);
            return true;
        } catch (PDOException $ex) {
            echo "ERRO 00 - cadastrarParlamentar: {$ex->getMessage()}";
        }
    }

    public function consultarIdPorPartido($partido) {
        try {
            $stmt = $this->pdo->prepare("select * from bd_cup.parlamentar where partido = :partido");

            $param = array(":partido" => $partido);
            $stmt->execute($param);

            if ($stmt->rowCount() > 0) {
                $consultaCod = $stmt->fetch(PDO::FETCH_ASSOC);
                return $consultaCod['id_parlamentar'];
            } else {
                return -1;
            }
        } catch (Exception $ex) {
            echo "ERRO 01 - consultarIdPorPartido: {$ex->getMessage()}";
        }
    }

    public function validarParlamentar($nome, $partido, $ano) {
        try {
            $stmt = $this->pdo->prepare("SELECT * FROM bd_cup.parlamentar WHERE nome = :nome and partido = :partido and periodo_inicial = :ano");
            $param = array(
                ":nome" => $nome,
                ":partido" => $partido,
                ":ano" => $ano
            );
            $stmt->execute($param);
            if ($stmt->rowCount() > 0) {
                return $stmt->fetch(PDO::FETCH_ASSOC);
            } else {
                return -1;
            }
        } catch (PDOException $ex) {
            echo "ERRO 02 - validarParlamentar: {$ex->getMessage()}";
        }
    }

    public function retornarInformacoesPartido($partido) {
        try {

            $stmt = $this->pdo->prepare("SELECT * FROM bd_cup.parlamentar WHERE partido = :partido");

            $param = array(":partido" => $partido);

            $stmt->execute($param);

            if ($stmt->rowCount() > 0) {
                return $stmt->fetch(PDO::FETCH_ASSOC);
            } else {
                return -1;
            }
        } catch (PDOException $ex) {
            echo "ERRO 03 - retornarInformacoes: {$ex->getMessage()}";
        }
    }

    public function retornarTodosParlamentares() {
        try {

            $stmt = $this->pdo->prepare("SELECT * FROM bd_cup.parlamentar");
            $stmt->execute();

            return $stmt->fetchall(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            echo "ERRO 04 - retornarTodosParlamentares: {$ex->getMessage()}";
        }
    }

    public function retornarInformacaoParlamentar($id) {
        try {

            $stmt = $this->pdo->prepare("SELECT * FROM bd_cup.parlamentar WHERE id_parlamentar = :id");
            $param = array(":id" => $id);
            $stmt->execute($param);

            if ($stmt->rowCount() > 0) {
                return $stmt->fetch(PDO::FETCH_ASSOC);
            } else {
                return -1;
            }
        } catch (PDOException $ex) {
            echo "ERRO 05 - retornarInformacaoParlamentar: {$ex->getMessage()}";
        }
    }

}

?>