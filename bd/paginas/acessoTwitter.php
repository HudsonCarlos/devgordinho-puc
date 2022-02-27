<?php
include_once "classes/Entidade/Coletor.php";
include_once "classes/DAO/ColetorDAO.php";
$objColetor = new Coletor();
$objColetorDAO = new ColetorDAO();
?>
<div id="dvCadastro">
    <h2> Chave de acesso &raquo; </h2>
    <br/>
    <div id="dvConteudoPagina">
        <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.</p>
    </div>
    <br/>
    <form method="post" name="frmChaveTwitter">
        <table>
            <tr>
                <td class="textoComum">Consumer_Key:</td>
                <td><input type="text" name="txtConsumerKey" placeholder="Chave de Acesso" class="inputFormulario" required/></td>
            </tr>
            <tr>
                <td class="textoComum">Consumer_Secret:</td>
                <td><input type="text" name="txtConsumerSecret" placeholder="Chave de Acesso" class="inputFormulario" required/></td>
            </tr>
            <tr>
                <td class="textoComum">Access_Token:</td>
                <td><input type="text" name="txtAccessToken" placeholder="Chave de Acesso" class="inputFormulario" required/></td>
            </tr>
            <tr>
                <td class="textoComum">Access_Token_Secret:</td>
                <td><input type="text" name="txtAccessTokenSecret" placeholder="Chave de Acesso" required class="inputFormulario" required/></td>
            </tr>
            <tr>
                <td colspan="2"><input style="margin: 5px;" type="submit" name="btnSubmit" value="&raquo; Inserir" class="btnSubmit" /></td>
                <a href="?pagina=coletor"><img src="img/voltar.png" alt="voltar"/>Voltar</a>
            </tr>
        </table>
    </form>
</div>
<?php
if (isset($_POST['btnSubmit'])) {
    if ($objColetor->getConsumer_key() == NULL) {
        $objColetor->setConsumer_key($_POST['txtConsumerKey']);
        $objColetor->setConsumer_secret($_POST['txtConsumerSecret']);
        $objColetor->setAccess_token($_POST['txtAccessToken']);
        $objColetor->setAccess_token_secret($_POST['txtAccessTokenSecret']);

        if ($objColetorDAO->InserirChaveAcesso($objColetor)) {
            ?>
            <script type="text/javascript">
                alert("Chave inserida!");
            </script>
            <?php
        } else {
            ?>
            <script type="text/javascript">
                alert("Erro ao inserir a chave ou ja foi inserida!")
            </script>
            <?php
        }
    } else {
        ?>
        <script type="text/javascript">
            alert("Ja foi inserido a chave!")
        </script>
        <?php
    }
}
?>