<?php

require_once("../../../../php/_conexao.php");


if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $nome = $_POST["nome"];
  $valor = $_POST["valor"];
  $estoque = $_POST["estoque"];

  $_con = bd_conectar();

  // prepare and bind
  $stmt = $_con->prepare("INSERT INTO `produto` 
    (`id_prod`, `nome_prod`, `valor_prod`, `estoque_prod`) 
    VALUES (NULL, ?, ?, ?)
  ");

  $stmt->bind_param("sss", $nome, $valor, $estoque);

  $stmt->execute();

  if ($stmt->affected_rows === 1) { ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <p>Produto cadastrado com sucesso!</p>
  <a href=".">Voltar</a>
</body>

</html>

<?php
  } else { ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <p>Não foi possível cadastrar o funcionário.</p>
  <a href=".">Voltar</a>
</body>

</html>

<?php
  }

  $stmt->close();

  bd_desconectar($_con);
}