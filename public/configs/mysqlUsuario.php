<?php
  include "./conexaoSql.php";

  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];

  $slq = "INSERT INTO usuarios VALUES (default, '{$nome}', '{$email}', '{$senha}')";
  mysqli_query($conn, $sql) or die(mysqli_error($conn));
  $response = array("success" => true);
	echo json_encode($response);
?>