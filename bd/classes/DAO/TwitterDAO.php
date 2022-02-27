<?php

//require_once("conexao.php");
//require_once("fisicaDAO.php");

class TwitterDAO {

    function __construct() {
        $this->con = new Conexao();
        $this->pdo = $this->con->Connect();
    }

    public function cadastrarTwitter($texto, $data, $cod, $nome_parlamentar) {
        try {
            $idparlamentar = $this->validarParlamentar($nome_parlamentar);

            $idnegativo = $this->retornarIdNegativoAnaliseSentimento($texto, $idparlamentar);
            $idpositivo = $this->retornarIdPositivoAnaliseSentimento($texto, $idparlamentar);

            $stmt = $this->pdo->prepare("insert into bd_cup.twitter "
                    . "(descricao, data_criacao, cod_twitter, id_parlamentar, id_positivo, id_negativo) "
                    . "values "
                    . "(:texto, :data, :cod, :idparlamentar, :idpositivo, :idnegativo)");
            $param = array(
                ":texto" => $texto,
                ":data" => $data,
                ":cod" => $cod,
                ":idparlamentar" => $idparlamentar,
                ":idpositivo" => $idpositivo,
                ":idnegativo" => $idnegativo
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

    public function validarParlamentar($nome) {
        try {
            $stmt = $this->pdo->prepare("SELECT * FROM bd_cup.parlamentar WHERE nome = :nome ORDER BY id_parlamentar DESC LIMIT 1");
            $param = array(
                ":nome" => $nome,
            );
            $stmt->execute($param);
            if ($stmt->rowCount() > 0 && $stmt->rowCount() <= 1) {
                $consultaCod = $stmt->fetch(PDO::FETCH_ASSOC);
                return $consultaCod['id_parlamentar'];
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

    public function retornarIdNegativoAnaliseSentimento($texto, $idparlamentar) {
        try {
            $preguicoso = FALSE;
            $coxinha = FALSE;
            $apagado = FALSE;
            $virafolha = FALSE;
            if (rand(0, 1) == 1) {
                $preguicoso = 1;
            }
            if (rand(0, 1) == 1) {
                $coxinha = 1;
            }
            if (rand(0, 1) == 1) {
                $apagado = 1;
            }
            if (rand(0, 1) == 1) {
                $virafolha = 1;
            }
            $stmt = $this->pdo->prepare("insert into bd_cup.negativo "
                    . "(preguicoso, coxinha, apagado, virafolha, id_twitter) "
                    . "values "
                    . "(:preguicoso, :coxinha, :apagado, :virafolha, :id_twitter)");
            $param = array(
                ":preguicoso" => $preguicoso,
                ":coxinha" => $coxinha,
                ":apagado" => $apagado,
                ":virafolha" => $virafolha,
                ":id_twitter" => $idparlamentar
            );
            $stmt->execute($param);

            $stmt = $this->pdo->prepare("SELECT max(idnegativo) FROM bd_cup.negativo");
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                $consultaCod = $stmt->fetch(PDO::FETCH_ASSOC);
                return $consultaCod['max(idnegativo)'];
            } else {
                return false;
            }
        } catch (PDOException $ex) {
            echo "ERRO 06 - retornarIdNegativoAnaliseSentimento: {$ex->getMessage()}";
        }
    }

    public function retornarIdPositivoAnaliseSentimento($texto, $idparlamentar) {
        try {

            $sincero = FALSE;
            $honesto = FALSE;
            $objetivo = FALSE;
            $firme = FALSE;
            if (rand(0, 1) == 1) {
                $sincero = 1;
            }
            if (rand(0, 1) == 1) {
                $honesto = 1;
            }
            if (rand(0, 1) == 1) {
                $objetivo = 1;
            }
            if (rand(0, 1) == 1) {
                $firme = 1;
            }
            $stmt = $this->pdo->prepare("insert into bd_cup.positivo "
                    . "(sincero, honesto, objetivo, firme, id_twitter) "
                    . "values "
                    . "(:sincero, :honesto, :objetivo, :firme, :id_twitter)");
            $param = array(
                ":sincero" => $sincero,
                ":honesto" => $honesto,
                ":objetivo" => $objetivo,
                ":firme" => $firme,
                ":id_twitter" => $idparlamentar,
            );
            $stmt->execute($param);

            $stmt = $this->pdo->prepare("SELECT max(idpositivo) FROM bd_cup.positivo");
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                $consultaCod = $stmt->fetch(PDO::FETCH_ASSOC);
                return $consultaCod['max(idpositivo)'];
            } else {
                return false;
            }
        } catch (PDOException $ex) {
            echo "ERRO 07 - retornarIdPositivoAnaliseSentimento: {$ex->getMessage()}";
        }
    }

    public function manipulandoArquivo($texto, $idparlamentar) {

        //ABRE O ARQUIVO TXT
        $ponteiro = fopen("C:paginaimasters70	este.txt", "r");

        //LÊ O ARQUIVO ATÉ        CHEGAR AO FIM 
        while (!feof($ponteiro)) {
            //LÊ UMA
            //LINHA DO ARQUIVO
            $linha = fgets($ponteiro, 4096);
            //IMPRIME NA TELA        O RESULTADO
            echo $linha . "<br>";
        }//FECHA WHILE
        //FECHA        O PONTEIRO DO ARQUIVO
        fclose($ponteiro);
    }

}
?>