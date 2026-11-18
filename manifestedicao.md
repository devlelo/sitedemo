# MANIFESTEdição — DIREÇÃO DE EDIÇÃO, DESIGN E MOTION
## Guia complementar ao manifest.txt v4.5

**Estado:** Norma complementar de direção criativa e implementação.  
**Âmbito:** Todos os websites e experiências digitais criados ou editados neste repositório.  
**Precedência:** Este guia complementa o `manifest.txt` v4.5. Não substitui nem enfraquece nenhuma regra do Manifest 4.5. Em caso de conflito, prevalece o manifest.

---

# 1. OBJETIVO

Este documento orienta como transformar o estilo visual aprovado numa experiência digital completa. A edição não deve limitar-se a escolher cores, fontes e componentes: deve definir composição, ritmo, imagens, tipografia, transições, animações, interações e comportamento responsivo.

**Regra central:** cada decisão de edição deve reforçar o estilo escolhido e servir o objetivo real do website.

Não aplicar efeitos só porque são modernos. Não escolher bibliotecas pela popularidade. Não transformar todos os websites numa demonstração de animações.

# 2. ORDEM OBRIGATÓRIA DE TRABALHO

Antes de editar qualquer website, landing page ou experiência visual:

1. Ler integralmente o `manifest.txt` da branch ativa.
2. Ler integralmente este `manifestedicao.md` da mesma branch.
3. Ler integralmente o `MANIFEST-COPY.md` quando houver criação, revisão ou composição de texto visível.
4. Inspecionar a estrutura do projeto, os ficheiros, os assets e o comportamento atual.
5. Identificar o que já funciona e deve ser preservado.
6. Compreender o negócio, o público, o conteúdo, os objetivos e as ações principais.
7. Confirmar o estilo escolhido pelo utilizador. Se ainda não foi escolhido, seguir o processo de recomendação do Manifest 4.5 e aguardar aprovação.
8. Criar a ficha de direção de edição, incluindo uma decisão explícita sobre motion.
9. Definir a arquitetura técnica e as bibliotecas estritamente necessárias.
10. Implementar por etapas e testar os fluxos reais.

Esta sequência deve permanecer alinhada com o router da secção 48 do Manifest 4.5. Não substituir a leitura integral por resumos ou memória.

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

Escolher o movimento a partir do estilo aprovado e da intenção do projeto. A lista abaixo é um repertório de possibilidades, não uma lista de efeitos obrigatórios.

**Regra de execução:** motion não é obrigatório em todos os websites. É obrigatório tomar e registar uma decisão consciente sobre motion em cada projeto visual. Quando o estilo e a experiência pedirem movimento, o agente deve selecionar, implementar e verificar efeitos coerentes. Quando a ausência de movimento for a melhor decisão, deve registar a justificação. Nunca omitir motion apenas por conveniência de implementação, nem o adicionar para cumprir uma quota.

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

- [ ] O Manifest 4.5 foi respeitado.
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


---

# 14. CATÁLOGO DE ESTILOS E LINGUAGENS VISUAIS CRIADAS

Este catálogo incorpora as linguagens editoriais, gráficas e de publicação exploradas durante a criação deste guia. Deve ser consultado ao recomendar direções visuais. Não é uma lista fechada: pode ser expandida com novas linguagens, desde que tenham uma identidade clara.

**Regra:** o nome do estilo não é suficiente. A direção deve traduzir os seus códigos visuais para a essência concreta da empresa, marca ou projeto.

## 14.1 Estilos editoriais e de publicação

