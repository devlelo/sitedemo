# DIREÇÃO DE EDIÇÃO, DESIGN E MOTION
## Guia complementar ao manifest.txt v4.3

**Estado:** Norma complementar de direção criativa e implementação.  
**Âmbito:** Todos os websites e experiências digitais criados ou editados neste repositório.  
**Precedência:** Este guia complementa o `manifest.txt`. Não substitui nem enfraquece nenhuma regra do Manifest 4.3. Em caso de conflito, prevalece o manifest.

---

# 1. OBJETIVO

Este documento orienta como transformar o estilo visual aprovado numa experiência digital completa. A edição não deve limitar-se a escolher cores, fontes e componentes: deve definir composição, ritmo, imagens, tipografia, transições, animações, interações e comportamento responsivo.

**Regra central:** cada decisão de edição deve reforçar o estilo escolhido e servir o objetivo real do website.

Não aplicar efeitos só porque são modernos. Não escolher bibliotecas pela popularidade. Não transformar todos os websites numa demonstração de animações.

# 2. ORDEM OBRIGATÓRIA DE TRABALHO

Antes de editar:

1. Ler integralmente o `manifest.txt` da branch ativa.
2. Inspecionar a estrutura do projeto e os ficheiros relevantes.
3. Identificar o que já funciona e deve ser preservado.
4. Compreender o negócio, o público, o conteúdo, os objetivos e as ações principais.
5. Confirmar o estilo escolhido pelo utilizador. Se ainda não foi escolhido, seguir o processo de recomendação do Manifest 4.3 e aguardar aprovação.
6. Criar uma direção de edição específica para o projeto.
7. Definir a arquitetura técnica e as bibliotecas estritamente necessárias.
8. Implementar por etapas e testar os fluxos reais.

Não começar pela instalação de dependências nem pela escolha de efeitos.

# 3. FICHA DE DIREÇÃO DE EDIÇÃO

Antes de implementar uma página ou uma alteração visual relevante, definir:

- **Estilo aprovado:** nome exato do estilo e os seus princípios.
- **Intenção:** o que a página deve comunicar e provocar.
- **Composição:** grelha, alinhamento, assimetria, escala, sobreposição e ritmo.
- **Tipografia:** famílias, pesos, hierarquia, largura de leitura e comportamento das linhas.
- **Cor e materiais:** paleta, contraste, superfícies, textura e tratamento.
- **Imagem:** assunto, proporção, enquadramento, recorte, posição e relação com o texto.
- **Movimento:** transições, entradas, scroll, hover e microinterações permitidas.
- **Som e vídeo:** apenas quando forem realmente necessários e autorizados pelo contexto.
- **Responsividade:** como a composição será reorganizada em ecrãs pequenos.
- **Desempenho:** orçamento de dependências, imagens, fontes e animações.
- **Acessibilidade:** foco, teclado, contraste, semântica e movimento reduzido.
- **Elementos proibidos:** padrões que contradizem o estilo escolhido ou as regras do Manifest.

Esta ficha deve ser curta, concreta e utilizável durante a implementação. Não é um texto decorativo.

# 4. TRADUZIR O ESTILO EM DECISÕES VISUAIS

O estilo escolhido determina a linguagem da página. Não basta colocar uma fonte serifada num layout genérico e chamar-lhe editorial.

## 4.1 Magazine / Newspaper / Editorial

Quando aprovado:
- Pensar em hierarquia de manchetes, colunas, legendas, notas, números de edição e ritmo de leitura.
- Explorar grelhas editoriais, assimetria, imagens de grande escala e recortes.
- Usar serifas, sans-serif ou fontes condensadas de acordo com a publicação imaginada.
- Alternar densidade e espaço vazio como numa composição impressa.
- Usar regras, margens e legendas com intenção editorial.
- Evitar transformar tudo em cartões arredondados ou secções genéricas de landing page.

## 4.2 Book / Art Catalogue / Archive

Quando aprovado:
- Tratar cada secção como uma página, entrada, obra ou registo de arquivo.
- Dar importância à sequência, às margens, à legenda e à relação entre imagem e texto.
- Usar navegação discreta e hierarquia consistente.
- Permitir exploração sem esconder informação essencial.

## 4.3 Cinematic / Immersive / Storytelling

Quando aprovado:
- Construir uma sequência visual com abertura, desenvolvimento e conclusão.
- Usar imagens em ecrã amplo, cortes, máscaras, profundidade e movimento de câmara simulado quando adequado.
- Controlar o ritmo para que o conteúdo continue acessível.
- Evitar introduções longas que atrasem o acesso à informação ou à ação principal.

