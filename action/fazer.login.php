<?php
    require('../config/config.php');
    require('../class/UsuarioDAO.php');

    $email = $_GET['email'];
    $senha = $_GET['senha'];

    $usuariodao = new UsuarioDAO();
    $usuario = $usuariodao->getUsuario($email);

    $senhaGravada = password_hash($senha, PASSWORD_DEFAULT);

    if(password_verify($senhaGravada, $usuario->senha)) {
        session_start();
        session_regenerate_id();
        $_SESSION['usuario']['id'] = $usuario->id;
        $_SESSION['usuario']['email'] = $_GET['email'];
        header('location: '. SITE_HOME .'/index.php');
    } else {
        header('location: '. SITE_HOME .'/login.php?erro');
    }
?>