1. **Magazine Design:** composição de revista, manchetes expressivas, colunas, imagens de destaque e ritmo editorial.
2. **Newspaper Design:** grelha de jornal, hierarquia informativa, títulos fortes, colunas e densidade controlada.
3. **Book Design:** experiência inspirada em livros, capítulos, páginas, margens e ritmo de leitura.
4. **Journal Design:** linguagem de diário ou publicação especializada, notas, datas, entradas e registos.
5. **Art Catalogue:** apresentação curatorial de obras, imagens amplas, legendas e sequência de exposição.
6. **Commercial Catalogue:** catálogo comercial organizado, com foco em produtos, categorias e comparação.
7. **Lookbook:** narrativa visual através de imagens, coleções, composição e direção fotográfica.
8. **Brochure:** linguagem de brochura, painéis, secções e apresentação compacta de uma organização ou oferta.
9. **Menu Design:** hierarquia de pratos, categorias, preços, descrições e fotografia gastronómica.
10. **Annual Report:** linguagem de relatório anual, dados, números, gráficos, destaques e narrativa institucional.
11. **Museum Design:** experiência curatorial, peças em destaque, informação contextual e percurso de visita.
12. **Cinema Design:** linguagem de cartaz, créditos, fotogramas, cenas e narrativa cinematográfica.
13. **Album Artwork:** identidade visual musical, capa, composição gráfica, tipografia e atmosfera sonora traduzida visualmente.
14. **Comic Book:** quadros, balões, onomatopeias, ritmo sequencial e narrativa ilustrada.
15. **Poster Design:** comunicação concentrada, composição gráfica, tipografia e impacto imediato.
16. **Dashboard:** organização operacional, métricas, estados, dados e ações.
17. **Terminal:** linguagem de linha de comandos, monoespaçada, textual, técnica e utilitária.
18. **Atlas:** mapas, coordenadas, legendas, camadas, localização e exploração espacial.
19. **Archive:** arquivo documental, índices, etiquetas, datas, registos e pesquisa.
20. **Scientific Journal:** publicação científica, referências, dados, gráficos, secções e rigor documental.
21. **Passport:** linguagem de documento de viagem, carimbos, dados, selos e identificação.
22. **Comic Magazine:** revista ilustrada com secções, capas, quadros e linguagem gráfica sequencial.
23. **Photo Album:** sequência fotográfica, memória, legendas, ritmo e narrativa por imagens.
24. **Encyclopedia:** estrutura de consulta, verbetes, índices, categorias e referências cruzadas.
25. **Noticeboard:** mural de avisos, folhas, notas, recados, camadas e informação afixada.
26. **Metro Map:** diagrama de linhas, estações, percursos, ligações e orientação.
27. **Technical Sheet:** ficha técnica, especificações, tabelas, esquemas e informação objetiva.
28. **Gala Invitation:** convite cerimonial, hierarquia formal, tipografia e composição de evento.
29. **Instruction Manual:** instruções, etapas, diagramas, avisos e orientação sequencial.
30. **Scientific Magazine:** divulgação científica com linguagem editorial, visualizações, fotografias e explicação acessível.

## 14.2 Outras famílias do catálogo principal

Consultar também as famílias do Manifest 4.5: Brutalist Editorial, Swiss / International Typographic, Editorial Luxury, Modernist Editorial, Experimental Typography, Art Book, Contemporary Art Direction, Dark Cinematic Editorial, Documentary / Photojournalistic, Film Noir, Analog Film, Spatial / 3D Web Design, Story-driven Scrollytelling, Digital Brutalism, Neo-Brutalism, Futuristic Interface, Retro-Futurism, Cyberpunk, Y2K Digital, Digital Collage, Avant-Garde, Surrealism, Organic / Biomorphic, Abstract Minimalism, Maximalism, Memphis Design, Premium Commerce, Editorial Commerce, Boutique Retail, Hospitality Editorial, Automotive Performance e Utility-first Interface.

## 14.3 Escolha e aplicação

- Apresentar normalmente 4–7 opções realmente diferentes, adequadas ao briefing.
- Incluir pelo menos uma direção inesperada, mas justificável, quando houver oportunidade.
- Explicar os sinais visuais concretos de cada opção, não apenas o nome.
- Não escolher automaticamente o estilo mais óbvio da indústria.
- Não combinar estilos sem autorização explícita.
- Um estilo de publicação pode ser aplicado a uma empresa de qualquer setor se a relação conceptual fizer sentido.
- Se o utilizador escolher um estilo do catálogo, esse estilo passa a ser a referência principal e deve ser reconhecível de imediato.

# 15. ENTREVISTA OBRIGATÓRIA PARA DESCOBRIR A ESSÊNCIA DA EMPRESA

O objetivo desta entrevista é impedir que o website seja uma composição aleatória, uma cópia de referências ou uma aplicação superficial de um estilo.

Antes de desenhar, o chat deve recolher informação suficiente para compreender a identidade real da empresa. Deve fazer perguntas em linguagem natural, em pequenos grupos, sem despejar um questionário interminável de uma só vez. Se o utilizador já forneceu uma resposta, não voltar a perguntar.

## 15.1 Perguntas de descoberta

**Identidade e origem**
1. Qual é o nome da empresa e como surgiu?
2. Porque foi criada? Que necessidade, problema ou desejo levou à sua criação?
3. O que motivou o fundador ou a equipa a trabalhar neste setor?
4. Existe uma história, convicção, origem local, experiência ou detalhe que torne a empresa diferente?

**Personalidade**
5. Se a empresa fosse uma pessoa, como seria? Descreve a personalidade com três a cinco características.
6. Que impressão deve deixar nos primeiros segundos?
7. Que impressão nunca deve transmitir?
8. A marca é mais discreta ou expressiva, tradicional ou experimental, próxima ou institucional, técnica ou emocional? Porquê?

**Oferta e diferença**
9. O que vende ou oferece exatamente?
10. Quem é o público real e o que esse público valoriza?
11. Porque escolhem a empresa em vez de outra alternativa?
12. O que faz de forma diferente, mesmo que seja um detalhe operacional?
13. Que prova real sustenta essa diferença: processo, experiência, produto, equipa, instalações, resultados ou testemunhos autorizados?

