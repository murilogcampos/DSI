<?php
require_once('Conexao.php');

class UsuarioDAO {

    private $pdo;

    function __construct() {
        $this->pdo = Conexao::getConexao();
    }    

    function cadastrar($nome, $sobrenome, $email, $senha) {
        try {
            $cmd = $this->pdo->prepare("INSERT INTO usuario 
            (nome, sobrenome, email, senha) 
            VALUES (:nome, :sobrenome, :email, :senha)");
            
            $cmd->bindValue(':nome', $nome);
            $cmd->bindValue(':sobrenome', $sobrenome);
            $cmd->bindValue(':email', $email);
            $cmd->bindValue(':senha', password_hash($senha, PASSWORD_DEFAULT));
            $cmd->execute();
            
        } catch(Exception $e) {
            die($e->getMessage());
        }
    }

    function getUsuario($email) {
        try {
            $cmd = $this->pdo->prepare("SELECT id, email, senha FROM usuario 
            WHERE email = :email");
            $cmd->bindValue(':email', $email);
            $cmd->execute();

            $usuario = $cmd->fetch(PDO::FETCH_OBJ);
            return $usuario;
        } catch(Exception $e) {
            die($e->getMessage());
        }        
    }
}

?>