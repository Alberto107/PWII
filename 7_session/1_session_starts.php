<?php
  session_start(); //função session, todas as páginas que tiver session ela vai estar visível em todas elas, porém todas as paginas tem que ter ela

?>
<!-- tem que ficar em cima  -->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Página de Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <style>
        /* usando IA... */
      body {
        background-color: #f8f9fa;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
      }

      .login-form {
        max-width: 400px;
        width: 100%;
        padding: 2rem;
        background-color: #fff;
        border-radius: 0.5rem;
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
      }
    </style>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                 <div class="login-form">
      <h2 class="text-center mb-4">Login</h2>
      <form action="1_session_starts.php"method="POST"> <!-- modificado -->
        
        <div class="mb-3">
          <label for="email" class="form-label">E-mail</label>
          <input type="email" name="email" class="form-control" id="email" placeholder="seuemail@exemplo.com">
        </div>
        <div class="mb-3">
          <label for="senha" class="form-label">Senha</label>
          <input type="password" name="password" class="form-control" id="senha" placeholder="Digite sua senha">
        </div>
        <div class="d-grid">
          <button type="submit" class="btn btn-primary">Entrar</button>
        </div>
        <div class="mt-3 text-center">
          <a href="#">Esqueceu a senha?</a>
        </div>
      </form>
    </div>
            </div>
        </div>



    <!-- Bloco PHP, amos redirecionar a senha e o email para uma "sessão" -->
    <?php
        
        $email = isset($_POST['email']) ? $_POST['email'] : exit(); //? -> é o else, se ele existir ele mantém, caso contrário ele para (exit, sendo uma function)
        $password = isset($_POST['password']) ? $_POST['password'] : exit();

        echo $email;

        // como não temos banco de dados, vamos fazer a verificação de usuário aqui

        if($email == 'admin@hotmail.com' && $password == 'naopalmeiraworldcup'){
            $_SESSION['email'] = $email; //array privado do php, o session funciona junto com o session_start
            //redirecionar para outra página
            header('Location: 2_pagina_inicial.php');
        }else{
    ?>
        
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <div class="alert alert-warning" role="alert">
                        Login Incorreto!!!
                    </div> 
                </div>
            </div>
       

    <?php       //divide o código php para facilitar o HTML
        }
    ?>
    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html>