**Experiência e objetivo**
14. O que deve o visitante compreender primeiro?
15. Qual é a ação mais importante que deve realizar no website?
16. Que dúvidas ou receios impedem o cliente de avançar?
17. Que informação precisa de encontrar rapidamente?

**Identidade visual e referências**
18. Já existe logótipo, paleta, tipografia, fotografia, material impresso ou identidade visual?
19. Que marcas, espaços, publicações, filmes, objetos ou ambientes representam a personalidade pretendida? O que deve ser aprendido dessas referências?
20. O que não gosta de ver em websites do seu setor?
21. Existe alguma história, objeto, símbolo, lugar, material, arquitetura, processo ou detalhe da empresa que possa inspirar a direção visual?

**Conteúdo e recursos**
22. Que fotografias, vídeos, produtos, instalações, equipa, documentos e textos reais estão disponíveis?
23. Que conteúdos ainda precisam de ser produzidos?
24. Existem limitações técnicas, de orçamento, conectividade, atualização ou manutenção?

## 15.2 Como conduzir a entrevista

- Começar pelas perguntas essenciais: identidade, diferença, público, personalidade e objetivo.
- Fazer perguntas de aprofundamento quando as respostas forem vagas ou contraditórias.
- Pedir exemplos concretos: “O que fazem de forma diferente?” deve levar a um exemplo real.
- Não transformar adjetivos genéricos como “moderno”, “profissional” ou “inovador” numa direção visual sem descobrir o que significam para aquela empresa.
- Não inventar história, valores, posicionamento, público, serviços, provas ou personalidade.
- Se o utilizador não souber responder, ajudar a descobrir através de opções e exemplos, sem impor uma identidade.
- Distinguir factos confirmados, interpretações criativas e hipóteses ainda por validar.
- Não obrigar o utilizador a responder a todas as perguntas quando algumas não se aplicam. A entrevista é adaptativa, mas a compreensão da essência é obrigatória.

## 15.3 Síntese de essência antes do design

Depois da descoberta, apresentar uma síntese para validação:

- **Essência da empresa:** uma frase concreta, sem slogans vazios.
- **Origem e motivação:** o que a torna real e particular.
- **Personalidade:** 3–5 características demonstradas pelas respostas.
- **Diferenciação:** o que a empresa faz ou representa de forma própria.
- **Público e necessidade:** para quem existe e que problema resolve.
- **Promessa verificável:** o que pode realmente entregar.
- **Impressão desejada:** o que o visitante deve sentir e compreender.
- **Ação principal:** o que o website deve facilitar.
- **Material autêntico:** imagens, histórias, produtos, pessoas e detalhes disponíveis.
- **Oportunidade criativa:** um elemento verdadeiro da empresa que pode originar uma ideia visual singular.

Pedir confirmação ou correção desta síntese antes de fechar a direção criativa. Não avançar com uma identidade inventada.

# 16. ORIGINALIDADE RADICAL E IDENTIDADE VISUAL INCONFUNDÍVEL

**A criação deve ser deliberadamente criativa, memorável e incomum. Uma solução genérica, previsível ou visualmente intercambiável não é uma entrega aprovada.**

O objetivo é tornar o estilo escolhido evidente e forte, sem sacrificar a função, a clareza, a acessibilidade ou a performance.

## 16.1 O estilo tem de estar na cara

A identidade do estilo deve ser reconhecível no primeiro contacto e manter-se em toda a experiência.

- Traduzir os princípios do estilo em composição, tipografia, imagem, ritmo, navegação, componentes e movimento.
- Usar os seus códigos visuais com convicção, não como pequenos apontamentos decorativos.
- Fazer com que o hero, as secções internas, os detalhes, os estados e a versão mobile pertençam à mesma linguagem.
- Não usar apenas uma fonte, uma cor ou um efeito para afirmar que o estilo está aplicado.
- Não suavizar automaticamente uma direção expressiva até ela se tornar um template convencional.
- Se o estilo escolhido for Newspaper, o resultado deve comunicar claramente uma linguagem de jornal; se for Atlas, deve assumir uma lógica cartográfica; se for Cinema, deve ter linguagem cinematográfica; se for Brutalist, deve assumir a força tipográfica e estrutural brutalista.
- A intensidade deve ser alta na expressão da linguagem, mas controlada na legibilidade, no desempenho e na usabilidade.

## 16.2 Conceito visual exclusivo

Cada projeto deve ter uma ideia central própria, ligada a uma verdade da empresa.

Exemplos de ponto de partida, não de templates:
- Uma empresa de logística pode inspirar-se nos seus percursos, rotas, etiquetas, mapas e operações reais.
- Um restaurante pode partir de um prato emblemático, da origem dos ingredientes, da arquitetura ou da cultura local.
- Um hotel pode partir da paisagem, da luz, dos materiais, da história do edifício ou do ritual de hospitalidade.
- Uma empresa tecnológica pode partir de um processo, sistema, linguagem técnica ou problema que resolve.
- Um profissional criativo pode partir do próprio método, arquivo, processo e linguagem visual do seu trabalho.

