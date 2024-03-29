<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="shortcut icon" href="../../../imgs/favicon.png" type="image/png" />
    <title>Cadastrar Pedido - Painel - Hamburgueria Siri Cascudo</title>

    <link rel="stylesheet" href="../../../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../../../css/geral.css" />

    <link rel="stylesheet" href="../../../css/pages/admin-pedidos-cadastrar.css" />

    <script type="module" src="../../../js/pw-web-components/pw-web-components.esm.js"></script>
    <script nomodule src="../../../js/pw-web-components/pw-web-components.js"></script>
  </head>
  <body data-pw-config-base-url="../../../">
    <pw-header active-link="painel"></pw-header>

    <pw-painel-layout active-link="pedidos-cadastrar">
      <main>
        <div class="app-container py-4">
          <h1 class="text-center h1">Cadastrar Pedido</h1>

          <form id="form-principal"></form>
          <form id="form-adicionar-produto"></form>

          <form>
            <div class="mb-3">
              <label for="field-funcionario-drop" class="form-label"> Funcionário </label>

              <div class="dropdown">
                <input
                  type="text"
                  required
                  minlength="4"
                  aria-expanded="false"
                  data-bs-toggle="dropdown"
                  id="field-funcionario-drop"
                  data-bs-auto-close="outside"
                  class="form-control dropdown-toggle"
                  form="form-principal"
                />

                <ul class="dropdown-menu" style="width: 100%">
                  <li>
                    <a class="dropdown-item active" href="#"> Flávia Alana Moreira </a>
                  </li>

                  <li>
                    <a class="dropdown-item" href="#">Ruan Thales Cavalcanti</a>
                  </li>

                  <li><hr class="dropdown-divider" /></li>

                  <li>
                    <a class="dropdown-item" href="#"> Cadastrar Funcionário "..." </a>
                  </li>
                </ul>
              </div>
            </div>

            <div class="mb-3">
              <label for="field-cliente-drop" class="form-label"> Cliente </label>

              <div class="dropdown">
                <input
                  type="text"
                  minlength="4"
                  aria-expanded="false"
                  data-bs-toggle="dropdown"
                  id="field-cliente-drop"
                  data-bs-auto-close="outside"
                  class="form-control dropdown-toggle"
                  form="form-principal"
                />

                <ul class="dropdown-menu" style="width: 100%">
                  <li>
                    <a class="dropdown-item active" href="#">Nathan Ruan Davi Assunção</a>
                  </li>

                  <li>
                    <a class="dropdown-item" href="#">Eloá Kamilly Drumond</a>
                  </li>

                  <li><hr class="dropdown-divider" /></li>

                  <li>
                    <a class="dropdown-item" href="#">Cadastrar Cliente "..."</a>
                  </li>
                </ul>
              </div>
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
                  <div class="input-group">
                    <span class="input-group-text">R$</span>

                    <input required min="0.01" type="text" class="form-control text-end" form="form-adicionar-produto" />
                  </div>
                </div>

                <div class="col-auto quantidade">
                  <label for="adicionar-produto-quantidade" class="form-label"> Quantidade </label>

                  <input
                    min="0"
                    required
                    type="number"
                    class="form-control text-end"
                    id="adicionar-produto-quantidade"
                    form="form-adicionar-produto"
                  />
                </div>

                <div class="col-auto">
                  <button type="submit" class="btn btn-primary mb-0" form="form-adicionar-produto">Adicionar Produto</button>
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
                      <th scope="col">R$ / UND</th>
                      <th scope="col">Quantidade</th>
                      <th scope="col">R$ Total</th>
                      <th scope="col">Ações</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Hamburguer de Siri</td>
                      <td>UND</td>
                      <td>R$ 10,23</td>
                      <td>1</td>
                      <td>R$ 10,23</td>

                      <td>
                        <button type="button" class="btn btn-outline-danger btn-sm">Remover</button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>

            <hr />

            <div class="mb-3">
              <label for="field-desconto-drop" class="form-label"> Desconto </label>

              <input
                min="0"
                value="0"
                step="0.01"
                type="number"
                class="form-control text-end"
                id="field-desconto-drop"
                form="form-principal"
              />
            </div>

            <hr />

            <div>
              <div class="card my-3">
                <div class="card-body">
                  <h5 class="card-title">Total</h5>

                  <p class="card-text">R$ 10,23</p>
                </div>
              </div>
            </div>

            <div class="d-grid gap-2">
              <button type="submit" class="btn btn-primary full-width" form="form-principal">Registrar Pedido</button>
            </div>
          </form>
        </div>
      </main>
    </pw-painel-layout>

    <script src="../../../js/bootstrap.bundle.min.js"></script>
  </body>
</html>
