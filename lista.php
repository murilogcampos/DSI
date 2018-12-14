<?php
  $pageTitle = 'Lista';
  require('header.php');
?>
<section class="content-section bg-light" id="lista">
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h2>Lista</h2>
            <p class="lead mb-5"></p>
          </div>
        </div>
      </div>
        <?php
            require('config/config.php');
            try {
        $pdo = new PDO('mysql:host=localhost;dbname=portfolio', 'root', '');
    } catch(PDOException $e) {
        die('Erro ao conectar com o MySQL: ' . $e->getMessage());
    }
    $pdo->exec('set names utf8');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            try {
                // Prepara a consulta a ser executada
                $cmd = $pdo->prepare("SELECT * FROM usuario");
                // Executa a consulta
                $cmd->execute();
                $tusuario = [];
                // Percorre cada linha do resultado
                while($result = $cmd->fetch(PDO::FETCH_OBJ))
                {
                    // Armazena o resultado de cada linha em uma nova posição do array $imcs
                    $tusuario[] = $result;
                }
            } catch(Exception $e) {
                die($e->getMessage());
            }
            echo "<table class='table table-bordered'><thead><th scope='col'>#</th><th scope='col'>Nome</th><th scope='col'>Sobrenome</th><th scope='col'>email</th><th scope='col'>Opções</th></thead>";
            // Percorre cada posição do array $imcs chamando-as apenas de $imc
            foreach($tusuario as $usuario)
            {
                echo "<tr>";

                    echo "<td scope='row'>" . $usuario->id . "</td>";
                    echo "<td>" . $usuario->nome . "</td>";
                    echo "<td>" . $usuario->sobrenome . "</td>";
                    echo "<td>" . $usuario->email . "</td>";
                    echo "<td>
                        <a href='". SITE_HOME ."/action/apagar.php?id=".$usuario->id."'>Apagar</a>
                    </td>";
                echo "</tr>";
            }
            echo "</table>";
        ?>
    </section>