Não usar estes exemplos automaticamente. Descobrir o detalhe verdadeiro daquele projeto.

## 16.3 Proibição de repetição entre projetos

Antes de iniciar um projeto novo, comparar com projetos anteriores disponíveis no repositório e identificar:
- Composições e estruturas já utilizadas.
- Tipos de hero e posicionamento de texto.
- Sequências de secções.
- Padrões de cartões, botões, navegação e rodapés.
- Pares tipográficos e paletas.
- Tratamento de imagem.
- Transições e animações.
- Conceitos visuais e metáforas já explorados.

Criar um registo breve de diferenciação:
1. O que já foi usado e deve ser evitado neste projeto?
2. Qual será a nova ideia central?
3. Que composição ou comportamento visual será próprio deste website?
4. Que detalhe real da empresa vai orientar a experiência?
5. Como será possível reconhecer este website sem ver o logótipo?

Não repetir a mesma fórmula mudando apenas cores, fotografias e textos. Não reciclar o mesmo hero, a mesma grelha, a mesma ordem de secções ou a mesma receita de motion por conveniência.

Se o repositório não permitir comparar projetos anteriores, declarar essa limitação e criar uma direção distinta com base no material efetivamente disponível. Nunca afirmar que a comparação foi feita sem a ter feito.

## 16.4 Obrigação de explorar antes de escolher

Antes de implementar, desenvolver pelo menos três conceitos criativos internamente distintos. Não precisam de ser três páginas completas: podem ser três ideias de composição, metáfora, narrativa ou experiência.

Escolher o conceito que:
- Nasce de uma característica real da empresa.
- Expressa o estilo aprovado com maior força.
- Diferencia o projeto de trabalhos anteriores.
- Serve o objetivo principal do visitante.
- Pode ser executado com qualidade técnica e desempenho aceitável.

Apresentar ao utilizador a direção escolhida e a sua lógica antes da implementação visual. Não apresentar conceitos como factos da empresa; são propostas criativas a validar.

# 17. AUDITORIA OBRIGATÓRIA DE IDENTIDADE E FIDELIDADE AO ESTILO

A auditoria visual e técnica é uma etapa obrigatória. Não basta verificar se a página abre, se os botões funcionam ou se o CSS não tem erros. É necessário verificar se o website realmente parece pertencer ao estilo aprovado.

A auditoria deve acontecer depois da implementação e novamente depois das correções.

## 17.1 Auditoria de identidade visual

Verificar no código e na página renderizada:

1. **Reconhecimento imediato:** sem ler o nome do estilo, a linguagem visual é identificável?
2. **Composição:** grelha, hierarquia, alinhamento, escala e ritmo correspondem ao estilo?
3. **Tipografia:** famílias, pesos, proporções e hierarquia são coerentes?
4. **Imagem:** seleção, recorte, tratamento, sequência e relação com texto reforçam a direção?
5. **Cor e materiais:** paleta, contraste, superfícies, bordas e texturas pertencem ao mesmo universo?
6. **Componentes:** navegação, botões, cartões, listas, formulários e detalhes não introduzem uma estética genérica concorrente?
7. **Motion:** transições e animações expressam o estilo, em vez de serem efeitos aleatórios?
8. **Consistência:** as secções internas mantêm a mesma identidade do hero?
9. **Mobile:** a versão móvel continua reconhecível como o mesmo estilo?
10. **Originalidade:** o resultado tem uma assinatura própria ligada à empresa e não repete outro projeto?

## 17.2 Auditoria de código

Inspecionar:
- HTML semântico e estrutura dos componentes.
- CSS, tokens e regras que implementam a direção visual.
- Classes e estilos residuais de templates anteriores.
- Imports, dependências e bibliotecas instaladas.
- JavaScript de animações, listeners e limpeza de eventos.
- Estados de carregamento, erro, vazio e interação.
- Regras responsivas e possíveis overflow.
- Contraste, foco, teclado e `prefers-reduced-motion`.
- Imagens, fontes, vídeos e respetivos carregamentos.
- Erros de consola e avisos relevantes.
- Regressões em funcionalidades existentes.

Não concluir a auditoria apenas pela leitura do código. Sempre que possível, executar o projeto e inspecionar a renderização em desktop e mobile. O código pode parecer correto e ainda assim produzir uma composição visual errada.

## 17.3 Escala de fidelidade ao estilo

Atribuir uma nota de 0 a 5 a cada critério:

- 0 — ausente ou contraditório.
- 1 — apenas uma referência superficial.
- 2 — alguns elementos reconhecíveis, mas predomina uma estética genérica.
- 3 — estilo visível, porém irregular ou pouco convincente.
- 4 — identidade forte, consistente e reconhecível.
- 5 — expressão inequívoca, autoral e muito bem executada.