## 4.4 Brutalist / Neo-Brutalist / Digital Brutalism

Quando aprovado:
- Explorar contraste, tipografia expressiva, geometria, grelhas evidentes e composição direta.
- Usar bordas, blocos e cores com intenção, não como decoração aleatória.
- Manter hierarquia, leitura e estados funcionais claros.
- Não confundir brutalismo com falta de acabamento.

## 4.5 Luxury / Hospitality / Premium Editorial

Quando aprovado:
- Trabalhar escala, fotografia, tipografia, espaço, ritmo e detalhe.
- Usar movimento subtil e preciso.
- Evitar efeitos chamativos, excesso de gradientes, sombras pesadas e animações elásticas sem justificação.
- A qualidade deve vir da composição e dos materiais, não de efeitos acumulados.

## 4.6 Product / Dashboard / Utility Interface

Quando aprovado:
- Priorizar clareza, estados, feedback, navegação e rapidez de execução.
- Usar animações curtas para explicar mudanças de estado e orientar o utilizador.
- Não esconder ações nem dados atrás de transições cinematográficas.
- O estilo visual deve melhorar a compreensão do produto.

**Nota:** estas orientações são exemplos de tradução visual, não estilos que possam ser misturados sem autorização. O estilo aprovado e a sua ficha de identidade prevalecem.

# 5. DIREÇÃO DE IMAGEM E VÍDEO

Cada imagem deve ter uma função definida: hero, fundo, retrato, detalhe, produto, prova, editorial, textura ou apoio.

Antes de posicionar uma imagem, avaliar:
- Orientação e proporção real.
- Assunto principal e direção do olhar ou movimento.
- Espaço negativo disponível para texto.
- Ponto focal e áreas que não podem ser cortadas.
- Contraste e legibilidade sobre a imagem.
- Se deve ser imagem de fundo, elemento editorial, imagem lateral, sequência ou conteúdo em grelha.
- Recorte diferente para desktop e mobile, quando necessário.

Regras técnicas:
- Usar `object-fit` e `object-position` deliberadamente.
- Definir proporções com `aspect-ratio` sempre que possível.
- Não esticar imagens nem deformar pessoas, produtos ou objetos.
- Usar formatos modernos como AVIF ou WebP quando disponíveis e adequados.
- Definir dimensões para reduzir layout shift.
- Usar lazy loading em imagens fora do primeiro ecrã.
- Não aplicar lazy loading à imagem principal quando isso prejudicar o carregamento do LCP.
- Preferir vídeo comprimido, sem autoplay com som e com fallback estático.
- Não colocar texto sobre uma zona visualmente ocupada sem garantir contraste.
- Não usar imagens aleatórias apenas para preencher espaços.

# 6. BIBLIOTECA DE TRANSIÇÕES E ANIMAÇÕES

Escolher o movimento a partir do estilo e da intenção. A lista abaixo é um repertório de possibilidades, não uma lista de efeitos obrigatórios.

## 6.1 Transições inspiradas em edição de vídeo

- Match Cut: continuidade visual entre duas cenas ou elementos.
- Whip Pan: movimento rápido lateral ou vertical.
- Zoom Transition: aproximação ou afastamento entre cenas.
- Whip Zoom: combinação de movimento rápido e zoom.
- Cross Dissolve: fusão gradual entre imagens ou estados.
- Dip to Black / White: passagem breve por uma superfície escura ou clara.
- Wipe: revelação por uma máscara que atravessa o ecrã.
- Iris: abertura ou fecho circular.
- Glitch: distorção digital breve, apenas quando coerente com o estilo.
- Luma Wipe: revelação guiada pela luminosidade.
- Liquid Transition: deformação fluida entre estados.
- Film Burn / Light Leak: passagem com luz e textura analógica.
- Object Wipe: um objeto ou imagem atravessa o ecrã e revela a próxima cena.
- Split Screen: divisão e reorganização de áreas visuais.
- Freeze Frame: pausa visual deliberada antes da continuação.

## 6.2 Motion graphics

- Kinetic Typography.
- Text Mask Reveal.
- Stagger Animation.
- Bounce / Elastic, apenas quando adequado.
- Parallax.
- Ken Burns.
- Shape Morphing.
- SVG Stroke Animation.
- Particle Animation.
- 3D Rotation.
- Speed Ramp.
- Focus Pull simulado.
- Film Grain.
- Ink Reveal.
- Smoke Reveal.
- Light Trails.
- 3D Typography.
- Text Scramble.
- Counter Animation.
- Split Text Animation.

## 6.3 Scroll e navegação

