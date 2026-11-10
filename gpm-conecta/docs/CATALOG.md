# GPM Conecta | Modelo de catálogo público

## Estado

A experiência de catálogo e detalhe está implementada no frontend estático. O catálogo começa intencionalmente sem produtos publicados porque ainda não foram fornecidos dados de produto validados pela GPM.

## Ficheiros

- `catalogo.html`: página pública de descoberta, pesquisa e filtro por área.
- `produto.html`: modelo de detalhe por referência.
- `products.js`: fonte local de dados públicos do catálogo.
- `catalog.js`: pesquisa, filtros, contagem e apresentação das referências.
- `product.js`: resolução da referência e apresentação da ficha.
- `styles.css`: sistema visual partilhado com as páginas institucionais.

## Estrutura de uma referência

Cada produto publicado em `window.GPM_PRODUCTS` deve seguir este formato:

```js
{
  ref: "REFERENCIA-INTERNA",
  name: "Nome confirmado do produto",
  area: "construction",
  summary: "Resumo validado pela equipa GPM.",
  description: "Descrição técnica validada.",
  keywords: ["termo", "sinónimo"],
  specifications: [
    { label: "Unidade", value: "Unidade de venda confirmada" },
    { label: "Material", value: "Material confirmado" }
  ]
}
```

Áreas aceites: `construction`, `hospitality`, `worksites`, `offices`, `foodservice`.

## Regras de publicação

1. Publicar apenas referências e descrições confirmadas pela GPM.
2. Não adicionar preços, stock, prazos, quantidades mínimas ou fornecedores sem validação comercial atual.
3. A ficha pública não é uma proposta, uma reserva nem uma confirmação de disponibilidade.
4. Não incluir contactos privados, credenciais, dados de clientes ou informação confidencial de fornecedores.
5. Usar referências únicas e estáveis para construir o URL `produto.html?ref=...`.
6. Se futuramente forem necessários preço e disponibilidade, estes devem ser servidos por uma API com regras de validade e autorização adequadas, não tratados como garantias permanentes no ficheiro estático.

## Limites atuais

A pesquisa e os filtros funcionam sobre os dados públicos carregados no browser. Não existe backend, autenticação, carrinho persistente, submissão de pedidos, consulta de fornecedores ou gestão de catálogo. O ficheiro de dados vazio não representa indisponibilidade comercial da GPM, apenas ausência de referências publicadas nesta versão.
