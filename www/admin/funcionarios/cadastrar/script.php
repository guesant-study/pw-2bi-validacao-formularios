<?php

require_once("../../../../php/_conexao.php");


if ($_SERVER["REQUEST_METHOD"] === "POST") {
  echo "Received POST data: ";
  $nome = $_POST["nome"];
  $dataNascimento = $_POST["dataNascimentoInput"];
  $email = $_POST["email"];
  $telefone = $_POST["telefone"];
  $cpf = $_POST["cpf"];
  $genero = $_POST["genero"];
  $cep = $_POST["cep"];
  $uf = $_POST["estado"];
  $pais = $_POST["pais"];
  $cidade = $_POST["cidade"];
  $rua = $_POST["rua"];
  $numero = $_POST["numero"];
  $bairro = $_POST["bairro"];


  function dateFormat($dataNascimento)
  {
    $dataNascimento = explode("/", $dataNascimento);
    $dataNascimento = array_reverse($dataNascimento);
    $dataNascimento = implode("-", $dataNascimento);
    return $dataNascimento;
  }

  $dataNascimento = dateFormat($dataNascimento);

  $_con = bd_conectar();

  $stmtEnd = $_con->prepare("INSERT INTO `endereco` (id_end, pais_end, codigo_postal_end, uf_end, cidade_end, rua_end, numero_end, bairro_end, complemento_end) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, NULL)");

  $stmtEnd->bind_param("sssssss", $pais, $cep, $uf, $cidade, $rua, $numero, $bairro);

  $stmtEnd->execute();

  // prepare and bind
  $stmt = $_con->prepare("INSERT INTO `funcionario` 
    (`id_func`, `nome_func`, `data_nascimento_func`, `cpf_func`, `telefone_func`, `genero_func`, `id_end_fk`) 
    VALUES (NULL, ?, ?, ?, ?, ?, (select MAX(id_end) FROM endereco))
  ");

  $stmt->bind_param("sssss", $nome, $dataNascimento, $cpf, $telefone, $genero);

  $stmt->execute();

  if ($stmt->affected_rows === 1) { ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <p>Funcionário cadastrado com sucesso!</p>
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