<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="shortcut icon" href="./imgs/favicon.png" type="image/png" />
    <title>Início - Hamburgueria Siri Cascudo</title>

    <link rel="stylesheet" href="./css/geral.css" />
    <link rel="stylesheet" href="./css/pages/home.css" />

    <script type="module" src="./js/pw-web-components/pw-web-components.esm.js"></script>
    <script nomodule src="./js/pw-web-components/pw-web-components.js"></script>
  </head>
  <body data-pw-config-base-url="./">
    <pw-header active-link="inicio"></pw-header>

    <main class="app-home">
      <div class="app-container">
        <section class="app-home-intro">
          <div class="app-home-intro-text">
            <h2 class="app-home-intro-title">Hamburgueria Siri Cascudo</h2>
            <p>Bem-vindo ao Siri Cascudo, a hamburgueria mais famosa da Fenda do Bikini!</p>
          </div>

          <img src="./imgs/home/home-2.jpg" />
        </section>
      </div>

      <section id="promocao-do-dia" class="app-secao">
        <div class="app-container">
          <h1>Promoção do Dia</h1>

          <div class="app-linha-horizontal"></div>

          <ul class="app-products">
            <li>
              <a class="app-product" href="#">
                <div class="app-product-image">
                  <img src="./imgs/products/01-cheeseburger-close-up-no-balcao.jpg" alt="Hamburguer de Queijo" />
                </div>

                <div class="app-divider"></div>

                <p class="app-product-name">Hamburguer de Queijo</p>

                <div class="app-divider"></div>

                <div class="app-product-prices">
                  <p class="app-product-price-old">R$ 18,99</p>
                  <p class="app-product-price-new">R$ 14,99</p>
                </div>
              </a>
            </li>

            <li>
              <a href="#" class="app-product">
                <div class="app-product-image">
                  <img src="./imgs/products/02-hamburguer-com-fritas-na-mesa.jpg" alt="Hamburguer com Fritas" />
                </div>

                <div class="app-divider"></div>

                <p class="app-product-name">Hamburguer com Fritas</p>

                <div class="app-divider"></div>

                <div class="app-product-prices">
                  <p class="app-product-price-old">R$ 25,99</p>
                  <p class="app-product-price-new">R$ 20,99</p>
                </div>
              </a>
            </li>

            <li>
              <a href="#" class="app-product">
                <div class="app-product-image">
                  <img
                    src="./imgs/products/03-hamburguer-duplo-isolado-no-fundo-branco-hamburguer-fresco-fast-food-com-carne-e-queijo-creme.jpg"
                    alt="Hamburguer dom Fritas"
                  />
                </div>

                <div class="app-divider"></div>

                <p class="app-product-name">Hamburguer Duplo</p>

                <div class="app-divider"></div>

                <div class="app-product-prices">
                  <p class="app-product-price-old">R$ 28,99</p>
                  <p class="app-product-price-new">R$ 25,99</p>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </section>

      <section id="cardapio" class="app-secao">
        <div class="app-container">
          <h1>Nossos Itens</h1>

          <div class="app-linha-horizontal"></div>

          <ul class="app-menu-items">
            <div class="app-menu-item">
              <div class="app-menu-item-image">
                <img src="./imgs/products/04-siriCortado-removebg-preview.png" alt="Hamburguer de Siri" />
              </div>
              <p class="app-menu-item-name">Hambúrguer de Siri</p>
              <p class="app-menu-item-price">R$0.00</p>
            </div>

            <div class="app-menu-item">
              <div class="app-menu-item-image">
                <img src="./imgs/products/04-siriCortado-removebg-preview.png" alt="Hamburguer de Siri" />
              </div>

              <p class="app-menu-item-name">Hambúrguer de Siri</p>
              <p class="app-menu-item-price">R$0.00</p>
            </div>

            <div class="app-menu-item">
              <div class="app-menu-item-image">
                <img src="./imgs/products/04-siriCortado-removebg-preview.png" alt="Hamburguer de Siri" />
              </div>
              <p class="app-menu-item-name">Hambúrguer de Siri</p>
              <p class="app-menu-item-price">R$0.00</p>
            </div>

            <div class="app-menu-item">
              <div class="app-menu-item-image">
                <img src="./imgs/products/04-siriCortado-removebg-preview.png" alt="Hamburguer de Siri" />
              </div>
              <p class="app-menu-item-name">Hambúrguer de Siri</p>
              <p class="app-menu-item-price">R$0.00</p>
            </div>
          </ul>
        </div>
      </section>
    </main>

    <pw-footer></pw-footer>
  </body>
</html>
