import { Component, Element, Host, Prop, h } from '@stencil/core';
import { getPwConfigBaseUrl } from '../../utils/utils';

const SECTIONS = [
  {
    id: 'clientes',
    label: 'Clientes',

    links: [
      {
        id: 'clientes-cadastrar',
        href: 'clientes/cadastrar/',
        label: 'Cadastrar Cliente',
      },
    ],
  },

  {
    id: 'fornecedores',
    label: 'Fornecedores',

    links: [
      {
        id: 'fornecedores-cadastrar',
        href: 'fornecedores/cadastrar/',
        label: 'Cadastrar Fornecedor',
      },
    ],
  },

  {
    id: 'funcionarios',
    label: 'Funcionários',

    links: [
      {
        id: 'funcionarios-cadastrar',
        href: 'funcionarios/cadastrar/',
        label: 'Cadastrar Funcionário',
      },
    ],
  },

  {
    id: 'pedidos',
    label: 'Pedidos',

    links: [
      {
        id: 'pedidos-cadastrar',
        href: 'pedidos/cadastrar/',
        label: 'Cadastrar Pedido',
      },
    ],
  },

  {
    id: 'produtos',
    label: 'Produtos',

    links: [
      {
        id: 'produtos-cadastrar',
        href: 'produtos/cadastrar/',
        label: 'Cadastrar Produto',
      },
    ],
  },

  {
    id: 'promocoes',
    label: 'Promoções',

    links: [
      {
        id: 'promocoes-cadastrar',
        href: 'promocoes/cadastrar/',
        label: 'Cadastrar Promoção',
      },
    ],
  },
];

@Component({
  tag: 'pw-painel-layout',
  styleUrl: 'pw-painel-layout.css',
  shadow: false,
})
export class PwPainelLayout {
  @Element()
  el: HTMLElement;

  @Prop()
  baseUrl: string;

  get computedBaseUrl() {
    return this.baseUrl ?? getPwConfigBaseUrl(this.el);
  }

  get computedAdminUrl() {
    return `${this.computedBaseUrl}admin/`;
  }

  @Prop()
  activeLink?: string;

  render() {
    return (
      <Host>
        <div class="pw-painel-layout">
          <div class="flex-shrink-0 p-3 app-painel-navigation" style={{ width: '280px' }}>
            <a href={this.computedAdminUrl} class="d-flex align-items-center pb-3 pt-2 mb-3 link-body-emphasis text-decoration-none border-bottom">
              <span class="fs-5 fw-semibold">Painel</span>
            </a>

            <ul class="list-unstyled ps-0">
              {SECTIONS.map(section => {
                const sectionTarget = `menu-${section.id}`;

                return (
                  <li key={section.id} class="mb-1">
                    <button
                      aria-expanded="true"
                      data-bs-toggle="collapse"
                      data-bs-target={`#${sectionTarget}`}
                      class="btn btn-toggle d-inline-flex align-items-center rounded border-0"
                    >
                      {section.label}
                    </button>

                    <div class="collapse show" id={sectionTarget}>
                      <div class="list-group">
                        {section.links.map(link => {
                          const targetUrl = `${this.computedAdminUrl}${link.href}`;

                          const isActive = link.id === this.activeLink;

                          return (
                            <a
                              key={link.id}
                              href={targetUrl}
                              {...(isActive ? { 'aria-current': 'true' } : {})}
                              class={`list-group-item list-group-item-action ${isActive ? 'list-group-item-danger active' : ''}: `}
                            >
                              {link.label}
                            </a>
                          );
                        })}
                      </div>
                    </div>
                  </li>
                );
              })}
            </ul>
          </div>

          <div>
            <slot></slot>
          </div>
        </div>
      </Host>
    );
  }
}