Critérios avaliados: composição, tipografia, imagem, cor/material, componentes, motion, consistência entre secções, adaptação mobile e originalidade.

**Critério de aprovação:** nenhum dos critérios de identidade pode ficar abaixo de 4. Se algum ficar abaixo, a auditoria reprova a identidade e exige correção. A nota não deve ser usada para mascarar falhas funcionais, de acessibilidade ou desempenho: estas continuam a ser requisitos independentes.

## 17.4 Teste de reconhecimento sem rótulo

Fazer este teste:

“Se retirarmos o logótipo, o nome da empresa e os textos que identificam o setor, ainda é possível reconhecer a linguagem do estilo escolhido pela composição, tipografia, imagem, cor e movimento?”

Se a resposta for não, o estilo está fraco. Reforçar os seus códigos visuais sem recorrer a decoração gratuita.

## 17.5 Correção obrigatória

Quando a auditoria reprovar:
1. Identificar os elementos que diluem ou contradizem o estilo.
2. Corrigir a causa no código, não apenas acrescentar efeitos.
3. Rever a renderização.
4. Repetir a auditoria.
5. Só entregar depois de cumprir os critérios, ou declarar claramente o que impede a aprovação.

Não declarar “estilo fiel”, “identidade forte” ou “auditoria aprovada” sem evidência da verificação realizada.

## 17.6 Relatório de auditoria na entrega

O relatório final deve incluir:
- Estilo escolhido.
- Conceito visual exclusivo.
- Elementos que tornam a identidade reconhecível.
- Bibliotecas utilizadas e motivo.
- Resultado da avaliação de fidelidade por critério.
- Testes de desktop e mobile efetivamente realizados.
- Problemas encontrados e corrigidos.
- Limitações não resolvidas.
- Estado final: aprovado ou ainda precisa de correções.

# 18. PORTA DE QUALIDADE: NÃO ENTREGAR UM WEBSITE GENÉRICO

Antes da entrega, responder honestamente:

- O website poderia pertencer a qualquer empresa do mesmo setor, bastando trocar o logótipo? Se sim, falhou a essência.
- O estilo escolhido está evidente sem explicação? Se não, falhou a fidelidade.
- A ideia visual nasce de algo real da empresa? Se não, falta fundamento.
- O projeto repete uma solução recente? Se sim, precisa de uma nova direção.
- A criatividade melhora a experiência ou apenas chama atenção? Se apenas chama atenção, deve ser revista.
- O site continua rápido, acessível, funcional e responsivo? Se não, precisa de correção.

**A aprovação exige simultaneamente essência real, conceito próprio, estilo inequívoco, originalidade e qualidade técnica.**

---

## PRINCÍPIO CRIATIVO FINAL

**Não desenhar apenas um website bonito. Descobrir o que torna aquela empresa singular e transformar essa verdade numa experiência digital com uma linguagem visual forte, incomum e inconfundível.**

O estilo não deve estar escondido. Deve ser evidente. A criatividade não deve ser aleatória. Deve nascer da essência. E a auditoria deve provar que o resultado cumpriu a direção escolhida.


---

# 19. CRITÉRIO DE RECONHECIMENTO VISUAL — CLAREZA DO TESTE

O teste de reconhecimento não deve exigir que qualquer observador adivinhe o nome técnico exato de um estilo. Alguns estilos partilham características ou são deliberadamente híbridos quando o utilizador os aprova.

O teste deve verificar se:
- A linguagem visual tem uma personalidade coerente e reconhecível.
- A composição, tipografia, imagem, cor, materiais e movimento apontam para a direção aprovada.
- O resultado não parece um template genérico com uma camada superficial de decoração.
- Os elementos próprios do negócio dão ao projeto uma assinatura particular.

A pergunta correta é: **“A direção visual aprovada está claramente presente e foi executada com convicção?”** Não: “Um desconhecido consegue nomear o estilo exato sem contexto?”

A identificação do estilo pode ser um indicador útil, mas não deve substituir a avaliação de coerência, intenção e qualidade.

---

# 20. COMPATIBILIDADE COM CONTEÚDO E COPY

A direção visual não pode obrigar a copy a tornar-se vaga, artificial ou ilegível.

- Não cortar informação essencial apenas para obter uma composição mais dramática.
- Não inventar títulos, legendas ou textos editoriais que alterem factos.
- Não forçar quebras de linha que mudem o sentido de uma frase.
- Não usar texto falso ou lorem ipsum como se fosse conteúdo final.
- Não transformar todos os conteúdos em slogans.
- Trabalhar em conjunto com o `MANIFEST-COPY.md` para preservar clareza, sequência e voz própria.
- Quando uma composição exigir texto muito curto, preservar a mensagem central e deslocar detalhes úteis para uma posição legível, em vez de os eliminar.

