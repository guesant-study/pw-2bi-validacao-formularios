import { r as registerInstance, h, a as Host } from './index-9cd43aad.js';

const pwHeaderCss = ":host{display:block}.pw-header{box-shadow:0px 0px 10px rgba(0, 0, 0, 0.3);z-index:1000;position:relative}.pw-header .pw-header-container{display:flex;align-items:center;justify-content:space-between;padding:1rem}.pw-header .pw-header-brand img{height:4.5rem}.pw-header .pw-header-links{display:flex;align-items:center;gap:0.5rem}.pw-header .pw-header-links a{border-radius:0.5rem;padding:0.5rem 1.25rem;border:1px solid rgba(0, 0, 0, 0.3)}.pw-header .pw-header-links a.pw-header-link-active{background-color:red;color:white}";

const LINKS = [
  {
    id: 'inicio',
    href: 'index.html',
    label: 'Início',
  },
  {
    id: 'sobre',
    href: 'sobre.html',
    label: 'Sobre',
  },
  {
    id: 'painel',
    href: 'login.html',
    label: 'Painel',
  },
];
const PwHeader = class {
  constructor(hostRef) {
    registerInstance(this, hostRef);
    this.baseUrl = undefined;
    this.activeLink = undefined;
    this.brandImageUrl = undefined;
    this.linkBaseUrl = undefined;
    this.brandHref = undefined;
  }
  get computedBrandImageUrl() {
    var _a;
    return (_a = this.brandImageUrl) !== null && _a !== void 0 ? _a : `${this.baseUrl}imgs/logo.webp`;
  }
  get computedLinkBaseUrl() {
    var _a;
    return (_a = this.linkBaseUrl) !== null && _a !== void 0 ? _a : `${this.baseUrl}`;
  }
  get computedBrandHref() {
    var _a;
    return (_a = this.brandHref) !== null && _a !== void 0 ? _a : `${this.baseUrl}`;
  }
  render() {
    return (h(Host, null, h("header", { class: "pw-header" }, h("div", { class: "app-container pw-header-container" }, h("div", null, h("a", { class: "pw-header-brand", href: this.computedBrandHref }, h("img", { src: this.computedBrandImageUrl, alt: "Logo da Hamburgueria Siri Cascudo" }))), h("nav", null, h("ul", { class: "pw-header-links" }, LINKS.map(link => {
      const isActive = link.id === this.activeLink;
      const destHref = `${this.computedLinkBaseUrl}${link.href}`;
      const anchorClass = `${isActive ? 'pw-header-link-active' : ''}`;
      return (h("li", { key: link.id }, h("a", { class: anchorClass, href: destHref }, link.label)));
    }))), h("slot", null)))));
  }
};
PwHeader.style = pwHeaderCss;

export { PwHeader as pw_header };

//# sourceMappingURL=pw-header.entry.js.map