<?php
//criando variavel, o verde é o name do HTML
  $nome = $_POST["nome"];
  $telefone = $_POST["telefone"];
  $comentario = $_POST["comentario"];
  //para conectar com o servidor, como se fosse o endereço, localhost = onde está
  //conecta com o servidor do PC que é o phpMyAdmin
  $conexao = mysqli_connect("localhost","root","mysql","agenda");

  $sql ="insert tbagenda values
  (null,'$nome', '$telefone','$comentario')";
  mysqli_query($conexao, $sql);
?>

<html>
  <head>
    <title>Cadastro</title>
  </head>
  <body>
      <h1>OK, cadastrado com sucesso</h1>
      <a href="index.html">Nova Cadastro...</a>
  </body>
</html>
