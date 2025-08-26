<?php
   include './usuario.php';

   //Criar uma instância da classe usuario
   //$usuario = new Usuario();

   include './header.php';
?>

<div class="container-fluid plano-fundo">
    <div class="row d-flex justify-content-center">
        <div class="col-4 d-flex justify-content-center align-items-center altura">
            <div class="card w-100 shadow d-flex justify-content-center align-items-center flex-column">
                <img src="https://cdn-icons-png.flaticon.com/512/9771/9771721.png" width="100px" >
                <div class="card-body">
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="email" class="label-control">E-mail</label>
                            <input type="text" name="email" id="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="senha" class="label-control">Senha</label>
                            <input type="password" name="senha" id="senha" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="confirmar_senha" class="label-control">Confirmar Senha</label>
                            <input type="password" name="confirmar_senha" id="confirmar_senha" class="form-control">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Cadastrar</button>
                        </div>
                        <div class="mb-3">
                            <p>Já possui conta? <a href="./form-login.php">Realize o login</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
   include './footer.php';
?>