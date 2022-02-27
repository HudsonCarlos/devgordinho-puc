<?php
require_once("../classes/DAO/usuarioDAO.php");
$usuarioDAO = new usuarioDAO();
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Login</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/styleadm.css" type="text/css" media="all"/>
        <link rel="stylesheet" href="../css/style.css" type="text/css" media="all" />
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'/>
    </head>
    <body>
        <div id="dvCentroLogin">
            <header>
                <div id="dvTopoLogin">
                    <img src="../img/img-bd/logo-banco-de-dados.png" alt="LogoLogin"/>
                </div>
            </header>
            <section>
                <form method="post" name="frmLogin">
                    <div id="dvEmail">
                        <img src="../img/user.png" alt="E-mail"/>
                        <input type="email" name="txtEmail" class="inputLogin" placeholder="exemplo@dominio.com" required/>
                    </div>
                    <div id="dvPass">
                        <img src="../img/pass.png" alt="Password"/>
                        <input type="password" name="txtPassword" class="inputLogin" placeholder="********" required/>
                    </div>
                    <input type="submit" name="btnSubmit" value="Login" class="btnSubmit"/> <a href="#">Recuperar senha</a>
                </form>
            </section>
        </div>
    </body>
    <footer id="foRodape">
        <hgroup>
            <p>&COPY; 2016 - by Hudson S.Carlos</p>
            <h>
                <a href="https://www.facebook.com/profile.php?id=100002971155963&fref=ts" target="_blank">Facebook</a> &nbsp;-&nbsp;
                <a href="https://twitter.com/DuduTisuvax" target="_blank">Twitter</a>
            </h>
        </hgroup>
    </footer>
</html>
<?php
if (isset($_POST['btnSubmit'])) {
    if ($usuarioDAO->validarUsuario($_POST["txtEmail"], $_POST["txtPassword"])) {
        $consulta = $usuarioDAO->retornarInformacoes($_POST["txtEmail"]);
        $_SESSION['id_usuario'] = $consulta['id_usuario'];
        $_SESSION['nome'] = $consulta['nome'];
        $_SESSION['email'] = $consulta['email'];
        $_SESSION['logado'] = true;
        $_SESSION['perfil'] = $consulta['perfil'];
        $us_perfil = $consulta['perfil'];
            header('Location: ../index.php');
        ?>
        <script>
            document.location.href = "painel.php";
        </script>  
        <?php
    } else {
        ?>
        <script>
            document.getElementById("resultado").innerHTML = "Usuário ou senha inválido";
        </script>  
        <?php
    }
}

if (isset($_GET["acao"])) {
    $pagina = $_GET["acao"];
    switch ($pagina) {
        case "invalido":
            ?>
            <script>
                document.getElementById("resultado").innerHTML = "Autenticação requerida.";
            </script>  
            <?php
            break;
        case "logout":
            ?>
            <script>
                document.getElementById("resultado").innerHTML = "Você efetuou o Logout.";
            </script>  
            <?php
            break;
    }
}
?>