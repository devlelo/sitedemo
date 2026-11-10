(() => {
  const products = Array.isArray(window.GPM_PRODUCTS) ? window.GPM_PRODUCTS : [];
  const areaNames = {
    construction: 'Construção',
    hospitality: 'Hotelaria',
    worksites: 'Estaleiros',
    offices: 'Escritórios',
    foodservice: 'Alimentação profissional'
  };
  const filters = [...document.querySelectorAll('[data-filter]')];
  const search = document.querySelector('#catalog-query');
  const list = document.querySelector('#catalog-results-list');
  const empty = document.querySelector('#catalog-page-empty');
  const status = document.querySelector('#catalog-page-status');
  const total = document.querySelector('#catalog-total');
  let activeFilter = 'all';

  function makeProductRow(product, index) {
    const row = document.createElement('a');
    row.className = 'catalog-product-row';
    row.href = './produto.html?ref=' + encodeURIComponent(product.ref);
    const code = document.createElement('span');
    code.className = 'catalog-product-code';
    code.textContent = String(index + 1).padStart(2, '0');
    const info = document.createElement('span');
    const name = document.createElement('span');
    name.className = 'catalog-product-name';
    name.textContent = product.name;
    const meta = document.createElement('span');
    meta.className = 'catalog-product-meta';
    meta.textContent = [product.ref, areaNames[product.area] || 'Área GPM'].filter(Boolean).join(' / ');
    info.append(name, meta);
    const action = document.createElement('span');
    action.className = 'catalog-product-link';
    action.textContent = 'Ver ficha ↗';
    row.append(code, info, action);
    return row;
  }

  function render() {
    const query = (search?.value || '').trim().toLocaleLowerCase('pt');
    const visible = products.filter(product => {
      const matchesArea = activeFilter === 'all' || product.area === activeFilter;
      const haystack = [product.name, product.ref, product.summary, ...(product.keywords || [])].join(' ').toLocaleLowerCase('pt');
      return matchesArea && haystack.includes(query);
    });
    list.replaceChildren(...visible.map(makeProductRow));
    empty.hidden = visible.length > 0;
    total.textContent = visible.length + (visible.length === 1 ? ' REFERÊNCIA' : ' REFERÊNCIAS') + ' / ' + products.length + ' PUBLICADAS';
    if (products.length === 0) {
      status.textContent = 'Ainda não existem produtos publicados. A pesquisa e os filtros estão prontos para o catálogo validado.';
    } else if (visible.length === 0) {
      status.textContent = 'Nenhum produto corresponde à pesquisa e à área selecionada.';
    } else {
      status.textContent = visible.length + ' produto(s) encontrado(s). Consulte cada ficha para conhecer a informação validada.';
    }
  }

  filters.forEach(button => button.addEventListener('click', () => {
    activeFilter = button.dataset.filter;
    filters.forEach(item => item.setAttribute('aria-pressed', String(item === button)));
    render();
  }));
  search?.addEventListener('input', render);

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
  render();
})();
