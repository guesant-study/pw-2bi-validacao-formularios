<?php

require_once("../../../../php/_conexao.php");


if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $cnpj = $_POST["cnpj"];
  $razaoSocial = $_POST["razaoSocial"];
  $nomeFantasia = $_POST["nomeFantasia"];
  $cep = $_POST["cep"];
  $uf = $_POST["uf"];
  $pais = $_POST["pais"];
  $cidade = $_POST["cidade"];
  $rua = $_POST["rua"];
  $numero = $_POST["numero"];
  $bairro = $_POST["bairro"];

  $_con = bd_conectar();

  $stmtEnd = $_con->prepare("INSERT INTO `endereco` (id_end, pais_end, codigo_postal_end, uf_end, cidade_end, rua_end, numero_end, bairro_end, complemento_end) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, NULL)");

  $stmtEnd->bind_param("sssssss", $pais, $cep, $uf, $cidade, $rua, $numero, $bairro);

  $stmtEnd->execute();


  // prepare and bind
  $stmt = $_con->prepare("INSERT INTO `fornecedor` 
    (`id_forn`, `cnpj_forn`, `razao_social_forn`, `nome_fantasia_forn`, `id_end_fk`) 
    VALUES (NULL, ?, ?, ?, (select MAX(id_end) FROM endereco))
  ");

  $stmt->bind_param("sss", $cnpj, $razaoSocial, $nomeFantasia);

  $stmt->execute();

  if ($stmt->affected_rows === 1) { ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <p>Fornecedor cadastrado com sucesso!</p>
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