A hierarquia visual deve servir a hierarquia da informação. Uma página pode ser experimental sem dificultar a compreensão.

---

# 21. VERIFICAÇÃO DE ESTADO E LIMITES DE AUDITORIA

O relatório visual deve distinguir claramente:
- **Verificado:** o projeto foi executado e a renderização foi inspecionada.
- **Verificado parcialmente:** apenas alguns ecrãs, estados, dispositivos ou fluxos foram testados.
- **Não verificado:** não houve acesso à renderização ou ao ambiente necessário.

Não declarar auditoria visual completa com base apenas na leitura do HTML/CSS/JS. Não declarar responsividade aprovada sem testar dimensões representativas. Registar os dispositivos, larguras ou ambientes efetivamente verificados quando essa informação estiver disponível.


---

# 22. CONTRATO DE EXECUÇÃO DE MOTION — ESTILO PRIMEIRO, EFEITOS DEPOIS

Esta secção transforma o catálogo de motion numa regra de execução. O objetivo não é animar tudo: é garantir que o movimento escolhido para o projeto seja intencional, implementado e verificado.

## 22.1 Decisão obrigatória em todos os projetos visuais

A ficha de direção deve responder:
- O estilo aprovado beneficia de movimento? Porquê?
- O movimento deve ser discreto, expressivo, cinematográfico, funcional, editorial, lúdico, técnico ou inexistente?
- Que elementos devem mover-se e em que momento?
- Que transições ligam secções, páginas ou estados?
- Que microinterações dão feedback às ações?
- Que efeitos devem ser evitados por contradizerem o estilo?
- Como será adaptado para touch, mobile e movimento reduzido?

A resposta pode ser “sem animações decorativas” ou “transições mínimas de estado” quando essa for a decisão certa. A ausência intencional é diferente de esquecer a camada de motion.

## 22.2 Hierarquia de movimento

Quando o estilo justificar motion, definir uma hierarquia em vez de animar tudo:

1. **Movimento de assinatura:** uma experiência principal que ajuda a reconhecer o projeto, como uma máscara de imagem, uma sequência cinematográfica, uma transição tipográfica ou uma transformação de composição.
2. **Movimento estrutural:** entradas, saídas ou transições que organizam a leitura e a passagem entre secções.
3. **Feedback funcional:** hover, focus, active, loading, sucesso, erro, tabs, menus, filtros e formulários.
4. **Movimento ambiente:** detalhes contínuos ou atmosféricos, apenas se não prejudicarem desempenho, leitura ou concentração.

Nem todos os projetos precisam dos quatro níveis. A seleção deve corresponder à identidade aprovada.

## 22.3 Matriz de seleção por linguagem visual

Usar como orientação, nunca como receita automática:

| Linguagem aprovada | Movimento que pode fazer sentido | Evitar por defeito |
|---|---|---|
| Editorial / Newspaper | revelação tipográfica, cortes de imagem, mudanças de página, detalhes de navegação | parallax constante e animações elásticas |
| Swiss / Tipográfico | transições precisas, linhas e grelhas que se reorganizam, feedback curto | efeitos decorativos sem função |
| Cinematográfico | máscaras, zooms, cortes, dissolves, profundidade e sequências narrativas | movimento permanente que destrói o ritmo |
| Luxo / Premium | fades precisos, deslocamentos subtis, transições lentas e controladas | bounce, glitch e efeitos ruidosos |
| Brutalista | cortes secos, deslocamentos firmes, mudanças de escala e estados diretos | suavização excessiva que apaga a força visual |
| Orgânico / Biomórfico | morphing, movimento fluido, formas que respiram e transições suaves | movimento mecânico repetitivo |
| Retro / Analógico | flicker controlado, film burn, grain, wipe e transições de arquivo | filtros pesados permanentes |
| Futurista / Digital | interfaces reativas, linhas, dados, parallax pontual e transições técnicas | glow e partículas em excesso |
| Comercial / E-commerce | feedback de produto, galeria, carrinho, filtros e confirmação | transições que atrasam compra ou consulta |
| Dashboard / Utility | feedback de estado, progressos, expansão e recolha de painéis | storytelling que atrasa tarefas |

Se o estilo aprovado não estiver na tabela, derivar o movimento dos seus princípios. Não forçar uma categoria próxima.

## 22.4 Biblioteca técnica: receitas de referência

As receitas seguintes são pontos de partida reutilizáveis no nível técnico. Devem ser adaptadas ao estilo, à composição, ao projeto e à arquitetura existente. Não copiar a mesma coreografia em todos os websites.

### A. Reveal por interseção — CSS + IntersectionObserver

CSS:

