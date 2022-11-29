<?php
include "../../template/header.php";

include "../../assets/configs/conexaoSql.php";

$query = "SELECT*FROM lugares";

$resul_query = mysqli_query($conn, $query) or die(' Erro na query:'. $query . '' . mysqli_error($conn));

?>
      <main class="h-100 w-100">
      <?php
        include "../../template/header-2.php"
      ?>

      <div class="container">
        <div class="d-flex" style="margin-top: 10px;">
          <h1 class="fs-2 fw-bold mb-2">Lista de Lugares de God of War: Ragnarök</h1>

          <a href="pages/lugares/cadastro.php" class="ms-5"><button class="btn btn-outline-success" style="margin-top: 5px;">Cadastrar Lugares</button></a>
        </div>
        <div>Pesquisar</div>
        <input type="text" name="" id="filter" class="border rounded ps-1" style="margin-bottom: 10px;">

        <table class="table table-dark table-striped">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nome dos Lugares</th>
              <th>Mitologia</th>
              <th>Nome na Mitologia</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody id="myTable">
          <?php 
            while($dados = mysqli_fetch_array($resul_query)){; 
          ?>
            <tr>
              <td><?php echo $dados["id"];?></td>
              <td><?php echo $dados["nomeLugares"];?></td>
              <td><?php echo $dados["mitologia"];?></td>
              <td><?php echo $dados["nomeMitologia"];?></td>
              <td>Vivo</td>
            </tr>
          <?php 
            }         
          ?>
          </tbody>
        </table>
      </div>
    </main>
  </div>

<?php
  include "../../template/footer.php";
  
  mysqli_close($conn);
?>