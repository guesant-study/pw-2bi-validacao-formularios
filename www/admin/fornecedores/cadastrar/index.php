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

      <form class="app-container row g-3 needs-validation" novalidate>
        <div class="col-md-4">
          <label for="validationCustom01" class="form-label cnpj">CNPJ</label>
          <input type="text" class="form-control" id="validationCustom01" required />
          <div class="invalid-feedback">Por favor, insira um CNPJ Válido!</div>
        </div>
        <div class="col-md-4">
          <label for="validationCustom02" class="form-label">Razão Social</label>
          <input type="text" class="form-control" id="validationCustom02" required />
          <div class="invalid-feedback">Por favor insira uma razão social válida.</div>
        </div>
        <div class="col-md-4">
          <label for="validationCustom03" class="form-label">Nome Fantasia</label>
          <input type="text" class="form-control" id="validationCustom03" required />
          <div class="invalid-feedback">Por favor insira um nome fantasia válid</div>
        </div>

        <div class="col-md-6">
          <label for="validationCustom04" class="form-label">CEP</label>
          <input type="text" class="form-control" id="validationCustom04" required />
          <div class="invalid-feedback">Por favor insira uma cidade.</div>
        </div>

        <div class="col-md-3">
          <label for="validationCustom05" class="form-label">UF</label>
          <select class="form-select" id="validationCustom05" required>
            <option selected disabled value="">Selecione...</option>
            <option value="AC">Acre</option>
            <option value="AL">Alagoas</option>
            <option value="AP">Amapá</option>
            <option value="AM">Amazonas</option>
            <option value="BA">Bahia</option>
            <option value="CE">Ceará</option>
            <option value="DF">Distrito Federal</option>
            <option value="ES">Espírito Santo</option>
            <option value="GO">Goiás</option>
            <option value="MA">Maranhão</option>
            <option value="MT">Mato Grosso</option>
            <option value="MS">Mato Grosso do Sul</option>
            <option value="MG">Minas Gerais</option>
            <option value="PA">Pará</option>
            <option value="PB">Paraíba</option>
            <option value="PR">Paraná</option>
            <option value="PE">Pernambuco</option>
            <option value="PI">Piauí</option>
            <option value="RJ">Rio de Janeiro</option>
            <option value="RN">Rio Grande do Norte</option>
            <option value="RS">Rio Grande do Sul</option>
            <option value="RO">Rondônia</option>
            <option value="RR">Roraima</option>
            <option value="SC">Santa Catarina</option>
            <option value="SP">São Paulo</option>
            <option value="SE">Sergipe</option>
            <option value="TO">Tocantins</option>
            <option value="EX">Estrangeiro</option>
          </select>
          <div class="invalid-feedback">Por favor, selecione um estado!</div>
        </div>
        <div class="col-md-3">
          <label for="validationCustom06" class="form-label">Cidade</label>
          <input type="text" class="form-control" id="validationCustom06" required />
          <div class="invalid-feedback">Por favor, insira um CEP.</div>
        </div>
        <div class="col-md-4">
          <label for="validationCustom07" class="form-label">Rua</label>
          <input type="text" class="form-control" id="validationCustom07" required />
          <div class="invalid-feedback">Por favor, insira uma rua.</div>
        </div>
        <div class="col-md-4">
          <label for="validationCustom08" class="form-label">Número</label>
          <input type="text" class="form-control" id="validationCustom08" required />
          <div class="invalid-feedback">Por favor, insira um número.</div>
        </div>
        <div class="col-md-4">
          <label for="validationCustom09" class="form-label">Bairro</label>
          <input type="text" class="form-control" id="validationCustom09" required />
          <div class="invalid-feedback">Por favor, insira um bairro.</div>
        </div>

        <div class="col-md-12 text-center mt-4">
          <button class="btn btn-danger btn-block" type="submit">Submit form</button>
        </div>
      </form>
    </pw-painel-layout>

    <script src="../../../js/bootstrap.min.js"></script>
    <script src="../../../js/validationFornecedor.js"></script>
  </body>
</html>