```css
.motion-reveal {
  opacity: 0;
  transform: translate3d(0, 1.25rem, 0);
  transition:
    opacity 700ms cubic-bezier(.2, .7, .2, 1),
    transform 700ms cubic-bezier(.2, .7, .2, 1);
}

.motion-reveal.is-visible {
  opacity: 1;
  transform: translate3d(0, 0, 0);
}

@media (prefers-reduced-motion: reduce) {
  .motion-reveal,
  .motion-reveal.is-visible {
    opacity: 1;
    transform: none;
    transition: none;
  }
}
```

JavaScript:

```js
const revealItems = document.querySelectorAll(".motion-reveal");

if ("IntersectionObserver" in window) {
  const revealObserver = new IntersectionObserver((entries, observer) => {
    entries.forEach((entry) => {
      if (!entry.isIntersecting) return;
      entry.target.classList.add("is-visible");
      observer.unobserve(entry.target);
    });
  }, { threshold: 0.12, rootMargin: "0px 0px -40px 0px" });

  revealItems.forEach((item) => revealObserver.observe(item));
} else {
  revealItems.forEach((item) => item.classList.add("is-visible"));
}
```

Utilizar apenas quando a revelação progressiva pertencer ao estilo. O conteúdo deve continuar disponível sem depender do JavaScript; definir uma estratégia de fallback adequada para a página real e evitar esconder informação essencial.

### B. Image curtain reveal — CSS

```css
.image-curtain {
  position: relative;
  overflow: hidden;
  isolation: isolate;
}

.image-curtain img {
  display: block;
  width: 100%;
  height: 100%;
  object-fit: cover;
  transform: scale(1.04);
  transition: transform 1100ms cubic-bezier(.2, .7, .2, 1);
}

.image-curtain::after {
  content: "";
  position: absolute;
  inset: 0;
  background: var(--curtain-color, currentColor);
  transform: scaleY(1);
  transform-origin: top;
  transition: transform 850ms cubic-bezier(.76, 0, .24, 1);
}

.image-curtain.is-visible::after {
  transform: scaleY(0);
}

.image-curtain.is-visible img {
  transform: scale(1);
}

@media (prefers-reduced-motion: reduce) {
  .image-curtain::after,
  .image-curtain img {
    transition: none;
    transform: none;
  }

  .image-curtain::after {
    content: none;
  }
}
```

A classe `is-visible` deve ser aplicada por um mecanismo de entrada apropriado. Definir `--curtain-color` de acordo com a superfície do projeto. Garantir que a imagem não fique permanentemente tapada se o script falhar.

### C. Stagger tipográfico — CSS com atraso controlado

```css
.motion-stagger > * {
  opacity: 0;
  transform: translateY(.65em);
  transition:
    opacity 550ms ease,
    transform 650ms cubic-bezier(.2, .7, .2, 1);
  transition-delay: var(--motion-delay, 0ms);
}

.motion-stagger.is-visible > * {
  opacity: 1;
  transform: translateY(0);
}

.motion-stagger > *:nth-child(1) { --motion-delay: 0ms; }
.motion-stagger > *:nth-child(2) { --motion-delay: 90ms; }
.motion-stagger > *:nth-child(3) { --motion-delay: 180ms; }
.motion-stagger > *:nth-child(4) { --motion-delay: 270ms; }

@media (prefers-reduced-motion: reduce) {
  .motion-stagger > * {
    opacity: 1;
    transform: none;
    transition: none;
  }
}
```

Não aplicar automaticamente a todos os títulos e listas. A sequência deve melhorar o ritmo, não atrasar a leitura.

### D. Microinteração de botão — CSS

```css
.button-motion {
  transition:
    transform 220ms ease,
    background-color 220ms ease,
    color 220ms ease,
    border-color 220ms ease;
}

.button-motion:active {
  transform: translateY(1px) scale(.985);
}

.button-motion:focus-visible {
  outline: 2px solid currentColor;
  outline-offset: 4px;
}

@media (hover: hover) and (pointer: fine) {
  .button-motion:hover {
    transform: translateY(-2px);
  }
}

@media (prefers-reduced-motion: reduce) {
  .button-motion {
    transition: none;
  }

  .button-motion:active,
  .button-motion:hover {
    transform: none;
  }
}
```

Adaptar a resposta do botão à linguagem visual. Nem todos os botões devem saltar ou aumentar.

### E. Page transition — View Transitions API com fallback

```css
@view-transition {
  navigation: auto;
}

::view-transition-old(root),
::view-transition-new(root) {
  animation-duration: 320ms;
  animation-timing-function: cubic-bezier(.2, .7, .2, 1);
}

@media (prefers-reduced-motion: reduce) {
  ::view-transition-old(root),
  ::view-transition-new(root) {
    animation: none;
  }
}
```

Utilizar apenas se a navegação e a arquitetura suportarem esta experiência. Verificar suporte no browser alvo e manter navegação funcional sem a API. Não introduzir uma dependência apenas para obter uma transição simples.

