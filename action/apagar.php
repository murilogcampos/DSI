<?php
  $pageTitle = 'Lista';
  require('../header.php');
?>
<body>
<main>
    <?php
         
            require('../config/config.php');
            try {
        $pdo = new PDO('mysql:host=localhost;dbname=portfolio', 'root', '');
    } catch(PDOException $e) {
        die('Erro ao conectar com o MySQL: ' . $e->getMessage());
    }
    $pdo->exec('set names utf8');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

         if(isset($_GET['id'])) {
             $id = $_GET['id'];

        
             try {
                $cmd = $pdo->prepare("DELETE FROM usuario WHERE id = :id"); 
                $cmd->bindValue(':id', $id);
                $cmd->execute();
                echo "<h1>Registro apagado com sucesso.</h1><br><br><br>";
                echo "<p><a href='../index.php'>Home</a></p>";

            } catch(Exception $e) {
                die($e->getMessage());
         }
        }
    ?>
</main>
</body>
</html>