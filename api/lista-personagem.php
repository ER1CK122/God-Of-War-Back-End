<?php
  require_once('../public/configs/conexaoSql.php');

  $slq = "SELECT * FROM personagens";
  mysqli_query($conn, $slq) or die(mysqli_error($conn));
  $response = array("success" => true);
  echo json_encode($response);
?>        