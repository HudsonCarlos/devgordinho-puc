<?php
require_once ("classes/DAO/usuarioDAO.php");
$usuarioDAO = new usuarioDAO();
?>
<div id="dvListarUsuario">
    <h1>Listar Usuarios &raquo</h1>
    <br/>
    <table>
        <thead>
            <tr>
                <th>Codigo:</th>
                <th>Imagem:</th>
                <th>Nome:</th>
                <th>E-mail:</th>
                <th>Perfil:</th>
                <th>Visualizar:</th>
                <th>Editar:</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($usuarioDAO->retornarTodosUsuarios() as $cosulta) {
                ?>
                <tr>
                    <td><?= $cosulta["id_usuario"]; ?></td>
                    <td><img src="imgUsuarios/<?= $cosulta["imagem_id_imagem"]; ?>.jpg" alt="<?= $cosulta["nome"]; ?>" class="imgLista"</td>
                    <td><?= $cosulta["nome"]; ?></td>
                    <td><?= $cosulta["email"]; ?></td>
                    <td><?php
                        if ($cosulta["perfil"] != 1) {
                            echo"Usuários Comum";
                        } else {
                            echo"Usuário Administrador";
                        }
                        ?></td>
                    <td><a href="?pagina=visualizarUsuario&cod=<?=$cosulta["id_usuario"];?>"><img src="img/olho.png" alt="Visualizar"/></a></td>
                    <td><a href="?pagina=editarUsuario&cod=<?=$cosulta["id_usuario"];?>"><img src="img/editar.png" alt="Editar"/></a></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
</div>