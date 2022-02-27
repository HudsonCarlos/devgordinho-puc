<?php
session_start();

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>BD Cup</title>
        <link rel="stylesheet" href="css/menu.css"/>
        <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
        <link rel="stylesheet" href="css/styleadm.css.css" type="text/css" media="all" />
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'/>
        <link rel="shoortcut icon" href="img/favicon.ico"/>
        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    </head>
    <body>
        <div id="dvInterface">
            <header>
                <div id="dvBarraTopo">
                </div>
                <div id="dvTopo">
                    <div id="dvCentroTopo">
                        <div id="dvLogo">
                            <img src="img/img-bd/logo-banco-de-dados.png" alt="LogoInicial"/>
                        </div>
                        <div id="dvPesquisa">
                            <form method="post" name="frmPesquisa">
                                <input type="text" name="txtPesquisa" id="txtPesquisa" placeholder="Pesquisa" required/>
                                <input type="submit" value="" id="btnSubmit" name="btnSubmit"/>
                            </form>
                        </div>
                    </div>
                </div>
                <nav id="nvMenu">
                    <div id="dvMenu">
                        <div id="dvCentroMenu">
                            <div id='cssmenu'>
                                <?php
                                if (isset($_SESSION['logado']) && isset($_SESSION['perfil']) == 1) {
                                    ?>
                                    <ul>
                                         <li><a href='?pagina=inicio'><span>INICIO</span></a></li>
                                        <li><a href='?pagina=coletor'><span>COLETOR</span></a></li>
                                        <li><a href='?pagina=estruturabd'><span>BANCO</span></a></li>
                                        <li><a href='?pagina=parlamentares'><span>PARLAMENTARES</span></a></li>
                                        <li><a href='?pagina=documentacao'><span>DOCUMENTACAO</span></a></li>
                                        <li><a href='?pagina=integrantes'><span>INTEGRANTES</span></a></li>
                                        <li><a href='?pagina=listarUsuario'><span>USUARIOS</span></a></li>
                                        <li><a href='?pagina=contato'><span>CONTATO</span></a></li>
                                        <li class='last'><a href='?pagina=sair'><span>SAIR</span></a></li>
                                    </ul>
                                <?php } else {
                                    ?>
                                    <ul>
                                        <li><a href='?pagina=inicio'><span>INICIO</span></a></li>
                                        <li><a href='?pagina=coletor'><span>COLETOR</span></a></li>
                                        <li><a href='?pagina=estruturabd'><span>ESTRUTURA BD</span></a></li>
                                        <li><a href='?pagina=parlamentares'><span>PARLAMENTARES</span></a></li>
                                        <li><a href='?pagina=bdcup'><span>BD CUP</span></a></li>
                                        <li><a href='?pagina=documentacao'><span>DOCUMENTACAO</span></a></li>
                                        <li><a href='?pagina=integrantes'><span>INTEGRANTES</span></a></li>
                                        <li><a href='?pagina=cadastro'><span>CADASTRO</span></a></li>
                                        <li class='last'><a href='?pagina=contato'><span>CONTATO</span></a></li>
                                    </ul>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </nav>
            </header>
            <section>
                <div id="dvCentro">
                    <div id="dvCentroEsquerda">
                        <div id="dvEsquerda">
                            <?php
                            if (isset($_GET['pagina'])) {
                                $pagina = $_GET['pagina'];
                                switch ($pagina) {
                                    case "inicio":
                                        include_once ("paginas/inicio.php");
                                        break;
                                    case "coletor":
                                        include_once ("paginas/coletor.php");
                                        break;
                                    case "estruturabd":
                                        include_once ("paginas/estruturabd.php");
                                        break;
                                    case "parlamentares":
                                        include_once ("paginas/parlamentares.php");
                                        break;
                                    case "bdcup":
                                        include_once ("paginas/bdcup.php");
                                        break;
                                    case "documentacao":
                                        include_once ("paginas/documentacao.php");
                                        break;
                                    case "integrantes":
                                        include_once ("paginas/integrantes.php");
                                        break;
                                    case "cadastro":
                                        include_once ("paginas/cadastro.php");
                                        break;
                                    case "contato":
                                        include_once ("paginas/contato.php");
                                        break;
                                    case "acessoTwitter":
                                        include_once ("paginas/acessoTwitter.php");
                                        break;
                                    case "listarUsuario":
                                        if (isset($_SESSION['logado']) && isset($_SESSION['perfil']) == 1) {
                                            include_once ("paginas/paginas_adm/usuarios/listar.php");
                                        } else {
                                            include_once ("paginas/inicio.php");
                                        }
                                        break;
                                    case "sair":
                                        if (isset($_SESSION['logado']) && isset($_SESSION['perfil']) == 1) {
                                            include_once ("paginas/logout.php");
                                        } else {
                                            header('Location: adm/index.php');
                                        }
                                        break;
                                    default:
                                        include_once ("paginas/inicio.php");
                                }
                            } else {
                                include_once ("paginas/inicio.php");
                            }
                            ?>
                        </div>
                    </div>
<!--                    <aside>
                        <div id="dvDireita">
                            <?php
                            include_once("paginas/aside.php");
                            ?>
                        </div>
                    </aside>-->
                    <div class="clear"></div>
                </div>
                <footer id="foRodape">
                    <hgroup>
                        <p>&COPY; 2016 - by Hudson S.Carlos</p>
                        <h>
                            <a href="https://www.facebook.com/profile.php?id=100002971155963&fref=ts" target="_blank">Facebook</a> &nbsp;-&nbsp;
                            <a href="https://twitter.com/DuduTisuvax" target="_blank">Twitter</a>
                        </h>
                    </hgroup>
                </footer>
            </section>
        </div>
    </body>
</html>
