<?php
require_once("conexao.php");
//require_once("fisicaDAO.php");

class usuarioDAO {

    function __construct() {
        $this->con = new Conexao();
        $this->pdo = $this->con->Connect();
    }

    public function cadastrarUsuario(usuario $entUsuario) {
        try {
            $stmt = $this->pdo->prepare("insert into imagem "
                    . "(nome_imagem) "
                    . "values "
                    . "(:nome_imagem)");
            $param = array(":nome_imagem" => $entUsuario->getImagem());
            $stmt->execute($param);
            
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
            echo "ERRO 01: {$ex->getMessage()}";
        }
    }

    public function consultarIdPorEmail($email) {
        try {
            $stmt = $this->pdo->prepare("select id_usuario from bd_cup.usuario where email = :email");

            $param = array(":us_email" => $us_email);
            $stmt->execute($param);

            if ($stmt->rowCount() > 0) {
                $consultaCod = $stmt->fetch(PDO::FETCH_ASSOC);
                return $consultaCod['id_usuario'];
            } else {
                echo "Não entrou";
                return -1;
            }
        } catch (Exception $ex) {
            echo "ERRO 03: {$ex->getMessage()}";
        }
    }

    public function validarUsuario($us_email, $us_senha) {
        try {
            $stmt = $this->pdo->prepare("SELECT email, senha FROM bd_cup.usuario WHERE email = :us_email and senha = :us_senha");
            $param = array(
                ":us_email" => $us_email,
                "us_senha" => md5($us_senha)
            );
            $teste = $stmt->execute($param);
            if ($stmt->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $ex) {
            echo "ERRO 04: {$ex->getMessage()}";
        }
    }

    public function retornarInformacoes($us_email) {
        try {

            $stmt = $this->pdo->prepare("SELECT id_usuario, nome, email, perfil FROM bd_cup.usuario WHERE email = :us_email");

            $param = array(":us_email" => $us_email);

            $stmt->execute($param);

            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            echo "ERRO 05: {$ex->getMessage()}";
        }
    }

    public function retornarTodosUsuarios() {
        try {
            
            $stmt = $this->pdo->prepare("SELECT id_usuario, nome, email, imagem_id_imagem, perfil FROM bd_cup.usuario");
            $stmt->execute();

            return $stmt->fetchall(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            echo "ERRO 05: {$ex->getMessage()}";
        }
    }
    
    public function retornarInformacaoUsuario($us_cod){
        try {

            $stmt = $this->pdo->prepare("SELECT * FROM usuario INNER JOIN pessoa_fisica on pessoa_fisica.pessoa_us_cod = usuario.us_cod WHERE usuario.us_cod = :us_cod");
            $param = array(":us_cod" => $us_cod);
            $stmt->execute($param);

            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            echo "ERRO 05: {$ex->getMessage()}";
        }
    }
}
?>