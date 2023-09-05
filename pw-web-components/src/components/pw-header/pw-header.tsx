import { Component, Host, Prop, h } from '@stencil/core';

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
  @Prop()
  baseUrl: string;

  @Prop()
  activeLink?: string;

  @Prop()
  brandImageUrl?: string;

  get computedBrandImageUrl() {
    return this.brandImageUrl ?? `${this.baseUrl}imgs/logo.webp`;
  }

  @Prop()
  linkBaseUrl?: string;

  get computedLinkBaseUrl() {
    return this.linkBaseUrl ?? `${this.baseUrl}`;
  }

  @Prop()
  brandHref?: string;

  get computedBrandHref() {
    return this.brandHref ?? `${this.baseUrl}`;
  }

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
