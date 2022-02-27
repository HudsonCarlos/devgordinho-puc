<?php
/**
 * Twitter API SEARCH
 * Selim Halla�
 * selimhallac@gmail.com
 */
include_once "_biblioteca/twitteroauth.php";
include_once "classes/DAO/ColetorDAO.php";
include_once "classes/Entidade/Coletor.php";
include_once "classes/DAO/TwitterDAO.php";
$objTwitterDAO = new TwitterDAO();
$objColetor = new Coletor();
$objColetorDAO = new ColetorDAO();
?>
<div id="dvEsquerda">
    <section>
        <h2>Coletor de Twitts - Banco de Dados &raquo</h2>
        <br/>
        <div id="dvConteudoPagina">
            <a href="?pagina=acessoTwitter"><img src="img/pass.png" alt="Acesso Twitter"/>CLICK PARA INSERIR O TOKEN DE ACESSO A API DO TWITTER</a>
            <div id="dvPesquisa">
                <form method="POST" name="frmPesquisa">
                    <td><input type="text" name="txtPesquisa" id="txtPesquisa" placeholder="Nome do Congressista" required/></td>
                    <td><input type="submit" value="" id="btnSubmit" name="btnSubmit"/></td>
                </form>
            </div>
        </div>
    </section>
</div>
<div>
    <h4 class="panel-title">
        <h1> ¨ </h1>
    </h4>
</div>
<div id="dvListarUsuario">
    <table>
        <thead>
            <tr>
                <th>Foto:</th>
                <th>Descrição Twitter:</th>
                <th>Data da criação:</th>
                <th>Codigo Twitter:</th>
            </tr>
        </thead>
        <?php
        if (isset($_POST['btnSubmit'])) {
            $chave = $objColetorDAO->retornarChaveAcesso();
            if (isset($chave)) {

                $objColetor->setConsumer_key($chave['consumer_key']);
                $objColetor->setConsumer_secret($chave['consumer_secret']);
                $objColetor->setAccess_token($chave['access_token']);
                $objColetor->setAccess_token_secret($chave['access_token_secret']);

                $objTwitter = new TwitterOAuth($objColetor->getConsumer_key(), $objColetor->getConsumer_secret(), $objColetor->getAccess_token(), $objColetor->getAccess_token_secret());
                $tweets = $objTwitter->get('https://api.twitter.com/1.1/search/tweets.json?q=' . $_POST['txtPesquisa'] . '&result_type=recent&count=10');
                ?>
                <tbody>
                    <?php
                    foreach ($parlamentarDAO->retornarTodosParlamentares() as $cosulta) {
                    foreach ($tweets->statuses as $key => $tweet) {
                        ?>
                        <tr>
                            <td><img src="<?= $tweet->user->profile_image_url; ?>" class="imgLista" /></td>
                            <td><?= $tweet->text; ?></td>
                            <td><?= $tweet->created_at; ?></td>
                            <td><?= $tweet->id_str; ?></td>
                            <td><a href="?pagina=visualizarUsuario&cod=<?= $cosulta["id_usuario"]; ?>"><img src="img/olho.png" alt="Visualizar"/></a></td>
                            <td><a href="?pagina=editarUsuario&cod=<?= $cosulta["id_usuario"]; ?>"><img src="img/editar.png" alt="Editar"/></a></td>
                        </tr>
                        <?php
                        $objTwitterDAO->cadastrarTwitter($tweet->text, $tweet->created_at, $tweet->id_str, $_POST['txtPesquisa']);
                    }
                    ?>
                </tbody>

                <?php
            } else {
                ?>
                <script type="text/javascript">
                    alert("É necessário inserir a chave de acessoa a API do Twitter!");
                </script>
                <?php
            }
        }
        ?>
    </table>
</div>
