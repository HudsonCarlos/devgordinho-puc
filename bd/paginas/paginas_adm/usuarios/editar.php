<?php
    require_once ("../classes/DAO/usuarioDAO.php");
    $usuarioDAO = new usuarioDAO();
    $consulta = $usuarioDAO->retornarInformacaoUsuario($_GET["cod"]);
?>

<div id="dvEditarUsuarios">
    <h1>Editar usuário &raquo;</h1>
    <br/>
    <ul>
        <li class="textoLista">Imagem:</li>
        <li><img src="../imgUsuarios/<?=$consulta["us_imagem"];?>" alt="<?=$consulta["us_nome"];?>" class="imgVisualizar"/></li>
        <li class="textoLista">Nome:</li>
        <li><?=$consulta["us_nome"];?></li>
        <li class="textoLista">E-mal:</li>
        <li><?=$consulta["us_email"];?></li>
        <li class="textoLista">CPF:</li>
        <li><?=$consulta["pesf_cpf"];?></li>
        <li class="textoLista">Telefone:</li>
        <li><?=$consulta["us_telefone"];?></li>
        <li class="textoLista">Data de Nascimento:</li>
        <li><?=$consulta["us_datanascimento"];?></li>
        <li class="textoLista">Cidade:</li>
        <li><?=$consulta["us_cidade"];?></li>
        <li class="textoLista">Estado:</li>
        <li><?=$consulta["us_estado"];?></li>
        <li class="textoLista">Rua:</li>
        <li><?=$consulta["us_rua"];?></li>
        <li class="textoLista">Bairro:</li>
        <li><?=$consulta["us_bairro"];?></li>
        <li class="textoLista">Cep:</li>
        <li><?=$consulta["us_cep"];?></li>
        <li class="textoLista">Status:</li>
        <li><?php
            if ($consulta["us_status"] == 0) {
                echo "Ativo";
            }  else {
                echo"Bloqueado";
            }
            ?></li>
        <li class="textoLista">Perfil:</li>
        <li><?php
            if ($consulta["us_perfil"] == 1) {
                echo"Usuario comum";
            }  else {
                echo "Usuario Administrador";
            }
            ?></li>
    </ul>
</div>
