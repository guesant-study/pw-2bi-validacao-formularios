<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../../../css/bootstrap.min.css" />
  <link rel="stylesheet" href="../../../css/geral.css" />
  <link rel="stylesheet" href="../../../css/pages/cadastrarFornecedores.css" />

  <title>Cadastrar Produtos</title>

  <script type="module" src="../../../js/pw-web-components/pw-web-components.esm.js"></script>
  <script nomodule src="../../../js/pw-web-components/pw-web-components.js"></script>
</head>

<body data-pw-config-base-url="../../../">
  <pw-header active-link="painel"></pw-header>

  <pw-painel-layout active-link="produtos-cadastrar">
    <div class="app-container">
      <h1 class="principalText">Cadastrar Produtos</h1>
    </div>

    <form class="app-container row g-3 needs-validation" action="script.php" method="POST" novalidate>
      <div class="col-md-4">
        <label for="validationCustom01" class="form-label cnpj">Nome do Produto</label>
        <input type="text" name="nome" class="form-control" id="validationCustom01" required />
        <div class="invalid-feedback">Insira o nome!</div>
      </div>
      <div class="col-md-4">
        <label for="validationCustom02" class="form-label quantidade">Quantidade</label>
        <input type="text" class="form-control" name="estoque" id="validationCustom02" required />
        <div class="invalid-feedback">Insira a quantidade</div>
      </div>
      <div class="col-md-4 campo-gp">
        <label for="field-data-inicio" class="form-label"> Data de Validade </label>

        <input required minlength="3" class="form-control" type="datetime-local" id="field-data-inicio"
          form="form-principal" name="inputCadastrarPromocaoDataInicio" />
      </div>

      <div class="col-md-8">
        <label for="validationCustom03" class="form-label">Marca</label>
        <input type="text" class="form-control" id="validationCustom03" required />
        <div class="invalid-feedback">Insira uma marca</div>
      </div>

      <div class="col-md-4">
        <label for="validationCustom04" class="form-label preco-de-custo">Preço de Venda (R$)</label>
        <input type="text" class="form-control" name="valor" id="validationCustom04" required />
        <div class="invalid-feedback">Insira o preço de custo</div>
      </div>
      <div class="col-md-4">
        <label for="validationCustom05" class="form-label">Fornecedor</label>
        <select class="form-select" id="validationCustom05" required>
          <option selected disabled value="">Selecione...</option>
          <option>Juninho da Coca-Cola</option>
          <option>João Pedro da Coca-Cola</option>
        </select>
        <div class="invalid-feedback">Selecione um fornecedor!</div>
      </div>
      <div class="col-md-4">
        <label for="validationCustom06" class="form-label preco-total">Preço de Custo (R$) </label>
        <input type="text" class="form-control" id="validationCustom06" required />
        <div class="invalid-feedback">Insira o preço total!</div>
      </div>
      <div class="col-md-4">
        <label for="validationCustom07" class="form-label">Tipo de Produto</label>
        <input type="text" class="form-control" id="validationCustom07" required />
        <div class="invalid-feedback">Insira o tipo!</div>
      </div>

      <div class="col-md-12 text-center mt-4">
        <button class="btn btn-danger btn-block" type="submit">Cadastrar Produto</button>
      </div>
    </form>
  </pw-painel-layout>

  <script src="../../../js/bootstrap.min.js"></script>
  <script src="../../../js/produto.js"></script>
</body>

</html>