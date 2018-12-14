<?php
  $pageTitle = 'Login';
  require('header.php');
?>
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

  <body class="bg-dark">

    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login</div>
        <div class="card-body">
          <form action="action/fazer.login.php" method="get">
            <div class="form-group">
              <div class="form-label-group">
                <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">
                <label for="inputEmail">Email address</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" id="inputPassword" name="senha" class="form-control" placeholder="Password" required="required">
                <label for="inputPassword">Password</label>
                <?php
                  if(isset($_GET['erro'])) {
                    echo '<p style="color:tomato">Usuário ou senha inválidos.</p>';
                  }
                ?>
              </div>
            </div>
            <div class="form-group">
            </div>
            <input type="submit" class="btn btn-primary btn-block" value="Login">
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="cadastro.php">Criar uma Conta</a>
            <a class="d-block small" href="index.php">Home Page</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>

</html>
