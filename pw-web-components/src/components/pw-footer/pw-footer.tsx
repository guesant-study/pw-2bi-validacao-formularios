import { Component, Element, Host, Prop, h } from '@stencil/core';
import { getPwConfigBaseUrl } from '../../utils/utils';

@Component({
  tag: 'pw-footer',
  styleUrl: 'pw-footer.css',
  shadow: false,
})
export class PwFooter {
  @Element()
  el: HTMLElement;

  @Prop()
  baseUrl: string;

  get computedBaseUrl() {
    return this.baseUrl ?? getPwConfigBaseUrl(this.el);
  }

  @Prop()
  mapImageUrl?: string;

  get computedMapImageUrl() {
    return this.mapImageUrl ?? `${this.computedBaseUrl}imgs/mapa.jpg`;
  }

  render() {
    return (
      <Host>
        <footer class="pw-footer">
          <div class="pw-footer-infos-bg">
            <div class="app-container pw-footer-infos">
              <div class="pw-footer-contato">
                <h2>Contato</h2>

                <ul class="pw-footer-contato-lista">
                  <li>Telefone: (69) 98888-7777</li>
                  <li>E-mail: contato@siricascudo.com.br</li>
                </ul>
              </div>

              <div class="pw-footer-localizacao">
                <h2>Localização</h2>

                <img src={this.computedMapImageUrl} alt="Endereço" />

                <div class="pw-footer-localizacao-descricao">
                  <p>
                    O Siri Cascudo está localizado no coração da Fenda do Bikini, na Rua da Concha, 123. Nosso restaurante fica próximo à praia e é de fácil acesso, seja de carro
                    ou a pé.
                  </p>
                  <p>
                    Para quem vem de carro, há estacionamentos próximos onde é possível deixar o veículo com segurança. E para quem prefere utilizar transporte público, há diversas
                    linhas de ônibus que param próximas ao nosso estabelecimento.
                  </p>
                  <p>Então, venha nos visitar e desfrutar dos melhores hambúrgueres da Fenda do Bikini!</p>
                </div>
              </div>
            </div>
          </div>

          <div class="pw-footer-copy">
            <div class="app-container">
              <p>&copy;2023 Siri Cascudo | Todos os Direitos Reservados</p>
            </div>
          </div>
        </footer>

        <slot></slot>
      </Host>
    );
  }
}
