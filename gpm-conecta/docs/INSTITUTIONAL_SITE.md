# GPM Conecta — atualização da experiência institucional

## Direção
A página institucional adota o modelo Editorial Commerce usado como referência no projeto Angomarket, adaptado à identidade e ao contexto B2B da GPM. A adoção é visual e composicional; a arquitetura funcional, o catálogo e as regras comerciais da GPM mantêm-se próprios.

## Estrutura da página inicial
- Abertura estratégica e proposta de valor.
- Sobre a empresa, com posicionamento fundamentado na especificação do produto.
- Áreas de fornecimento existentes na documentação.
- Projetos e portfólio em estado vazio até existirem casos reais autorizados.
- Processo de pedido, consulta, proposta e confirmação.
- Integrações previstas e respetivo estado real.
- Contacto e formulário preparatório.

## Preservação
- `catalogo.html`, `produto.html`, `catalog.js`, `product.js`, `catalog-data.js` e dados do catálogo não são alterados.
- `styles.css` permanece dedicado às páginas do catálogo e fichas.
- A nova página inicial utiliza `home.css` e `home.js`.
- A aplicação Laravel não é alterada por esta entrega.

## Honestidade funcional
O formulário valida e prepara o texto do pedido para cópia. Não envia dados nem cria pedidos. A integração com backend deve ser feita numa etapa própria, com validação no servidor, proteção CSRF, rate limiting, armazenamento, consentimento e notificações.
