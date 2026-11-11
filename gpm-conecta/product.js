(() => {
  const catalog = window.GPM_CATALOG;
  const ref = new URLSearchParams(window.location.search).get('ref');
  const product = catalog ? catalog.findProduct(ref, window.GPM_PRODUCTS) : null;
  const unavailable = document.querySelector('#detail-unavailable');
  const head = document.querySelector('#detail-head');
  const body = document.querySelector('#detail-body');

  if (!product) {
    const title = document.querySelector('#unavailable-title');
    const message = document.querySelector('#unavailable-message');

    if (ref) {
      title.textContent = 'Referência não encontrada';
      message.textContent = 'A referência solicitada não está publicada no catálogo atual. Volte ao catálogo para consultar as referências disponíveis.';
      document.title = 'Referência não encontrada | GPM Conecta';
    } else {
      document.title = 'Produto não publicado | GPM Conecta';
    }
  } else {
    unavailable.hidden = true;
    head.hidden = false;
    body.hidden = false;
    document.title = product.name.trim() + ' | GPM Conecta';

    document.querySelector('#detail-code').textContent =
      'GPM / ' + product.ref.trim() + ' / ' + product.area.toUpperCase();
    document.querySelector('#detail-title').textContent = product.name.trim();

    const summary = typeof product.summary === 'string' ? product.summary.trim() : '';
    const summaryElement = document.querySelector('#detail-summary');
    summaryElement.textContent = summary;
    summaryElement.hidden = !summary;

    const description = typeof product.description === 'string' ? product.description.trim() : '';
    document.querySelector('#detail-description').textContent =
      description || 'Descrição técnica ainda não publicada.';
    document.querySelector('#detail-area').textContent =
      'ÁREA / ' + catalog.getAreaLabel(product.area).toUpperCase();

    const specs = document.querySelector('#detail-specs');
    const validSpecifications = Array.isArray(product.specifications)
      ? product.specifications.filter(spec =>
          spec &&
          typeof spec === 'object' &&
          typeof spec.label === 'string' &&
          spec.label.trim() &&
          typeof spec.value === 'string' &&
          spec.value.trim()
        )
      : [];

    specs.replaceChildren(...validSpecifications.map(spec => {
      const row = document.createElement('div');
      row.className = 'detail-spec-row';

      const term = document.createElement('dt');
      term.textContent = spec.label.trim();

      const value = document.createElement('dd');
      value.textContent = spec.value.trim();

      row.append(term, value);
      return row;
    }));
    specs.hidden = validSpecifications.length === 0;
  }

  const toggle = document.querySelector('.menu-toggle');
  const nav = document.querySelector('.main-nav');
  toggle?.addEventListener('click', () => {
    const open = nav.classList.toggle('open');
    toggle.setAttribute('aria-expanded', String(open));
    toggle.setAttribute('aria-label', open ? 'Fechar menu' : 'Abrir menu');
    toggle.textContent = open ? '×' : '≡';
  });
  nav?.querySelectorAll('a').forEach(link => link.addEventListener('click', () => {
    nav.classList.remove('open');
    toggle?.setAttribute('aria-expanded', 'false');
    if (toggle) {
      toggle.setAttribute('aria-label', 'Abrir menu');
      toggle.textContent = '≡';
    }
  }));
})();
