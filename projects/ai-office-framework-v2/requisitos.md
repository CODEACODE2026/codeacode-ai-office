# Requisitos - AI Office Framework v2

## Objetivo

Definir os requisitos iniciais para evoluir a AI Office em um framework interno profissional, reutilizavel, escalavel e economico.

## Requisitos funcionais

### RF01 - Organizar conhecimento em bibliotecas permanentes

A AI Office deve concentrar conhecimento reutilizavel em bibliotecas permanentes, e nao dentro de agentes longos e duplicados.

Bibliotecas base:

- `design/`
- `component-library/`
- `project-library/`
- `inspiration/`
- `knowledge/`
- `prompt-library/`
- `playbooks/`
- `quality-gates/`
- `templates/`

### RF02 - Fortalecer o Framework Architect

O Framework Architect deve ser o responsavel por governar a evolucao continua da AI Office.

Ele deve:

- manter padroes;
- reduzir consumo de Codex;
- evitar complexidade desnecessaria;
- revisar bibliotecas;
- propor releases internos;
- orientar onde cada conhecimento deve viver.

### RF03 - Padronizar fluxos por tipo de projeto

A AI Office deve ter fluxos claros para:

- projeto web;
- sistema web;
- SaaS;
- site simples;
- tarefa de infraestrutura;
- correcao de bug;
- evolucao interna da AI Office.

### RF04 - Criar prompt-library

Deve existir uma biblioteca de prompts reutilizaveis por:

- agente;
- fase;
- tipo de projeto;
- tipo de tarefa;
- validacao.

### RF05 - Criar playbooks

Deve existir uma pasta de playbooks com procedimentos praticos e repetiveis.

Playbooks iniciais recomendados:

- novo projeto web;
- sistema web;
- SaaS;
- infraestrutura;
- correcao de bug;
- QA;
- GitHub/release;
- evolucao da AI Office.

### RF06 - Criar quality gates

Deve existir uma camada de criterios obrigatorios para impedir avancos indevidos entre fases.

Gates iniciais:

- Discovery;
- Requisitos;
- Arquitetura;
- UX;
- Direcao Criativa;
- Aprovacao Visual;
- DEV;
- UI Review;
- QA;
- DevOps.

### RF07 - Criar templates oficiais

Devem existir templates reutilizaveis para documentos e tarefas.

Templates recomendados:

- discovery;
- master-prompt;
- requisitos;
- arquitetura;
- UX Lead;
- direcao criativa;
- UI Review;
- QA;
- tarefa para Codex.

### RF08 - Evitar criacao excessiva de agentes

Todo novo agente deve ser justificado.

A preferencia deve ser:

1. preencher biblioteca;
2. criar playbook;
3. ajustar template;
4. fortalecer agente existente;
5. criar novo agente apenas se ainda houver lacuna real.

### RF09 - Controlar uso de Codex

Codex deve ser usado apenas para execucao tecnica objetiva.

Cada tarefa para Codex deve ter:

- projeto;
- tarefa;
- objetivo;
- arquivos permitidos;
- arquivos proibidos;
- contexto necessario;
- criterio de conclusao;
- validacao;
- regra de economia.

### RF10 - Garantir padrao web premium

Projetos web devem respeitar `DESIGN_PRINCIPLES.md` e evitar aparencia de CRUD generico.

Nenhum projeto web deve ir para DEV sem:

- UX Lead;
- direcao criativa completa;
- validacao visual do usuario.

## Requisitos nao funcionais

### RNF01 - Simplicidade

O framework deve ser simples de operar e entender.

### RNF02 - Escalabilidade

A estrutura deve permitir crescimento de bibliotecas, playbooks, prompts e templates sem reescrever tudo.

### RNF03 - Reutilizacao

Todo conteudo recorrente deve ser reaproveitavel.

### RNF04 - Economia

O framework deve reduzir chamadas desnecessarias ao Codex e evitar tarefas grandes demais.

### RNF05 - Governanca

Mudancas estruturais devem passar pelo Framework Architect e por aprovacao do usuario quando afetarem fluxo, agentes ou bibliotecas globais.

### RNF06 - Clareza

Cada documento deve dizer:

- para que existe;
- quando usar;
- o que entra;
- o que sai;
- o que nao deve fazer.

### RNF07 - Manutencao

O framework deve poder evoluir em releases internos.

## Regras de negocio internas

- JADE e o ponto unico de contato com o usuario.
- JADE orquestra agentes e fases.
- O usuario aprova antes de execucao tecnica.
- O Framework Architect governa a evolucao da AI Office.
- Bibliotecas sao fonte permanente de conhecimento.
- Agentes aplicam bibliotecas e playbooks.
- Projetos reais devem viver fora da AI Office, em repositorios proprios.

## Restrições da Fase 2

Nesta fase, somente estes arquivos podem ser criados:

- `discovery.md`
- `master-prompt.md`
- `requisitos.md`
- `arquitetura.md`

Nao alterar:

- `WORKFLOW.md`
- `agents/`
- `design/`
- `component-library/`
- `inspiration/`
- `knowledge/`
- `project-library/`
- `templates/`
- projetos de clientes

## Criterios de aceite

A Fase 2 sera aceita quando:

- os quatro documentos base existirem;
- os documentos estiverem coerentes com o diagnostico oficial;
- as diretrizes de bibliotecas reutilizaveis estiverem registradas;
- a governanca do Framework Architect estiver clara;
- nenhuma pasta global tiver sido alterada;
- nenhuma implementacao de fases futuras tiver sido feita.

## Fonte principal

- `projects/ai-office-framework-v2/diagnostico.md`

