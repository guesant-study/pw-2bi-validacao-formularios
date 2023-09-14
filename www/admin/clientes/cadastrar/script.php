<?php

require_once("../../../../php/_conexao.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $nome = $_POST["nome"];
  $dataNascimento = $_POST["dataNascimento"];
  $email = $_POST["email"];
  $telefone = $_POST["telefone"];
  $genero = $_POST["genero"];


  $enderecoPais = "Brasil";
  $enderecoCep = $_POST["enderecoCep"];
  $enderecoUf = $_POST["enderecoUf"];
  $enderecoCidade = $_POST["enderecoCidade"];
  $enderecoRua = $_POST["enderecoRua"];
  $enderecoNumero = $_POST["enderecoNumero"];
  $enderecoBairro = $_POST["enderecoBairro"];
  $enderecoComplemento = "";

  $_con = bd_conectar();

  $stmtEndereco = $_con->prepare("INSERT INTO `endereco` (`id_end`, `pais_end`, `codigo_postal_end`, `uf_end`, `cidade_end`, `rua_end`, `numero_end`, `bairro_end`, `complemento_end`) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?)");

  $stmtEndereco->bind_param("sssssiss", $enderecoPais, $enderecoCep, $enderecoUf, $enderecoCidade, $enderecoRua, $enderecoNumero, $enderecoBairro, $enderecoComplemento);

  $stmtEndereco->execute();
  $enderecoId = $stmtEndereco->insert_id;

  $stmtCliente = $_con->prepare("INSERT INTO `cliente` 
    (`id_cli`, `nome_cli`, `telefone_cli`, `email_cli`, `genero_cli`, `id_end_fk`) 
    VALUES (NULL, ?, ?, ?, ?, ?)
  ");

  $stmtCliente->bind_param("ssssi", $nome, $telefone, $email, $genero, $enderecoId);

  $stmtCliente->execute();

  if ($stmtCliente->affected_rows === 1) { ?>

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

  $stmtCliente->close();

  bd_desconectar($_con);
}