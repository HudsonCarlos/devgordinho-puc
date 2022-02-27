<?php
//require_once ("classes/DAO/usuarioDAO.php");
require_once ("classes/DAO/ParlamentarDAO.php");
//$usuarioDAO = new usuarioDAO();
$parlamentarDAO = new ParlamentarDAO();
?>

<section>
    <div id="dvEsquerda">
        <h2>Listas de Parlamentares &raquo;</h2>
        <br/>
        <div id="dvListarUsuario">
            <table>
                <thead>
                    <tr>
                        <th>Cod:</th>
                        <th>Foto:</th>
                        <th>Nome:</th>
                        <th>Partido:</th>
                        <th>UF:</th>
                        <th>Periodo Inicial.:</th>
                        <th>Periodo Final.:</th>
                        <th>Legislatura:</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($parlamentarDAO->retornarTodosParlamentares() as $cosulta) {
                        ?>
                        <tr>
                            <td><?= $cosulta["id_parlamentar"]; ?></td>
                            <td><img src="imgUsuarios/politico.png" class="imgLista"</td>
                            <td><?= $cosulta["nome"]; ?></td>
                            <td><?= $cosulta["partido"]; ?></td>
                            <td><?= $cosulta["uf"]; ?></td>
                            <td><?= $cosulta["periodo_inicial"]; ?></td>
                            <td><?= $cosulta["periodo_final"]; ?></td>
                            <td><?= $cosulta["legislatura"]; ?></td>
                            <td><a href="?pagina=visualizarUsuario&cod=<?= $cosulta["id_usuario"]; ?>"><img src="img/olho.png" alt="Visualizar"/></a></td>
                            <td><a href="?pagina=editarUsuario&cod=<?= $cosulta["id_usuario"]; ?>"><img src="img/editar.png" alt="Editar"/></a></td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</section>