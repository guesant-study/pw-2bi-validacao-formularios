import { Component, Element, Host, Prop, h } from '@stencil/core';
import { getPwConfigBaseUrl } from '../../utils/utils';

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

@Component({
  tag: 'pw-header',
  styleUrl: 'pw-header.css',
  shadow: false,
})
export class PwHeader {
  @Element()
  el!: HTMLElement;

  @Prop()
  baseUrl: string;

  get computedBaseUrl() {
    return this.baseUrl ?? getPwConfigBaseUrl(this.el);
  }

  @Prop()
  brandImageUrl?: string;

  get computedBrandImageUrl() {
    return this.brandImageUrl ?? `${this.computedBaseUrl}imgs/logo.webp`;
  }

  @Prop()
  linkBaseUrl?: string;

  get computedLinkBaseUrl() {
    return this.linkBaseUrl ?? `${this.computedBaseUrl}`;
  }

  @Prop()
  brandHref?: string;

  get computedBrandHref() {
    return this.brandHref ?? `${this.computedBaseUrl}`;
  }

  @Prop()
  activeLink?: string;

  render() {
    return (
      <Host>
        <header class="pw-header">
          <div class="app-container pw-header-container">
            <div>
              <a class="pw-header-brand" href={this.computedBrandHref}>
                <img src={this.computedBrandImageUrl} alt="Logo da Hamburgueria Siri Cascudo" />
              </a>
            </div>

            <nav>
              <ul class="pw-header-links">
                {LINKS.map(link => {
                  const isActive = link.id === this.activeLink;

                  const destHref = `${this.computedLinkBaseUrl}${link.href}`;

                  const anchorClass = `${isActive ? 'pw-header-link-active' : ''}`;

                  return (
                    <li key={link.id}>
                      <a class={anchorClass} href={destHref}>
                        {link.label}
                      </a>
                    </li>
                  );
                })}
              </ul>
            </nav>

            <slot></slot>
          </div>
        </header>
      </Host>
    );
  }
}
