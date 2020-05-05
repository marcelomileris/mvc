<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="">
    <meta name="twitter:creator" content="">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Bracket">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="">

    <!-- Facebook -->
    <meta property="og:url" content="">
    <meta property="og:title" content="">
    <meta property="og:description" content="">

    <meta property="og:image" content="">
    <meta property="og:image:secure_url" content="">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Painel Administrativo | COI</title>

    <!-- vendor css -->
    <link href="<?php echo BASE_URL;?>assets/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo BASE_URL;?>assets/lib/Ionicons/css/ionicons.css" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="<?php echo BASE_URL;?>assets/css/bracket.css">
  </head>

  <body>

    <div class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">

      <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white rounded shadow-base">
        <div class="signin-logo tx-center tx-28 tx-bold tx-inverse"><span class="tx-normal">[</span> COI <span class="tx-normal">]</span></div>
        <div class="tx-center mg-b-60">Painel Administrativo</div>

        <div class="form-group">
          <input type="text" class="form-control" placeholder="Usuário" id="txtUser">
        </div><!-- form-group -->
        <div class="form-group">
          <input type="password" class="form-control" placeholder="Senha" id="txtPass">
        </div><!-- form-group -->
        <button type="submit" class="btn btn-info btn-block" id="btnLogin">Login</button>

      </div><!-- login-wrapper -->
    </div><!-- d-flex -->

    <script src="<?php echo BASE_URL;?>assets/lib/jquery/jquery.js"></script>
    <script src="<?php echo BASE_URL;?>assets/lib/popper.js/popper.js"></script>
    <script src="<?php echo BASE_URL;?>assets/lib/bootstrap/bootstrap.js"></script>

    <script src="<?php echo BASE_URL;?>assets/js/login.js"></script>

  </body>
</html>
