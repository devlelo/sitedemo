# GPM Conecta

Plataforma de fornecimento empresarial para construção, alojamento, estaleiros, escritórios e operações de alimentação profissional.

> Estado: interface institucional, catálogo público e modelo de ficha de produto implementados em frontend estático. O catálogo permanece sem referências até a GPM fornecer dados reais e validados.

## Objetivo

Permitir que visitantes explorem o catálogo publicamente e que clientes autenticados submetam pedidos de fornecimento. Cada pedido é analisado pela equipa GPM antes de ser confirmado como encomenda comercial.

A GPM consulta fornecedores manualmente na primeira fase. A arquitetura deverá permitir automatizar essas consultas através de APIs de parceiros no futuro.

## Áreas do produto

- Website institucional.
- Marketplace público para descoberta e consulta de produtos.
- Registo e autenticação de clientes empresariais, com NIF.
- Carrinho e submissão de pedidos.
- Portal do cliente: perfil, pedidos, acompanhamento, conversas e documentos PDF.
- Administração GPM: catálogo, clientes, pedidos, consultas a fornecedores, propostas, equipa e relatórios.
- Chat associado individualmente a cada pedido.
- Notificações por SMS e email através de adaptadores.
- Arquitetura preparada para gateway de pagamento angolano e integrações de fornecedores/logística.

## Regras comerciais fundamentais

1. Navegar no catálogo não exige conta.
2. Submeter um pedido exige conta autenticada e NIF.
3. Submeter um pedido não significa que a GPM aceitou a venda.
4. A equipa GPM verifica disponibilidade, quantidade, preço, prazo e condições com fornecedores.
5. A GPM pode propor alterações e alternativas sem apagar o pedido original.
6. Só depois da aceitação comercial o pedido passa a encomenda confirmada.
7. Cada pedido mantém o seu próprio histórico, conversa, versões de proposta e documentos.
8. Pagamentos online ficam para uma fase posterior, sem acoplamento ao núcleo de pedidos.

## Primeira implementação visual

A interface institucional está em `index.html`. O catálogo dedicado está em `catalogo.html` e as fichas individuais em `produto.html`. Os estilos partilhados estão em `styles.css`; as interações institucionais e de catálogo usam `app.js`, `catalog.js` e `product.js`. A direção aprovada é Neo-Industrial Field Manual, adaptada à identidade oficial da GPM: branco `#FFFFFF`, azul-marinho `#0A2945` e dourado `#CE9E53`. O catálogo apresenta um estado vazio honesto até existirem produtos reais validados. Esta versão é frontend estático e não processa pedidos nem autenticação.

O catálogo partilha a validação e a normalização de pesquisa em `catalog-data.js`. A pesquisa ignora acentos e inclui área e especificações; referências incompletas ou duplicadas não são apresentadas. Os testes da camada de dados estão em `tests/catalog-data.test.js`.

## Estrutura

- `docs/PRODUCT_SPEC.md`: requisitos e jornadas.
- `docs/ARCHITECTURE.md`: arquitetura e fronteiras entre módulos.
- `docs/INTEGRATIONS.md`: estratégia para APIs, gateways e fornecedores.
- `docs/DESIGN_BRIEF.md`: fingerprint visual aprovado e identidade oficial.
- `docs/CATALOG.md`: modelo de dados, regras e limites do catálogo público.
- `catalogo.html` e `produto.html`: descoberta pública e ficha de produto.
- `products.js` e `catalog-data.js`: dados e regras partilhadas de publicação/pesquisa.
- `catalog.js` e `product.js`: interações do catálogo e da ficha.
- `tests/catalog-data.test.js`: testes automáticos da camada de dados do catálogo.

## Base tecnológica

Aimeos está em avaliação como candidato de e-commerce Laravel API-first. Não foi ainda aprovado como dependência definitiva. A seleção será feita após validação de compatibilidade, instalação, extensão, licenças, segurança e adequação ao fluxo de pedidos da GPM.

## Desenvolvimento

Para executar os testes da camada de dados do catálogo, a partir da raiz do repositório:

```bash
node --test gpm-conecta/tests/catalog-data.test.js
```

A aplicação Laravel executável será criada depois da validação técnica da base e da aprovação da direção visual. Não colocar credenciais, tokens ou dados reais de clientes no repositório.
