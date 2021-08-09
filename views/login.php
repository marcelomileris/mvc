
    <style>
      html,
      body {
        height: 100%;
      }

      body {
        display: -ms-flexbox;
        display: -webkit-box;
        display: flex;
        -ms-flex-align: center;
        -ms-flex-pack: center;
        -webkit-box-align: center;
        align-items: center;
        -webkit-box-pack: center;
        justify-content: center;
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        width: 100%;
        max-width: 330px;
        padding: 15px;
        margin: 0 auto;
      }
      .form-signin .checkbox {
        font-weight: 400;
      }
      .form-signin .form-control {
        position: relative;
        box-sizing: border-box;
        height: auto;
        padding: 10px;
        font-size: 16px;
      }
      .form-signin .form-control:focus {
        z-index: 2;
      }
      .form-signin input[type="email"] {
        margin-bottom: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
      }
      .form-signin input[type="password"] {
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
      }
    </style>


    <form class="form-signin" action="" method="post" onsubmit="return false;">
        <div class="text-center">
            <img class="mb-4" src="<?php echo BASE_URL;?>assets/img/login.png" alt="" width="72" height="72">    
            <h1 class="h3 mb-3 font-weight-normal">CRUD - Login</h1>
        </div>
        <label for="txtUser" class="sr-only">Email</label>
        <input type="text" id="txtUser" name="txtUser" class="form-control" placeholder="Usuário" required autofocus value="ADMIN">
        
        <label for="txtPass" class="sr-only">Senha</label>
        <input type="password" id="txtPass" name="txtPass" class="form-control" placeholder="Senha" required value="123456">
    
        <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
    </form>

  <script src="<?php echo BASE_URL;?>assets/js/login.js"></script>
