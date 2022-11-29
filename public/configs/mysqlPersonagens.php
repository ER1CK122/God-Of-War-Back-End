<?php
  include "../../assets/configs/conexaoSql.php";

  $nomePersonagem = $_POST['nomePersonagem'];
  $mitologia = $_POST['mitologia'];
  $nomeMitologia = $_POST['nomeMitologia'];

  $slq = "INSERT INTO personagens VALUES (default, '$nomePersonagem', '$mitologia', '$nomeMitologia')";
  mysqli_query($conn, $sql) or die(mysqli_error($conn));
  $response = array("success" => true);
  echo json_encode($response);

?>