**Importante:** estes snippets são receitas ilustrativas e devem ser adaptados e testados no projeto real. Não copiar todos para cada site. Verificar conflitos de CSS, estados iniciais, conteúdo sem JavaScript, carregamento, navegação e acessibilidade.

## 22.5 Regras para qualquer implementação de motion

- Preferir `transform` e `opacity` quando adequados.
- Evitar animar dimensões e propriedades que provoquem layout repetido sem necessidade.
- Não usar `will-change` globalmente.
- Respeitar `prefers-reduced-motion` em todas as receitas, incluindo bibliotecas externas.
- Não esconder conteúdo essencial até o observador, scroll ou JavaScript funcionar.
- Limpar listeners, observers, timelines e animações quando componentes forem removidos.
- Evitar bloquear scroll, teclado, foco ou navegação.
- Não depender exclusivamente de hover em dispositivos touch.
- Não usar efeitos de cursor em touch.
- Garantir que a animação não cria overflow horizontal nem desloca elementos de forma inesperada.
- Definir fallback quando uma API ou biblioteca não estiver disponível.
- Não instalar GSAP, Lenis, Motion, Lottie, Three.js ou outra dependência sem uma necessidade demonstrável.

## 22.6 Verificação de execução

Para cada efeito selecionado, registar:
- Nome e objetivo.
- Elemento ou estado a que se aplica.
- Tecnologia utilizada.
- Trigger.
- Comportamento esperado.
- Fallback.
- Resultado do teste: implementado e verificado, implementado mas não verificado, ou não implementado.

A inspeção deve acontecer no browser/preview sempre que disponível. Ler o código não prova que o movimento funciona.

## 22.7 Quando não usar motion

Não usar animações decorativas quando:
- O estilo aprovado exige contenção ou imobilidade.
- O movimento prejudica a leitura ou a rapidez de uma tarefa.
- O conteúdo é operacional e precisa de resposta imediata.
- O dispositivo ou contexto de utilização não suporta a experiência com qualidade.
- A animação cria barreiras de acessibilidade.
- O efeito não acrescenta significado, feedback ou qualidade perceptível.

Nestes casos, preservar microfeedback funcional quando necessário e registar a decisão. Não inventar uma animação apenas para preencher esta secção.

# 23. ANTI-REPETIÇÃO DE COREOGRAFIA E COMPOSIÇÃO

A proibição de repetição aplica-se também ao movimento, não apenas ao layout.

Antes de escolher os efeitos:
1. Consultar o histórico visual disponível.
2. Identificar receitas de motion usadas recentemente.
3. Evitar repetir a mesma sequência de entrada, os mesmos tempos, a mesma direção e os mesmos gatilhos.
4. Escolher uma coreografia que derive da identidade atual.
5. Se uma técnica recorrente for a melhor solução, mudar a sua função e composição apenas quando isso for justificável — não fingir novidade por mudar 100ms na duração.

É permitido reutilizar funções técnicas e componentes de animação neutros. A coreografia visual deve ser decidida para cada projeto.

# 24. ALINHAMENTO COM O MANIFEST PRINCIPAL

O `manifest.txt` governa o processo, o âmbito, a originalidade, a preservação e a aprovação. Este documento governa a execução visual.

- Não alterar o fluxo de aprovação definido no Manifest 4.5.
- O utilizador aprova primeiro a linguagem visual.
- Depois, o agente apresenta a direção de arte e a composição do projeto.
- O agente não precisa de pedir aprovação para cada detalhe técnico, mas deve parar perante uma mudança substancial de direção ou uma combinação de estilos não autorizada.
- A decisão sobre motion deve respeitar o estilo aprovado: usar quando adequado, omitir quando a omissão for a melhor decisão.
- A auditoria final deve separar planeado, implementado e verificado.
- Se o ambiente não permitir verificação visual, declarar isso sem afirmar aprovação total.

# 25. CHECKLIST FINAL DE MOTION E ORIGINALIDADE

- [ ] A decisão de motion foi registada e está alinhada com o estilo aprovado.
- [ ] Os efeitos escolhidos têm função ou intenção visual clara.
- [ ] Os efeitos adequados foram efetivamente implementados.
- [ ] Não foram adicionados efeitos apenas para cumprir uma quantidade.
- [ ] A coreografia não foi copiada automaticamente de projetos recentes.
- [ ] As transições não prejudicam o acesso à informação nem às ações.
- [ ] O fallback funciona quando JavaScript ou uma API não está disponível.
- [ ] `prefers-reduced-motion` foi respeitado.
- [ ] Desktop, touch e mobile foram considerados.
- [ ] O resultado foi executado e verificado quando o ambiente permitiu.
- [ ] O relatório distingue planeado, implementado e verificado.
- [ ] A identidade do projeto não se tornou um template previsível.

**Regra final:** movimento apenas quando o estilo o pede; quando o pede, executar com intenção e qualidade. Nunca confundir contenção com omissão por preguiça, nem criatividade com excesso de efeitos.
