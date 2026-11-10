(() => {
  const products = Array.isArray(window.GPM_PRODUCTS) ? window.GPM_PRODUCTS : [];
  const areaNames = {
    construction: 'Construção e materiais',
    hospitality: 'Hotelaria e alojamento',
    worksites: 'Estaleiros e operações',
    offices: 'Escritórios e empresas',
    foodservice: 'Alimentação profissional'
  };
  const ref = new URLSearchParams(window.location.search).get('ref');
  const product = products.find(item => item.ref === ref);
  const unavailable = document.querySelector('#detail-unavailable');
  const head = document.querySelector('#detail-head');
  const body = document.querySelector('#detail-body');

  if (!product) {
    const title = document.querySelector('#unavailable-title');
    const message = document.querySelector('#unavailable-message');
    if (ref) {
      title.textContent = 'Referência não encontrada';
      message.textContent = 'A referência solicitada não está publicada no catálogo atual. Volte ao catálogo para consultar as referências disponíveis.';
    }
  } else {
    unavailable.hidden = true;
    head.hidden = false;
    body.hidden = false;
    document.title = product.name + ' | GPM Conecta';
    document.querySelector('#detail-code').textContent = 'GPM / ' + product.ref + ' / ' + (product.area || 'CATÁLOGO').toUpperCase();
    document.querySelector('#detail-title').textContent = product.name;
    document.querySelector('#detail-summary').textContent = product.summary || '';
    document.querySelector('#detail-description').textContent = product.description || product.summary || 'Descrição técnica a confirmar pela GPM.';
    document.querySelector('#detail-area').textContent = 'ÁREA / ' + (areaNames[product.area] || 'A DEFINIR').toUpperCase();

    const specs = document.querySelector('#detail-specs');
    (Array.isArray(product.specifications) ? product.specifications : []).forEach(spec => {
      const row = document.createElement('div');
      row.className = 'detail-spec-row';
      const term = document.createElement('dt');
      term.textContent = spec.label;
      const value = document.createElement('dd');
      value.textContent = spec.value;
      row.append(term, value);
      specs.append(row);
    });
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
    if (toggle) { toggle.setAttribute('aria-label', 'Abrir menu'); toggle.textContent = '≡'; }
  }));
})();
