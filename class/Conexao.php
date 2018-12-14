<?php
require_once('C:/xampp/htdocs/portfolio/config/config.php');

class Conexao {
    static function getConexao() {
        try {
            $pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PWD);
        } catch(PDOException $e) {
            die('Erro ao conectar com o MySQL: ' . $e->getMessage());
        }
        $pdo->exec('set names utf8');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }
}
?>