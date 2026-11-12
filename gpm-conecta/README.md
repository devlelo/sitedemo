# GPM Conecta · Website institucional

Website institucional e ponto de entrada para o catálogo B2B da GPM Conecta.

## Direção visual
- Modelo visual: Editorial Commerce, adaptado ao fornecimento empresarial.
- Identidade: branco, azul-marinho #0A2945 e dourado #CE9E53.
- Tipografia: Archivo Black, Playfair Display, Manrope e DM Mono.
- Composição editorial assimétrica, headline de escala ampla, grelha técnica, listas de áreas, painéis escuros e movimento discreto.
- A logo oficial é utilizada como imagem completa. Não é reconstruída em texto.

## Páginas e secções
A página inicial inclui:
1. Abertura estratégica.
2. Sobre a empresa.
3. Serviços e áreas de fornecimento.
4. Portfólio/projetos, com estado vazio honesto até existirem casos autorizados.
5. Processo de fornecimento.
6. Integrações previstas.
7. Contacto e formulário de preparação de pedido.

O catálogo público e a ficha de produto existentes permanecem em `catalogo.html` e `produto.html`.

## Formulário
O formulário valida os campos no browser e prepara uma mensagem que pode ser copiada. Ainda não envia dados para um servidor. A ligação ao backend Laravel, armazenamento, notificações e consentimento final devem ser implementados e testados antes de ativar a submissão online.

## Integrações
O website não declara integrações ativas que ainda não foram contratadas ou ligadas. Email/notificações, conectores de fornecedores, pagamentos angolanos e logística estão documentados como etapas futuras em `docs/INTEGRATIONS.md`.

## Logo
A imagem oficial está no repositório em `gpm/GPM CONECTA.png` na branch principal. O website usa o ficheiro raw do mesmo repositório enquanto a branch de desenvolvimento mantém a pasta institucional isolada.

## Execução
Abrir `index.html` ou servir a pasta `gpm-conecta` com um servidor estático. Fontes externas exigem ligação à internet.

## Limites conhecidos
- Contactos oficiais, morada, email e telefone não foram fornecidos; não foram inventados.
- O portfólio não apresenta projetos fictícios.
- O catálogo permanece dependente de referências reais e validadas.
- O formulário é preparatório, não é um canal de submissão ativo.