- Scroll Reveal.
- Pinned Sections.
- Horizontal Scroll.
- Image Sequence.
- Scroll-driven Zoom.
- Page Transition.
- Shared Element Transition.
- Curtain Reveal.
- Infinite Marquee.
- Magnetic Hover.
- Cursor Following.
- Image Trail.
- Hover Distortion.
- SVG Path Animation.
- Progress Indicator.
- Sticky Storytelling.

## 6.4 Microinterações

- Hover e active states.
- Feedback de clique.
- Botões com resposta visual.
- Menus e submenus.
- Abertura de acordeões.
- Validação de formulários.
- Estados de carregamento.
- Confirmação de ações.
- Transições entre tabs.
- Feedback de filtros e pesquisa.

Não animar todos os elementos. Definir uma hierarquia: movimento principal, movimento de apoio e feedback funcional.

# 7. ESCOLHA DE TECNOLOGIAS E BIBLIOTECAS

A tecnologia deve resolver uma necessidade concreta. **Não usar React, GSAP ou qualquer outra biblioteca por obrigação.**

## 7.1 Base preferencial

Para páginas estáticas, institucionais, landing pages, menus e experiências simples:
- HTML semântico.
- CSS moderno.
- JavaScript modular e nativo.
- CSS Grid, Flexbox, Custom Properties e CSS Animations.
- SVG para elementos gráficos vetoriais.

Esta base costuma ser a opção mais leve e simples de manter.

## 7.2 Quando usar React ou alternativas

Usar React quando o projeto tiver necessidade real de:
- Componentes reutilizáveis com estado complexo.
- Interfaces com muitos dados e atualizações frequentes.
- Navegação e fluxos de aplicação mais elaborados.
- Ecossistema React já existente no projeto.
- Integração com bibliotecas que dependem de React.

Alternativas:
- **Preact:** alternativa mais pequena quando a compatibilidade com React é suficiente.
- **Vue:** opção para interfaces reativas com estrutura progressiva.
- **Svelte:** opção para componentes reativos com pouco runtime no cliente.
- **Astro:** adequado a websites orientados a conteúdo, permitindo manter grande parte da página em HTML e hidratar apenas componentes interativos.

Não migrar um projeto funcional para outro framework apenas por preferência pessoal. Considerar o custo de migração, o peso final, a manutenção e as dependências já instaladas.

## 7.3 Movimento e animação

Escolher apenas o necessário:

- **CSS Transitions / Keyframes:** primeira opção para hover, fades, transforms, estados e animações simples.
- **GSAP:** para timelines complexas, sequências sincronizadas, controlo preciso e ScrollTrigger quando a complexidade o justificar.
- **Motion (Motion One / Motion para frameworks):** para animações declarativas e interações de interface quando a integração justificar a dependência.
- **Lenis:** apenas quando for necessário suavizar o scroll; não é requisito e deve ser avaliado com acessibilidade e scroll nativo.
- **Lottie:** para animações vetoriais exportadas, desde que o ficheiro e o runtime sejam leves.
- **SVG nativo:** para máscaras, caminhos, traços, ícones e animações vetoriais.
- **Three.js:** apenas para experiências 3D ou WebGL que acrescentem valor real.
- **Canvas / WebGL / GLSL:** para experiências gráficas específicas, com fallback e controlo de desempenho.
- **View Transitions API:** para transições entre páginas ou estados quando o suporte e a arquitetura do projeto forem adequados.

Não instalar várias bibliotecas para fazer a mesma tarefa. Não usar Three.js para uma simples rotação CSS. Não usar GSAP para um fade de botão. Não usar Lottie para um ícone simples.

## 7.4 Tipografia e ícones

- Preferir fontes locais ou carregamento otimizado quando possível.
- Carregar apenas pesos e estilos realmente utilizados.
- Usar `font-display: swap` ou estratégia equivalente adequada.
- Usar SVG inline ou sprites para ícones quando isso reduzir dependências.
- Evitar importar bibliotecas inteiras de ícones quando só são necessários poucos símbolos.

# 8. REGRAS DE DESEMPENHO

O resultado deve parecer rico sem ser tecnicamente pesado.

- Auditar dependências antes de adicionar novas.
- Evitar bibliotecas sobrepostas.
- Preferir animações de `transform` e `opacity` quando possível.
- Evitar animar continuamente propriedades que provoquem layout ou pintura pesada.
- Usar `will-change` apenas quando necessário e de forma limitada.
- Evitar partículas, blur, filtros e efeitos WebGL permanentes em dispositivos modestos.
- Pausar animações fora do ecrã quando fizer sentido.
- Respeitar `prefers-reduced-motion`.
- Não bloquear scroll, navegação, formulários ou ações principais.
- Carregar recursos pesados apenas quando forem necessários.
- Evitar dependências só para criar efeitos que podem ser feitos com CSS.
- Testar em dispositivos móveis reais ou em condições próximas de dispositivos modestos.

