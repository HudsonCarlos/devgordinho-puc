<?php
require_once ("./classes/upLoad.php");
require_once("./classes/DAO/usuarioDAO.php");
require_once ("./classes/Entidade/usuario.php");

$upLoad = new UpLoad();
$usuarioDAO = new UsuarioDAO();
$usuario = new Usuario();
?>

<div id="dvCadastro">
    <h2> Cadastro &raquo; </h2>
    <br/>

    <div id="dvConteudoPagina">
        <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.</p>
    </div>
    <br/>

    <form method="post" name="frmCadastro" enctype="multipart/form-data"> <!-- Sem isto o Upload não funciona-->
        <table>
            <tr>
                <td class="textoComum">Nome:</td>
                <td><input type="text" name="txtNome" placeholder="Nome Completo" class="inputFormulario" required/></td>
            </tr>
            <tr>
                <td class="textoComum">E-mail:</td>
                <td><input type="email" name="txtEmail" placeholder="Ex: teste@teste.com" class="inputFormulario" required/></td>
            </tr>
            <tr>
                <td class="textoComum">Telefone:</td>
                <td><input type="tel" name="txtTelefone" placeholder="Ex: (00)00000-0000" class="inputFormulario" required=""/></td>
            </tr>
            <tr>
                <td class="textoComum">Senha:</td>
                <td><input type="password" name="txtSenha" placeholder="********" required="" id="senha1" class="inputFormulario"/></td>
            </tr>
            <tr>
                <td class="textoComum">Confirmar Senha:</td>
                <td><input type="password" name="txtConfimarSenha" placeholder="********" required="" id="senha2" class="inputFormulario"/></td>
            </tr>
            <tr>
                <td class="textoComum">Imagem:</td>
                <td><input type="file" name="flUsuario" placeholder="" id="" class="inputFormulario"/></td>
            </tr>
            <tr>
                <td class="textoComum">CPF:</td>
                <td><input type="text" name="txtCPF" placeholder="Ex: 00000000-000" required="" class="inputFormulario"/></td>
            </tr>
            <tr>
                <td class="textoComum">Data Nascimento:</td>
                <td><input type="date" name="txtDataNascimento" required class="inputFormulario"</td>
            </tr>
            <tr>
                <td class="textoComum">Rua:</td>
                <td><input type="text" name="txtRua" placeholder="Ex: Av. Do Contorno" class="inputFormulario"/></td>
            </tr>
            <tr>
                <td class="textoComum">Bairro:</td>
                <td><input type="text" name="txtBairro" placeholder="Ex: Barro Preto" required class="inputFormulario"/></td>
            </tr>
            <tr>
                <td class="textoComum">Cep:</td>
                <td><input type="text" name="txtCep" placeholder="Ex: 00000-000" class="inputFormulario"/> </td>
            </tr>
            <tr>
                <td class="textoComum">Cidade:</td>
                <td><input type="text" name="txtCidade" placeholder="Ex: Betim" class="inputFormulario"/></td>
            </tr>
            <tr>
                <td class="textoComum">Estado:</td>
                <td>
                    <select name="slEstado" class="inputFormulario">
                        <option value="">Selecione o Estado</option>
                        <option value="AC">Acre</option>
                        <option value="AL">Alagoas</option>
                        <option value="AP">Amapá</option>
                        <option value="AM">Amazonas</option>
                        <option value="BA">Bahia</option>
                        <option value="CE">Ceará</option>
                        <option value="DF">Distrito Federal</option>
                        <option value="ES">Espirito Santo</option>
                        <option value="GO">Goiás</option>
                        <option value="MA">Maranhão</option>
                        <option value="MS">Mato Grosso do Sul</option>
                        <option value="MT">Mato Grosso</option>
                        <option value="MG">Minas Gerais</option>
                        <option value="PA">Pará</option>
                        <option value="PB">Paraíba</option>
                        <option value="PR">Paraná</option>
                        <option value="PE">Pernambuco</option>
                        <option value="PI">Piauí</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="RN">Rio Grande do Norte</option>
                        <option value="RS">Rio Grande do Sul</option>
                        <option value="RO">Rondônia</option>
                        <option value="RR">Roraima</option>
                        <option value="SC">Santa Catarina</option>
                        <option value="SP">São Paulo</option>
                        <option value="SE">Sergipe</option>
                        <option value="TO">Tocantins</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="checkbox" name="ckTermo" id="ckTermo" required/><label for="ckTermo">Eu concordo com os termos de uso acima.</label>
                </td>
            </tr>
            <tr>
                <td colspan="2"><input style="margin: 5px;" type="submit" name="btnSubmit" value="&raquo; Cadastrar" class="btnSubmit" /></td>
            </tr>
        </table>
    </form>

</div>

<?php
if (isset($_POST['btnSubmit'])) {

    if ($_POST['ckTermo']) {
        $nomeImagem = $upLoad->UpLoadFile($_FILES['flUsuario'], "imgUsuarios/", ".jpg");

        if ($nomeImagem != null) {
            $usuario->setNome($_POST['txtNome']);
            $usuario->setEmail($_POST['txtEmail']);
            $usuario->setTelefone($_POST['txtTelefone']);
            $usuario->setCpf($_POST['txtCPF']);
            $usuario->setSenha(md5($_POST['txtSenha']));
            $usuario->setImagem($nomeImagem);
            $usuario->setDataNascimento($_POST['txtDataNascimento']);
            $usuario->setCidade($_POST['txtCidade']);
            $usuario->setEstado($_POST['slEstado']);
            $usuario->setRua($_POST['txtRua']);
            $usuario->setBairro($_POST['txtBairro']);
            $usuario->setCep($_POST['txtCep']);

            if ($usuarioDAO->cadastrarUsuario($usuario)) {
                ?>
                <script type="text/javascript">
                    alert("Cadastrado com sucesso!");
                </script>
                <?php
            } else {
                ?>
                <script type="text/javascript">
                    alert("Erro ao cadastrar!")
                </script>
                <?php
            }
        } else {
            ?>
            <script type="text/javascript">
                alert("Algo deu errado com a imagem!")
            </script>
            <?php
        }
    }
}
?>