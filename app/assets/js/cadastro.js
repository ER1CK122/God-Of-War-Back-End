$(document).ready(function () {
  $("#cadastro").click(function () {

    var data = $("#cadUsuario").serialize();

    $.ajax({
      type: "POST",
      url: "assets/configs/mysqlUsuario.php",
      data: data,
      dataType: "json",
      success: function (response) {
        window.location.href = "pages/personagens/lista.php"
      }
    });
  });
});