<?php
require_once('Conexao.php');

class SeminarioDAO {

    private $pdo;

    function __construct() {
        $this->pdo = Conexao::getConexao();
    }

    function listarSeminarios() {
        try {
            $cmd = $this->pdo->prepare("
            SELECT seminario.id, seminario.aluno_id, 
            seminario.tema, seminario.data, aluno.nome FROM seminario
            JOIN aluno ON seminario.aluno_id = aluno.id");
            $cmd->execute();
            $seminarios = [];
            while($result = $cmd->fetch(PDO::FETCH_OBJ)) {                
                $seminarios[] = $result;
            }
            return $seminarios;
        } catch(Exception $e) {
            die($e->getMessage());
        }        
    }

    function gravarSeminario($aluno_id, $tema, $data) {
        try {
            $cmd = $this->pdo->prepare("
                INSERT INTO seminario (aluno_id, tema, data) 
                VALUES (:aluno_id, :tema, :data)");

            $cmd->bindValue(':aluno_id', $aluno_id);
            $cmd->bindValue(':tema', $tema);
            $cmd->bindValue(':data', $data);
            $cmd->execute();
        } catch(Exception $e) {
            die($e->getMessage());
        }        
    }
}

?>