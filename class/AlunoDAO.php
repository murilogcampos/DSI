<?php
require_once('Conexao.php');

class AlunoDAO {

    private $pdo;

    function __construct() {
        $this->pdo = Conexao::getConexao();
    }    

    function listarAlunos() {
        try {
            $cmd = $this->pdo->prepare("SELECT * FROM aluno");
            $cmd->execute();
            $alunos = [];
            while($result = $cmd->fetch(PDO::FETCH_OBJ)) {                
                $alunos[] = $result;
            }
            return $alunos;
        } catch(Exception $e) {
            die($e->getMessage());
        }        
    }

    function gravarAluno($nome) {
        try {
            $cmd = $this->pdo->prepare("INSERT INTO aluno (nome) VALUES (:nome)");
            $cmd->bindValue(':nome', $nome);
            $cmd->execute();
        } catch(Exception $e) {
            die($e->getMessage());
        }        
    }
}

?>