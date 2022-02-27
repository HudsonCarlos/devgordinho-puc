<?php
    require_once ("classes/DAO/usuarioDAO.php");
    $usuarioDAO = new usuarioDAO();
    $consulta = $usuarioDAO->retornarInformacaoUsuario($_GET["id_usuario"]);
?>


<div id="dvVisualizarUsuario">
    <h1>Visualizar usuário &raquo;</h1>
    <br/>
    <ul>
        <li class="textoLista">Imagem:</li>
        <li><img src="img/<?=$consulta["imagem_id_imagem"];?>" alt="<?=$consulta["nome"];?>" class="imgVisualizar"/></li>
        <li class="textoLista">Nome:</li>
        <li><?=$consulta["nome"];?></li>
        <li class="textoLista">E-mal:</li>
        <li><?=$consulta["email"];?></li>
        <li class="textoLista">CPF:</li>
        <li><?=$consulta["cpf"];?></li>
        <li class="textoLista">Telefone:</li>
        <li><?=$consulta["telefone"];?></li>
        <li class="textoLista">Data de Nascimento:</li>
        <li><?=$consulta["datanascimento"];?></li>
        <li class="textoLista">Cidade:</li>
        <li><?=$consulta["cidade"];?></li>
        <li class="textoLista">Estado:</li>
        <li><?=$consulta["estado"];?></li>
        <li class="textoLista">Rua:</li>
        <li><?=$consulta["rua"];?></li>
        <li class="textoLista">Bairro:</li>
        <li><?=$consulta["bairro"];?></li>
        <li class="textoLista">Cep:</li>
        <li><?=$consulta["cep"];?></li>
        <li class="textoLista">Status:</li>
        <li><?php
            if ($consulta["status"] == 0) {
                echo "Ativo";
            }  else {
                echo"Bloqueado";
            }
            ?></li>
        <li class="textoLista">Perfil:</li>
        <li><?php
            if ($consulta["perfil"] == 1) {
                echo"Usuario Administrador";
            }  else {
                echo "Usuario comum";
            }
            ?></li>
    </ul>
</div>
