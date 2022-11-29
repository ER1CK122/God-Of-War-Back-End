<?php
include "../../template/header.php";

include "../../assets/configs/conexaoSql.php";
?>
    <main class="h-100 w-100">
      <?php
        include "../../template/header-2.php"
      ?>

        <div class="container pt-4">
        <h1 class="fs-2 fw-bold mb-2">Cadastrar Personagem</h1>

          <form action="">
            <div class="row mb-3">
              <div class="col-12 col-sm-6">
                <label for="nomePersonagem">Nome do Personagem:</label>        
                <input type="text" name="nomePersonagem" id="nomePersonagem" class="form-control" style="margin-bottom: 8px; padding:3px">
              </div>

              <div class="col-12 col-sm-6">
                <label for="mitologia">Qual Mitologia:</label>
                <input type="text" name="mitologia" id="mitologia" class="form-control" style="margin-bottom: 8px; padding:3px">
              </div>
            </div>

            <div class="row mb-3">
              <div class="col-12 col-sm-6">
                <label for="nomeMitologia">Nome na Mitologia:</label>
                <input type="text" name="nomeMitologia" id="nomeMitologia" class="form-control" style="margin-bottom: 8px; padding:3px">
              </div>              

            </div>

            <button type="button" class="btn btn-outline-success" id="cadastro">Enviar Cadastro</button> 
          </form>          
        </div>
    </main>
<?php
  include "../../template/footer.php";
  
  mysqli_close($conn);
?>