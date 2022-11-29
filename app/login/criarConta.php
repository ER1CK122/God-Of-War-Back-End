<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <base href="http://localhost/GODOFWARR/app/">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="shortcut icon" type="images/x-icon" href="assets/images/favicon.ico">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    
    <title>God of War: Ragnarök</title>
  </head>

  <body class="vh-100">
    <main class="h-100">
      <nav class="d-flex">
        <div class="d-flex ms-auto">
          <div class="mt-3">Você já tem uma conta?</div>
          <a href="login/login.php" class="ms-2 m-2"><button class="btn btn-primary">Entrar</button></a>
        </div> 
      </nav>  
      
      <div class=" h-75 container d-flex flex-column justify-content-center ">
        <h1 class="fs-2 fw-bold mb-2">Criar Conta</h1>

        <form id="cadUsuario" method="post" action="">
          <div class="row mb-3">
            <div class="col-12 col-sm-6">
              <label for="nome">Nome de Usuario:</label>        
              <input type="text" name="nome" id="nome" class="form-control" style="margin-bottom: 8px; padding:3px" />
            </div>

            <div class="col-12 col-sm-6">
              <label for="email">E-mail:</label>
              <input type="email" name="email" id="email" class="form-control" style="margin-bottom: 8px; padding:3px" />
            </div>
          </div>

          <div class="row mb-3">
            <div class="col-12 col-sm-6">
              <label for="senha">Senha:</label>
              <input type="text" name="senha" id="senha" class="form-control" style="margin-bottom: 8px; padding:3px" />
            </div>              

          </div>

          <button type="button" class="btn btn-outline-success" id="cadastro">Enviar Cadastro</button> 
        </form>

        <div id="resposta"></div>
      </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/cadastro.js"></script>

  </body>
</html>