<?php
  header("content-type: application/json");
  header("Access-Control-Allow-Origin: *");

  require_once('../public/configs/conexaoSql.php');


  $nomezinho = $_REQUEST['email'];

  $sql = 'SELECT email, senha FROM usuarios WHERE email = "'. $nomezinho .'"';

  $res = mysqli_query($conn, $sql) or die(' Erro na query:'. $sql . '' . mysqli_error($conn));

  if (mysqli_num_rows($res) > 0) {
    $output = mysqli_fetch_all($res, MYSQLI_ASSOC);
    echo json_encode($output);
  } else {
    echo json_encode(array("message"=> "No Records Found","status"=> FALSE));
  }
?>