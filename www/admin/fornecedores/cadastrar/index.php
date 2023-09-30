<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../../../css/bootstrap.min.css" />
  <link rel="stylesheet" href="../../../css/geral.css" />
  <link rel="stylesheet" href="../../../css/pages/cadastrarFornecedores.css" />

  <title>Cadastrar Fornecedores</title>

  <script type="module" src="../../../js/pw-web-components/pw-web-components.esm.js"></script>
  <script nomodule src="../../../js/pw-web-components/pw-web-components.js"></script>
</head>

<body data-pw-config-base-url="../../../">
  <pw-header active-link="painel"></pw-header>

  <pw-painel-layout active-link="fornecedores-cadastrar">
    <div class="app-container">
      <h1 class="principalText">Cadastrar Fornecedores</h1>
    </div>

    <form class="app-container row g-3 needs-validation" method="post" action="script.php" novalidate>
      <div class="col-md-4">
        <label for="validationCustom01" class="form-label cnpj">CNPJ</label>
        <input type="text" name="cnpj" class="form-control" id="validationCustom01" required />
        <div class="invalid-feedback">Por favor, insira um CNPJ Válido!</div>
      </div>
      <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Razão Social</label>
        <input type="text" name="razaoSocial" class="form-control" id="validationCustom02" required />
        <div class="invalid-feedback">Por favor insira uma razão social válida.</div>
      </div>
      <div class="col-md-4">
        <label for="validationCustom03" class="form-label">Nome Fantasia</label>
        <input type="text" name="nomeFantasia" class="form-control" id="validationCustom03" required />
        <div class="invalid-feedback">Por favor insira um nome fantasia válid</div>
      </div>

      <div class="col-md-6">
        <label for="validationCustom04" class="form-label">CEP</label>
        <input type="text" name="cep" class="form-control" id="validationCustom04" required />
        <div class="invalid-feedback">Por favor insira uma cidade.</div>
      </div>

      <div class="col-md-2">
        <label for="validationCustom05" class="form-label">UF</label>
        <select class="form-select" name="uf" id="validationCustom05" required>
          <option selected disabled value="">Selecione...</option>
          <option value="">Selecione</option>
          <option value="AC">AC</option>
          <option value="AL">AL</option>
          <option value="AM">AM</option>
          <option value="AP">AP</option>
          <option value="BA">BA</option>
          <option value="CE">CE</option>
          <option value="DF">DF</option>
          <option value="ES">ES</option>
          <option value="GO">GO</option>
          <option value="MA">MA</option>
          <option value="MG">MG</option>
          <option value="MS">MS</option>
          <option value="MT">MT</option>
          <option value="PA">PA</option>
          <option value="PB">PB</option>
          <option value="PE">PE</option>
          <option value="PI">PI</option>
          <option value="PR">PR</option>
          <option value="RJ">RJ</option>
          <option value="RN">RN</option>
          <option value="RS">RS</option>
          <option value="RO">RO</option>
          <option value="RR">RR</option>
          <option value="SC">SC</option>
          <option value="SE">SE</option>
          <option value="SP">SP</option>
          <option value="TO">TO</option>
        </select>
        <div class="invalid-feedback">Por favor, selecione um estado!</div>
      </div>
      <div class="col-md-2">
        <label for="validationCustom06" class="form-label">Cidade</label>
        <input type="text" class="form-control" name="cidade" id="validationCustom06" required />
        <div class="invalid-feedback">Por favor, insira uma cidade.</div>
      </div>
      <div class="col-md-2">
        <label for="validationCustom06" class="form-label">Pais</label>
        <input type="text" class="form-control" name="pais" id="validationCustom06" required />
        <div class="invalid-feedback">Por favor, insira um Pais.</div>
      </div>
      <div class="col-md-4">
        <label for="validationCustom07" class="form-label">Rua</label>
        <input type="text" class="form-control" name="rua" id="validationCustom07" required />
        <div class="invalid-feedback">Por favor, insira uma rua.</div>
      </div>
      <div class="col-md-4">
        <label for="validationCustom08" class="form-label">Número</label>
        <input type="text" class="form-control" name="numero" id="validationCustom08" required />
        <div class="invalid-feedback">Por favor, insira um número.</div>
      </div>
      <div class="col-md-4">
        <label for="validationCustom09" class="form-label">Bairro</label>
        <input type="text" class="form-control" name="bairro" id="validationCustom09" required />
        <div class="invalid-feedback">Por favor, insira um bairro.</div>
      </div>

      <div class="col-md-12 text-center mt-4">
        <button class="btn btn-danger btn-block" type="submit">Submeter</button>
      </div>
    </form>
  </pw-painel-layout>

  <script src="../../../js/bootstrap.min.js"></script>
  <script src="../../../js/validationFornecedor.js"></script>
</body>

</html>