<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../../../css/bootstrap.min.css" />
  <link rel="stylesheet" href="../../../css/geral.css" />

  <title>Cadastro Cliente</title>

  <script type="module" src="../../../js/pw-web-components/pw-web-components.esm.js"></script>
  <script nomodule src="../../../js/pw-web-components/pw-web-components.js"></script>
</head>

<body data-pw-config-base-url="../../../">
  <pw-header active-link="painel"></pw-header>

  <pw-painel-layout active-link="clientes-cadastrar">
    <div class="container px-4">
      <h1 class="titulo my-3">Cadastrar Cliente</h1>

      <form action="script.php" method="post" id="cadastroForm" class="needs-validation" novalidate>
        <div class="mb-3">
          <label for="nome">Nome Completo:</label>
          <input type="text" id="nome" class="form-control" placeholder="Nome Completo" name="nome" required />
          <div class="invalid-feedback">Por favor, preencha o nome completo.</div>
        </div>

        <div class="mb-3">
          <label for="dataNascimentoInput" class="form-label">Data de Nascimento:</label>
          <input type="text" class="form-control" id="dataNascimentoInput" placeholder="DD/MM/AAAA"
            name="dataNascimento" required />
          <div class="invalid-feedback">Por favor, insira uma data de nascimento válida.</div>
        </div>

        <div class="mb-3">
          <label for="email">Email:</label>
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Email" aria-label="email"
              aria-describedby="basic-addon2" name="email" required
              pattern="^[\w.-]+@[a-zA-Z_-]+?(?:\.[a-zA-Z]{2,})+$" />
            <div class="invalid-feedback">Por favor, insira um email válido.</div>
          </div>
        </div>

        <div class="mb-3">
          <label for="telefone">Telefone:</label>
          <div class="input-group mb-3">
            <span class="input-group-text">+55</span>
            <input type="tel" id="telefone" name="telefone" class="form-control" placeholder="Telefone" required
              pattern="[0-9]+" />
            <div class="invalid-feedback">Por favor, insira um telefone válido.</div>
          </div>
        </div>

        <hr>

        <div class="row g-3">
          <div class="col-md-3">
            <label for="enderecoCep" class="form-label">CEP</label>

            <input type="text" class="form-control" id="enderecoCep" name="enderecoCep" required />

            <div class="invalid-feedback">Por favor, insira um CEP.</div>
          </div>


          <div class="col-md-3">
            <label for="enderecoUf" class="form-label">UF</label>

            <select class="form-select" id="enderecoUf" name="enderecoUf" required>
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

          <div class="col-md-6">
            <label for="enderecoCidade" class="form-label">Cidade</label>

            <input type="text" class="form-control" id="enderecoCidade" name="enderecoCidade" required />

            <div class="invalid-feedback">Por favor, insira uma cidade.</div>
          </div>

          <div class="col-md-6">
            <label for="enderecoRua" class="form-label">Rua</label>
            <input type="text" class="form-control" id="enderecoRua" name="enderecoRua" required />
            <div class="invalid-feedback">Por favor, insira uma rua.</div>
          </div>

          <div class="col-md-2">
            <label for="enderecoNumero" class="form-label">Número</label>

            <input type="text" class="form-control" id="enderecoNumero" name="enderecoNumero" required />

            <div class="invalid-feedback">Por favor, insira um número.</div>
          </div>

          <div class="col-md-4">
            <label for="enderecoBairro" class="form-label">Bairro</label>

            <input type="text" class="form-control" id="enderecoBairro" name="enderecoBairro" required />

            <div class="invalid-feedback">Por favor, insira um bairro.</div>
          </div>
        </div>
        <hr>

        <div class="mb-3">
          <label for="genero">Gênero:</label>

          <select name="genero" id="genero" class="form-select" required>
            <option value="">Selecione um gênero</option>
            <option value="Masculino">Masculino</option>
            <option value="Feminino">Feminino</option>
            <option value="Outro">Outro</option>
          </select>

          <div class="invalid-feedback">Por favor, selecione um gênero.</div>
        </div>

        <button type="submit" class="btn btn-primary">Cadastrar</button>
      </form>
    </div>
  </pw-painel-layout>

  <script src="../../../js/validacliente.js"></script>
  <script src="../../../js/bootstrap.min.js"></script>
</body>

</html>