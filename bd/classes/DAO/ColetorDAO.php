<?php

require_once("conexao.php");

class ColetorDAO {

    function __construct() {
        $this->con = new Conexao();
        $this->pdo = $this->con->Connect();
    }

    function InserirChaveAcesso(Coletor $objColetor) {
        try {
            $stmt = $this->pdo->prepare("insert into chave_acesso_twitter "
                    . "(consumer_key, consumer_secret, access_token, access_token_secret) "
                    . "values "
                    . "(:consumer_key, :consumer_secret, :access_token, :access_token_secret)");
            $param = array(
                ":consumer_key" => $objColetor->getConsumer_key(),
                ":consumer_secret" => $objColetor->getConsumer_secret(),
                ":access_token" => $objColetor->getAccess_token(),
                ":access_token_secret" => $objColetor->getAccess_token_secret()
            );
            $stmt->execute($param);

            if ($stmt->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        } catch (Exception $ex) {
            echo "ColetorDAO 01: {$ex->getMessage()}";
        }
    }

    function retornarChaveAcesso() {
        try {
            $stmt = $this->pdo->prepare("SELECT id_chave_acesso_twitter FROM chave_acesso_twitter ORDER BY id_chave_acesso_twitter DESC LIMIT 1");
            $id = $stmt->execute();
            $id = $stmt->fetch(PDO::FETCH_ASSOC);
            
            $stmt = $this->pdo->prepare(""
                    . "select consumer_key, consumer_secret, access_token, access_token_secret "
                    . "from chave_acesso_twitter "
                    . "where id_chave_acesso_twitter = :id");
            $param = array(":id" => $id['id_chave_acesso_twitter']);
            $stmt->execute($param);
            
            if ($stmt->rowCount() > 0) {
                return $stmt->fetch(PDO::FETCH_ASSOC);
            } else {
                echo "Não entrou";
                return -1;
            }
        } catch (PDOException $ex) {
            echo "retornarChaveAcesso 02: {$ex->getMessage()}";
        }
    }
    
    function InserirTwitterApartirDoColetor(Coletor $objColetor) {
        try {
            $stmt = $this->pdo->prepare("insert into chave_acesso_twitter "
                    . "(consumer_key, consumer_secret, access_token, access_token_secret) "
                    . "values "
                    . "(:consumer_key, :consumer_secret, :access_token, :access_token_secret)");
            $param = array(
                ":consumer_key" => $objColetor->getConsumer_key(),
                ":consumer_secret" => $objColetor->getConsumer_secret(),
                ":access_token" => $objColetor->getAccess_token(),
                ":access_token_secret" => $objColetor->getAccess_token_secret()
            );
            $stmt->execute($param);

            if ($stmt->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        } catch (Exception $ex) {
            echo "ColetorDAO 01: {$ex->getMessage()}";
        }
    }

}

?>
