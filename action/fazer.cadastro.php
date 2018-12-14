<?php
    require('../config/config.php');
    require('../class/UsuarioDAO.php');

    $nome = filter_var($_GET['nome']);
    $sobrenome = filter_var($_GET['sobrenome']);
    $email = filter_var($_GET['email'], FILTER_VALIDATE_EMAIL);
    $senha = $_GET['senha'];

    if($email != false) {
        $usuariodao = new UsuarioDAO();
        $usuario = $usuariodao->cadastrar($nome, $sobrenome, $email, $senha);
        header('location: '. SITE_HOME .'/login.php');
    } else {
        header('location: '. SITE_HOME .'/cadastro.php?erro');
    }
    
?>