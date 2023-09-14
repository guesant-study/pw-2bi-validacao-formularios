<?php

require_once("../../../../php/_conexao.php");

if($_SERVER["REQUEST_METHOD"] === "POST") {
  $nome = $_POST["nome"];
  $dataNascimento = $_POST["dataNascimento"];
  $email = $_POST["email"];
  $telefone = $_POST["telefone"];
  $cidade = $_POST["cidade"];
  $estado = $_POST["estado"];
  $endereco = $_POST["endereco"];
  $genero = $_POST["genero"];

  $_con = bd_conectar();

  // prepare and bind
  $stmt = $_con->prepare("INSERT INTO `cliente` 
    (`id_cli`, `nome_cli`, `telefone_cli`, `email_cli`, `genero_cli`, `id_end_fk`) 
    VALUES (NULL, ?, ?, ?, ?, NULL)
  ");

  $stmt->bind_param("ssss", $nome, $telefone, $email, $genero);

  $stmt->execute();

  if($stmt->affected_rows === 1) { ?>
  
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
      <p>Cliente cadastrado com sucesso!</p>
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
      <p>Não foi possível cadastrar o cliente.</p>
      <a href=".">Voltar</a>
    </body>
    </html>

  <?php
  }

  $stmt->close();

  bd_desconectar($_con);
}