<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="stylesheet" href="../../../css/bootstrap.min.css" />
  <link rel="stylesheet" href="../../../css/geral.css" />

  <title>Cadastrar Funcionário</title>

  <script type="module" src="../../../js/pw-web-components/pw-web-components.esm.js"></script>
  <script nomodule src="../../../js/pw-web-components/pw-web-components.js"></script>
</head>

<body data-pw-config-base-url="../../../">
  <pw-header active-link="painel"></pw-header>

  <pw-painel-layout active-link="funcionarios-cadastrar">
    <div class="container px-4">
      <h1 class="titulo my-3">Cadastrar Funcionário</h1>

      <form action="script.php" method="POST" id="cadastroForm">
        <div class="mb-3">
          <label for="nome">Nome Completo:</label>
          <input type="text" id="validationName" class="form-control" placeholder="Nome Completo" name="nome"
            required />
        </div>
        <div class="mb-3">
          <label for="dataNascimentoInput" class="form-label">Data de Nascimento</label>
          <input type="text" class="form-control" id="dataNascimentoInput" name="dataNascimentoInput"
            placeholder="DD/MM/AAAA" required />
          <div class="invalid-feedback">Por favor, insira uma data de nascimento válida.</div>
        </div>
        <div class="mb-3">
          <label for="email">Email:</label>
          <div class="input-group">
            <input type="text" id="validationEmail" class="form-control" placeholder="Email" aria-label="email"
              aria-describedby="basic-addon2" name="email" required />
            <span class="input-group-text" id="email">@exemplo.com</span>
          </div>
        </div>
        <div class="mb-3">
          <label for="telefone">Telefone:</label>
          <div class="input-group">
            <span class="input-group-text">+55</span>
            <input type="tel" id="telefone" name="telefone" class="form-control" placeholder="Telefone" required />
          </div>
        </div>
        <div class="mb-3">
          <label for="cpf">CPF:</label>
          <input type="text" id="cpfInput" name="cpf" class="form-control" placeholder="CPF" required />
        </div>
        <div class="mb-3">
          <label for="cidade">Cidade:</label>
          <input type="text" id="cidade" name="cidade" class="form-control" placeholder="Cidade" required />
        </div>
        <div class="mb-3">
          <label for="cep">CEP:</label>
          <input type="text" id="cep" name="cep" class="form-control" placeholder="CEP" required />
        </div>
        <div class="mb-3">
          <label for="validationCustom05" class="form-label">Estado</label>
          <select class="form-select" name="estado" id="validationCustom05" required>
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
        </div>
        <div class="mb-3">
          <label for="pais">Pais</label>
          <input type="text" id="pais" name="pais" class="form-control" placeholder="Endereço" required />
        </div>
        <div class="mb-3">
          <label for="rua">Rua</label>
          <input type="rua" id="rua" name="rua" class="form-control" placeholder="Endereço" required />
        </div>
        <div class="mb-3">
          <label for="numero">Número</label>
          <input type="text" id="numero" name="numero" class="form-control" placeholder="Endereço" required />
        </div>
        <div class="mb-3">
          <label for="bairro">Bairro</label>
          <input type="text" id="bairro" name="bairro" class="form-control" placeholder="Endereço" required />
        </div>
        <div class="mb-3">
          <label for="genero">Gênero:</label>
          <select name="genero" id="genero" class="form-select genero" required>
            <option value="">Selecione seu Gênero</option>
            <option value="masculino">Masculino</option>
            <option value="feminino">Feminino</option>
            <option value="outro">Outro</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="preferencia">Informações Adicionais</label>
          <textarea class="form-control" id="preferencia" name="informacoes" rows="3"
            placeholder="Preferências..."></textarea>
        </div>
        <input class="btn btn-primary" type="submit" value="Cadastrar" />
      </form>
    </div>
  </pw-painel-layout>

  <script src="../../../js/bootstrap.min.js"></script>
</body>

</html>