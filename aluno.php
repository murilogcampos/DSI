<?php
  require('config/config.php');
  require('action/verifica.sessao.php');
  $pageTitle = 'Gerenciar Alunos';
  require('header.php');
?>
  <body>
  <?php require('navigation.php'); ?>

    <!-- Page Content -->
    <div class="container">
      <div class="row my-5">
        <div class="col-lg-12">
          <form>
            <div class="form-group">
              <label for="campoNome">Nome do Aluno</label>
              <input type="text" class="form-control" id="campoNome" placeholder="Ex.: João Silva">
            </div>
            <div class="form-group">
              <label for="campoTema">Tema</label>
              <input type="text" class="form-control" id="campoTema" placeholder="Ex.: Arte Contemporânea">
            </div>
            <div class="form-group">
              <label for="campoData">Data</label>
              <input type="date" class="form-control text-center" id="campoData">
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
          </form>          
        </div>
      </div>
      <div class="row my-3">
        <div class="col-lg-12 text-center">
          <table class="table">
            <thead class="thead-light">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Aluno</th>
                <th scope="col">Tema</th>
                <th scope="col">Data</th>
              </tr>
            </thead>
            <tbody>
              <?php for($i = 1; $i <= 5; $i++) : ?>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
              <?php endfor; ?>
            </tbody>
          </table>
        </div>
      </div>      
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>