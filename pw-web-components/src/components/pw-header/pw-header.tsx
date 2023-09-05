import { h, Component, Host } from '@stencil/core';

@Component({
  tag: 'pw-header',
  styleUrl: 'pw-header.css',
  shadow: false,
})
export class PwHeader {
  render() {
    return (
      <Host>
        <header class="app-header">
          <div class="app-container app-header-container">
            <div>
              <a class="app-header-brand" href="../index.html">
                <img src="../imgs/logo.webp" alt="Logo da Hamburgueria Siri Cascudo" />
              </a>
            </div>

            <nav>
              <ul class="app-header-links">
                <li>
                  <a href="../index.html">Início</a>
                </li>
                <li>
                  <a href="../sobre.html">Sobre</a>
                </li>

                <li>
                  <a class="app-ativo" href="./">
                    Painel
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </header>

        <slot></slot>
      </Host>
    );
  }
}
