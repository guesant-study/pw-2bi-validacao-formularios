<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="shortcut icon" href="./imgs/favicon.png" type="image/png" />
    <title>Login - Hamburgueria Siri Cascudo</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css" />
    <link rel="stylesheet" href="./css/geral.css" />
    <link rel="stylesheet" href="./css/pages/login.css" />

    <script type="module" src="./js/pw-web-components/pw-web-components.esm.js"></script>
    <script nomodule src="./js/pw-web-components/pw-web-components.js"></script>
  </head>

  <body data-pw-config-base-url="./">
    <pw-header active-link="painel"></pw-header>

    <main class="mainContent">
      <div class="form-signin w-100 m-auto my-4">
        <form action="./admin">
          <h1 class="h3 mb-3 fw-normal text-center">Entrar</h1>

          <div class="my-4">
            <div class="form-floating">
              <input type="text" class="form-control" id="login-usuario" placeholder="Usuário" />
              <label for="login-usuario">Usuário</label>
            </div>

            <div class="form-floating">
              <input type="password" class="form-control" id="login-senha" placeholder="Senha" />
              <label for="login-senha">Senha</label>
            </div>
          </div>

          <button class="btn btn-danger w-100 py-2" type="submit">Entrar</button>
        </form>
      </div>
    </main>

    <pw-footer></pw-footer>
  </body>
</html>
