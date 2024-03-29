<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="shortcut icon" href="../../../imgs/favicon.png" type="image/png" />
    <title>Cadastrar Promoção - Painel - Hamburgueria Siri Cascudo</title>

    <link rel="stylesheet" href="../../../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../../../css/geral.css" />
    <link rel="stylesheet" href="../../../css/parts/formulario.css" />
    <link rel="stylesheet" href="../../../css/pages/admin-pedidos-cadastrar.css" />

    <script type="module" src="../../../js/pw-web-components/pw-web-components.esm.js"></script>
    <script nomodule src="../../../js/pw-web-components/pw-web-components.js"></script>
  </head>
  <body data-pw-config-base-url="../../../">
    <pw-header active-link="painel"></pw-header>

    <pw-painel-layout active-link="promocoes-cadastrar">
      <main>
        <div class="app-container py-4">
          <h1 class="text-center h1">Cadastrar Promoção</h1>

          <form id="form-principal"></form>
          <form id="form-adicionar-produto"></form>

          <div>
            <div class="mb-3 campo-gp">
              <label for="field-data-inicio" class="form-label"> Data de Início </label>

              <input
                required
                minlength="3"
                class="form-control"
                type="datetime-local"
                id="field-data-inicio"
                form="form-principal"
                name="inputCadastrarPromocaoDataInicio"
              />

              <span class="mensagem-erro" data-erro=""></span>
            </div>

            <div class="mb-3 campo-gp">
              <label for="field-data-termino" class="form-label"> Data de Término </label>

              <input
                required
                minlength="3"
                id="field-data-termino"
                class="form-control"
                type="datetime-local"
                form="form-principal"
                name="inputCadastrarPromocaoDataInicio"
              />

              <span class="mensagem-erro" data-erro=""></span>
            </div>

            <hr />

            <div class="my-3 adicionar-produtos">
              <h4 class="mb-3">Adicionar Produto</h4>

              <div class="row align-items-end">
                <div class="col">
                  <label for="field-adicionar-produto" class="form-label"> Produto </label>

                  <div class="dropdown">
                    <input
                      required
                      minlength="1"
                      type="text"
                      aria-expanded="false"
                      data-bs-toggle="dropdown"
                      id="field-adicionar-produto"
                      data-bs-auto-close="outside"
                      class="form-control dropdown-toggle"
                      form="form-adicionar-produto"
                    />

                    <ul class="dropdown-menu" style="width: 100%">
                      <li>
                        <a class="dropdown-item" href="#"> Hamburguer de Queijo </a>
                      </li>
                      <li>
                        <a class="dropdown-item active" href="#"> Hamburguer de Siri </a>
                      </li>

                      <li>
                        <a class="dropdown-item" href="#"> Hamburguer com Fritas </a>
                      </li>

                      <li>
                        <hr class="dropdown-divider" />
                      </li>

                      <li>
                        <a class="dropdown-item" href="#"> Cadastrar Produto "..." </a>
                      </li>
                    </ul>
                  </div>
                </div>

                <div class="col-auto preco">
                  <label for="adicionar-produto-valor_integral" class="form-label"> Valor Integral </label>

                  <div class="input-group">
                    <span class="input-group-text">R$</span>

                    <input
                      readonly
                      type="text"
                      value="99,99"
                      class="form-control text-end"
                      id="adicionar-produto-valor_integral"
                      form="form-adicionar-produto"
                    />
                  </div>
                </div>

                <div class="col-auto preco">
                  <label for="adicionar-produto-desconto" class="form-label"> Desconto </label>

                  <div class="input-group">
                    <span class="input-group-text">R$</span>

                    <input
                      required
                      id="adicionar-produto-desconto"
                      min="0.01"
                      type="text"
                      class="form-control text-end"
                      form="form-adicionar-produto"
                    />
                  </div>
                </div>

                <div class="col-auto">
                  <button type="submit" class="btn btn-primary mb-0" form="form-adicionar-produto">Adicionar Desconto</button>
                </div>
              </div>
            </div>

            <hr />

            <div>
              <label class="form-label h4 mb-3">Itens</label>

              <div class="table-responsive">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Produto</th>
                      <th scope="col">UND</th>
                      <th scope="col">R$ / UND original</th>
                      <th scope="col">Desconto</th>
                      <th scope="col">R$ / UND com desconto</th>
                      <th scope="col">Ações</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>

                      <td>Hamburguer de Siri</td>
                      <td>UND</td>
                      <td>R$ 10,23</td>
                      <td>-R$2,12</td>
                      <td>R$ 8,11</td>

                      <td>
                        <button type="button" class="btn btn-outline-danger btn-sm">Remover</button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>

            <hr />

            <div class="d-grid gap-2">
              <button type="submit" form="form-principal" class="btn btn-primary full-width">Registrar Promoção</button>
            </div>
          </div>
        </div>
      </main>
    </pw-painel-layout>

    <script src="../../../js/bootstrap.bundle.min.js"></script>

    <script>
      const inputDataTermino = document.querySelector("#field-data-termino");
      const inputDataInicio = document.querySelector("#field-data-inicio");

      const getDataTermino = () => {
        const dataTermino = inputDataTermino.value && new Date(inputDataTermino.value);

        return dataTermino ?? null;
      };

      const getDataInicio = () => {
        const dataInicio = inputDataInicio.value && new Date(inputDataInicio.value);

        return dataInicio ?? null;
      };

      const getMsgErro = (input) => {
        const gp = input.closest(".campo-gp");
        const msgErro = gp.querySelector(".mensagem-erro");

        return msgErro;
      };

      const validateDataTermino = () => {
        const msgErro = getMsgErro(inputDataTermino);

        const dataInicio = getDataInicio();
        const dataTermino = getDataTermino();

        msgErro.textContent = "";

        if (!dataTermino) {
          msgErro.textContent = "A data de término é inválida.";
        }

        if (dataTermino < dataInicio) {
          msgErro.textContent = "A data de término deve ser maior que a data de início.";
        }
      };

      const resetDataTermino = () => {
        const msgErro = getMsgErro(inputDataTermino);
        msgErro.textContent = "";
      };

      const validateDataInicio = () => {
        const msgErro = getMsgErro(inputDataInicio);

        const dataInicio = getDataInicio();

        msgErro.textContent = "";

        if (!dataInicio) {
          msgErro.textContent = "A data de início é inválida.";
        }
      };

      const resetDataInicio = () => {
        const msgErro = getMsgErro(inputDataInicio);
        msgErro.textContent = "";
      };

      inputDataInicio.addEventListener("change", () => resetDataInicio());
      inputDataInicio.addEventListener("blur", () => validateDataInicio());

      inputDataTermino.addEventListener("change", () => resetDataTermino());
      inputDataTermino.addEventListener("blur", () => validateDataTermino());
    </script>
  </body>
</html>
