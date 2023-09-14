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

        <form action="cadastro" method="post" id="cadastroForm">
          <div class="mb-3">
            <label for="nome">Nome Completo:</label>
            <input type="text" id="validationName" class="form-control" placeholder="Nome Completo" name="nome" required />
          </div>
          <div class="mb-3">
            <label for="dataNascimentoInput" class="form-label">Data de Nascimento</label>
            <input type="text" class="form-control" id="dataNascimentoInput" placeholder="DD/MM/AAAA" required />
            <div class="invalid-feedback">Por favor, insira uma data de nascimento válida.</div>
          </div>
          <div class="mb-3">
            <label for="email">Email:</label>
            <div class="input-group">
              <input
                type="text"
                id="validationEmail"
                class="form-control"
                placeholder="Email"
                aria-label="email"
                aria-describedby="basic-addon2"
                name="email"
                required
              />
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
            <label for="estado">Estado:</label>
            <select name="estado" id="estado" class="form-select" required>
              <option value="">Selecione um estado</option>
              <option value="Acre">Acre</option>
              <option value="Alagoas">Alagoas</option>
              <option value="Amapá">Amapá</option>
              <option value="Amazonas">Amazonas</option>
              <option value="Bahia">Bahia</option>
              <option value="Ceará">Ceará</option>
              <option value="Distrito Federal">Distrito Federal</option>
              <option value="Espírito Santo">Espírito Santo</option>
              <option value="Goiás">Goiás</option>
              <option value="Maranhão">Maranhão</option>
              <option value="Mato Grosso">Mato Grosso</option>
              <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
              <option value="Minas Gerais">Minas Gerais</option>
              <option value="Pará">Pará</option>
              <option value="Paraíba">Paraíba</option>
              <option value="Paraná">Paraná</option>
              <option value="Pernambuco">Pernambuco</option>
              <option value="Piauí">Piauí</option>
              <option value="Rio de Janeiro">Rio de Janeiro</option>
              <option value="Rio Grande do Norte">Rio Grande do Norte</option>
              <option value="Rio Grande do Sul">Rio Grande do Sul</option>
              <option value="Rondônia">Rondônia</option>
              <option value="Roraima">Roraima</option>
              <option value="Santa Catarina">Santa Catarina</option>
              <option value="São Paulo">São Paulo</option>
              <option value="Sergipe">Sergipe</option>
              <option value="Tocantins">Tocantins</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="endereco">Endereço:</label>
            <input type="text" id="endereco" name="endereco" class="form-control" placeholder="Endereço" required />
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
            <textarea class="form-control" id="preferencia" name="informacoes" rows="3" placeholder="Preferências..."></textarea>
          </div>
          <div class="mb-3">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required />
              <label class="form-check-label" for="flexCheckDefault"> </label>
            </div>
          </div>
          <input class="btn btn-primary" type="submit" value="Cadastrar" />
        </form>
      </div>
    </pw-painel-layout>

    <script src="../../../js/valida.js"></script>
    <script src="../../../js/bootstrap.min.js"></script>
  </body>
</html>