import { r as registerInstance, h, a as Host, g as getElement } from './index-594cc854.js';
import { g as getPwConfigBaseUrl } from './utils-42381609.js';

const pwFooterCss = ":host{display:block}.pw-footer{color:white}.pw-footer .pw-footer-infos-bg{background:rgb(111, 8, 8)}.pw-footer h2{font-size:1.5rem;font-weight:bold;margin-bottom:1rem}.pw-footer .pw-footer-infos{padding:2rem 1rem;display:flex;flex-direction:row;flex-wrap:wrap;gap:2rem}.pw-footer .pw-footer-localizacao{flex:1 1}.pw-footer .pw-footer-localizacao-descricao p{line-height:1.3;margin:1rem 0}.pw-footer .pw-footer-localizacao img{border:10px solid rgb(211, 173, 38);border-radius:1rem}.pw-footer .pw-footer-contato .pw-footer-contato-lista{display:flex;flex-direction:column;padding:1rem 0}.pw-footer .pw-footer-contato .pw-footer-contato-lista li{padding:1rem 1rem;border-top:1px solid rgba(255, 255, 255, 0.575)}.pw-footer .pw-footer-contato .pw-footer-contato-lista li:last-child{border-bottom:1px solid rgba(255, 255, 255, 0.575)}.pw-footer .pw-footer-copy{background:rgb(72, 3, 3);text-align:center;padding:1rem}";

const PwFooter = class {
  constructor(hostRef) {
    registerInstance(this, hostRef);
    this.baseUrl = undefined;
    this.mapImageUrl = undefined;
  }
  get computedBaseUrl() {
    var _a;
    return (_a = this.baseUrl) !== null && _a !== void 0 ? _a : getPwConfigBaseUrl(this.el);
  }
  get computedMapImageUrl() {
    var _a;
    return (_a = this.mapImageUrl) !== null && _a !== void 0 ? _a : `${this.computedBaseUrl}imgs/mapa.jpg`;
  }
  render() {
    return (h(Host, null, h("footer", { class: "pw-footer" }, h("div", { class: "pw-footer-infos-bg" }, h("div", { class: "app-container pw-footer-infos" }, h("div", { class: "pw-footer-contato" }, h("h2", null, "Contato"), h("ul", { class: "pw-footer-contato-lista" }, h("li", null, "Telefone: (69) 98888-7777"), h("li", null, "E-mail: contato@siricascudo.com.br"))), h("div", { class: "pw-footer-localizacao" }, h("h2", null, "Localiza\u00E7\u00E3o"), h("img", { src: this.computedMapImageUrl, alt: "Endere\u00E7o" }), h("div", { class: "pw-footer-localizacao-descricao" }, h("p", null, "O Siri Cascudo est\u00E1 localizado no cora\u00E7\u00E3o da Fenda do Bikini, na Rua da Concha, 123. Nosso restaurante fica pr\u00F3ximo \u00E0 praia e \u00E9 de f\u00E1cil acesso, seja de carro ou a p\u00E9."), h("p", null, "Para quem vem de carro, h\u00E1 estacionamentos pr\u00F3ximos onde \u00E9 poss\u00EDvel deixar o ve\u00EDculo com seguran\u00E7a. E para quem prefere utilizar transporte p\u00FAblico, h\u00E1 diversas linhas de \u00F4nibus que param pr\u00F3ximas ao nosso estabelecimento."), h("p", null, "Ent\u00E3o, venha nos visitar e desfrutar dos melhores hamb\u00FArgueres da Fenda do Bikini!"))))), h("div", { class: "pw-footer-copy" }, h("div", { class: "app-container" }, h("p", null, "\u00A92023 Siri Cascudo | Todos os Direitos Reservados")))), h("slot", null)));
  }
  get el() { return getElement(this); }
};
PwFooter.style = pwFooterCss;

export { PwFooter as pw_footer };

//# sourceMappingURL=pw-footer.entry.js.map