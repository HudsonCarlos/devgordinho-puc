<?php

// session_start();

if ($_SESSION["logado"]) {
    $_SESSION["logado"] = null;
    $_SESSION['id_usuario'] = null;
    $_SESSION['nome'] = null;
    $_SESSION['email'] = null;
    $_SESSION['perfil'] = null;
}

header('Location: index.php?acao=logout');

?>