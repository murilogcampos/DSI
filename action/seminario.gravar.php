<?php
    require('../config/config.php');
    require('verifica.sessao.php');
    require('../class/SeminarioDAO.php');

    $aluno_id = $_POST['aluno_id'];
    $tema = $_POST['tema'];
    $data = $_POST['data'];

    $seminariodao = new SeminarioDAO();
    $seminariodao->gravarSeminario($aluno_id, $tema, $data);

    header('location: '. SITE_HOME .'/index.php');
?>