Não estabelecer um limite de peso fictício sem medir. Registar o peso real dos recursos adicionados e comparar o custo com o benefício visual e funcional.

# 9. RESPONSIVIDADE E MOVIMENTO EM MOBILE

Mobile não é uma versão reduzida do desktop.

- Reorganizar a composição, não apenas diminuir tamanhos.
- Rever posição e recorte das imagens.
- Reduzir ou substituir efeitos de cursor que não existem em touch.
- Evitar hover como único meio de acesso a uma ação.
- Simplificar sequências de scroll longas.
- Evitar scroll horizontal involuntário.
- Garantir alvos de toque confortáveis.
- Rever sticky, fixed, pinned e horizontal scroll em ecrãs pequenos.
- Manter conteúdo essencial visível mesmo se uma animação falhar.
- Desativar ou simplificar efeitos pesados em dispositivos com menor capacidade.

# 10. ACESSIBILIDADE E CONTROLO

- Respeitar `prefers-reduced-motion: reduce`.
- Disponibilizar alternativa sem animação para movimentos não essenciais.
- Não comunicar informação apenas por movimento ou cor.
- Garantir navegação por teclado e foco visível.
- Evitar flashes rápidos ou efeitos que possam causar desconforto.
- Não esconder conteúdo essencial até um evento de scroll ou hover.
- Não impedir o utilizador de controlar o scroll.
- Garantir contraste suficiente em todas as fases da animação.

# 11. IMPLEMENTAÇÃO SEM DESTRUIR O PROJETO

Ao editar um website existente:

1. Identificar os ficheiros responsáveis pelo comportamento pedido.
2. Não reescrever a aplicação inteira para adicionar uma animação ou uma secção.
3. Não substituir componentes funcionais sem necessidade comprovada.
4. Não alterar conteúdo, rotas, integrações ou identidade visual fora do âmbito pedido.
5. Manter dependências e convenções existentes quando forem adequadas.
6. Isolar novos efeitos em módulos ou componentes quando isso melhorar a manutenção.
7. Remover código experimental que não será utilizado.
8. Não deixar bibliotecas, imports, listeners ou animações sem função.

Quando o utilizador pede uma alteração específica, executar essa alteração e preservar o resto.

# 12. TESTES ANTES DA ENTREGA

Verificar:

- A página abre sem erros de consola.
- Os links, botões, menus e formulários continuam funcionais.
- As transições não bloqueiam interações.
- Não há scroll horizontal acidental.
- As imagens mantêm proporções e recortes corretos.
- O conteúdo continua acessível com movimento reduzido.
- A página funciona em mobile, tablet e desktop.
- O carregamento inicial não é prejudicado por animações ou bibliotecas.
- Não existem elementos que só aparecem depois de uma animação que pode falhar.
- O estilo escolhido permanece coerente em todas as secções.

No relatório final, indicar as bibliotecas adicionadas, a razão de cada uma, o que foi testado e qualquer limitação ainda existente. Nunca afirmar que foi testado algo que não foi efetivamente verificado.

# 13. CHECKLIST DE APROVAÇÃO

Antes de considerar a edição concluída:

- [ ] O Manifest 4.3 foi respeitado.
- [ ] O estilo aprovado foi seguido sem mistura não autorizada.
- [ ] A composição é específica deste projeto.
- [ ] Imagens, tipografia, cor e movimento pertencem à mesma direção.
- [ ] Cada animação tem uma função ou intenção clara.
- [ ] A tecnologia escolhida é proporcional à complexidade.
- [ ] Não foram adicionadas dependências redundantes.
- [ ] O desempenho mobile foi considerado.
- [ ] Acessibilidade e movimento reduzido foram considerados.
- [ ] O funcionamento anterior foi preservado.
- [ ] Os fluxos principais foram testados.
- [ ] O relatório final descreve honestamente o trabalho realizado.

---

## PRINCÍPIO FINAL

**O estilo dirige a edição. A edição dirige a escolha dos efeitos. A necessidade dirige a escolha da tecnologia.**

Nunca inverter esta ordem para justificar o uso de uma biblioteca, framework ou animação. O objetivo é criar websites com identidade visual forte, movimento intencional, código sustentável e carregamento rápido.
