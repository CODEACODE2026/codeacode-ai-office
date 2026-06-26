# AI Office Framework v2 - Diagnostico Oficial

## Status

Fase 1 aprovada e executada.

Este documento registra o diagnostico oficial inicial da AI Office para orientar sua evolucao para um framework profissional de desenvolvimento da Code a Code.

Nenhuma mudanca operacional foi feita em workflow, agentes, bibliotecas, templates ou projetos existentes nesta fase.

## Natureza do projeto

AI Office Framework v2 e um projeto interno da Code a Code.

Nao e um projeto de cliente.
Nao e um software final.
Nao deve gerar desenvolvimento direto de produto antes da etapa correta.

Seu objetivo e transformar a AI Office em um framework escalavel, reutilizavel, economico e governado para conduzir projetos digitais com mais qualidade, consistencia e menor consumo de Codex.

## Diretrizes aprovadas

- Priorizar bibliotecas reutilizaveis em vez de criar muitos novos agentes.
- Manter o conhecimento permanente da empresa em bibliotecas, nao espalhado dentro dos agentes.
- Fortalecer agentes existentes antes de criar novos agentes.
- Justificar qualquer novo agente antes de sua criacao.
- Usar o Framework Architect como responsavel continuo por evoluir a AI Office, reduzir consumo do Codex, manter padroes e governar o framework.
- Evoluir a AI Office em fases pequenas, economicas e aprovadas uma por vez.
- Reutilizar documentacao existente sempre que possivel.
- Ler apenas os arquivos necessarios para cada fase.

## Arquitetura atual

A AI Office esta organizada em uma estrutura inicial funcional:

```text
ai-office/
  WORKFLOW.md
  DESIGN_PRINCIPLES.md
  README.md
  agents/
  component-library/
  design/
  design-library/
  docs/
  inspiration/
  knowledge/
  project-library/
  projects/
  templates/
```

### Workflow

O arquivo `WORKFLOW.md` define o fluxo central de projeto e ja reconhece a importancia de etapas antes do desenvolvimento.

O fluxo atualizado para projetos web deve ser:

```text
Gerente de Projetos
-> Prompt Specialist
-> Analista
-> Arquiteto
-> UX Lead
-> Diretor Criativo UI
-> Validacao do Usuario
-> DEV
-> UI Reviewer
-> QA
-> DevOps
```

Para este projeto interno, o fluxo aprovado e:

```text
Gerente de Projetos
-> Prompt Specialist
-> Analista
-> Arquiteto
-> Framework Architect
-> UX Lead
-> Diretor Criativo UI
-> QA
```

### Agentes existentes

Agentes identificados:

- Gerente de Projetos
- Prompt Specialist
- Analista
- Arquiteto
- Framework Architect
- UX Lead
- Diretor Criativo UI
- Site Creative Director
- DEV
- UI Reviewer
- QA
- DevOps

Os agentes principais existem, mas ainda precisam de padronizacao de entradas, saidas, limites, checklists e criterios de aprovacao.

### Bibliotecas existentes

Bibliotecas e areas de conhecimento identificadas:

- `design/`
- `component-library/`
- `project-library/`
- `inspiration/`
- `knowledge/`
- `templates/`
- `design-library/`

Essas pastas mostram a direcao correta do framework, mas varias ainda estao vazias ou incompletas.

### Projetos anteriores

A pasta `projects/` ja guarda projetos documentados, incluindo o LojaPro PDV, que validou na pratica:

- planejamento antes do DEV;
- tarefas pequenas;
- escopo controlado;
- uso economico do Codex;
- validacao por etapa;
- documentacao do projeto;
- separacao entre AI Office e repositorios reais de cliente.

## Pontos fortes

- A AI Office ja tem uma estrutura modular clara.
- O fluxo de agentes ja existe e e compreensivel.
- A cultura de aprovacao antes de execucao tecnica ja esta definida.
- A regra de economia de Codex ja esta presente.
- O Framework Architect ja existe como agente interno de evolucao.
- A separacao entre projetos reais e AI Office ja esta correta.
- Ha bibliotecas nomeadas para design, componentes, inspiracao, projetos, conhecimento e templates.
- O projeto LojaPro PDV gerou aprendizado real para amadurecer o framework.
- O `DESIGN_PRINCIPLES.md` ja define uma barra de qualidade visual superior a CRUD generico.

## Problemas encontrados

### 1. Conhecimento muito dependente dos agentes

Parte do conhecimento operacional ainda esta dentro dos agentes.

Isso dificulta reutilizacao, manutencao e evolucao, porque cada agente pode virar um documento longo demais ou desatualizado.

Direcao recomendada:

- agentes devem dizer como agir;
- bibliotecas devem guardar conhecimento permanente;
- playbooks devem guardar procedimentos repetiveis;
- templates devem guardar formatos de saida.

### 2. Bibliotecas criadas, mas pouco preenchidas

Pastas como `component-library/`, `design/`, `knowledge/`, `project-library/` e `inspiration/` existem, mas muitos arquivos ainda estao vazios.

Isso significa que a arquitetura esta correta, mas ainda falta conteudo reutilizavel.

### 3. Workflow ainda precisa ser consolidado

O fluxo novo exige UX Lead, Diretor Criativo UI, Validacao do Usuario e UI Reviewer antes da aprovacao final de projetos web.

Essa regra precisa ser refletida de forma permanente no framework, com quality gates claros.

### 4. Falta uma camada de playbooks

A AI Office precisa separar fluxo conceitual de procedimento pratico.

Exemplos:

- playbook para novo site;
- playbook para sistema web;
- playbook para SaaS;
- playbook para correcao de bug;
- playbook para infraestrutura;
- playbook para QA;
- playbook para GitHub;
- playbook para evolucao interna da AI Office.

### 5. Falta biblioteca de prompts

Ainda nao ha uma `prompt-library/` central para padronizar prompts usados por JADE e pelos agentes.

Isso aumenta repeticao, risco de prompt incompleto e consumo desnecessario.

### 6. Falta sistema formal de quality gates

O framework precisa impedir avancos indevidos.

Exemplos:

- DEV nao pode iniciar sem requisitos, arquitetura e direcao visual aprovados.
- Projeto web nao pode ir para DEV sem UX Lead e aprovacao visual.
- QA nao deve aprovar interface sem estados de loading, erro, vazio, sucesso, responsividade e consistencia visual.
- DevOps nao deve publicar sem checklist de seguranca e ambiente.

### 7. README da AI Office ainda e simples

O README atual resume os agentes, mas nao apresenta a AI Office como framework profissional.

Ele precisa evoluir para um manual de entrada com:

- proposito;
- fluxo oficial;
- estrutura;
- regras;
- como iniciar projeto;
- como evoluir bibliotecas;
- como usar agentes;
- como aprovar fases.

### 8. Criacao de novos agentes pode gerar complexidade

Novos agentes podem ajudar, mas tambem podem fragmentar o processo.

A diretriz correta e fortalecer os agentes existentes e criar novos agentes apenas quando houver responsabilidade recorrente que nao cabe bem em nenhuma funcao atual.

## Melhorias recomendadas

### Prioridade 1 - Bibliotecas permanentes

Preencher e organizar:

```text
design/
component-library/
project-library/
inspiration/
knowledge/
prompt-library/
playbooks/
quality-gates/
templates/
```

Essas bibliotecas devem ser a base do conhecimento da empresa.

### Prioridade 2 - Framework Architect como guardiao

O Framework Architect deve ser fortalecido como responsavel por:

- governar a estrutura da AI Office;
- decidir onde o conhecimento deve viver;
- evitar excesso de agentes;
- reduzir consumo do Codex;
- manter padroes reutilizaveis;
- revisar bibliotecas;
- propor releases internos;
- manter simplicidade e escalabilidade.

### Prioridade 3 - Quality gates

Criar criterios obrigatorios de passagem entre etapas.

Quality gates sugeridos:

- Gate de Discovery
- Gate de Requisitos
- Gate de Arquitetura
- Gate de UX
- Gate de Direcao Criativa
- Gate de Aprovacao Visual
- Gate de DEV
- Gate de UI Review
- Gate de QA
- Gate de DevOps

### Prioridade 4 - Playbooks

Criar playbooks simples e reutilizaveis para tarefas recorrentes.

Playbooks iniciais sugeridos:

- `novo-projeto-web.md`
- `site-institucional.md`
- `sistema-web.md`
- `saas.md`
- `infraestrutura.md`
- `correcao-bug.md`
- `qa-frontend.md`
- `github-release.md`
- `evolucao-ai-office.md`

### Prioridade 5 - Prompt library

Criar prompts padrao para:

- discovery;
- master prompt;
- requisitos;
- arquitetura;
- UX Lead;
- direcao criativa;
- tarefa para Codex;
- UI Review;
- QA;
- DevOps;
- diagnostico interno.

### Prioridade 6 - Templates oficiais

Criar templates para documentos repetidos.

Templates sugeridos:

- `templates/docs/discovery.md`
- `templates/docs/master-prompt.md`
- `templates/docs/requisitos.md`
- `templates/docs/arquitetura.md`
- `templates/docs/ux-lead.md`
- `templates/docs/direcao-criativa.md`
- `templates/docs/ui-review.md`
- `templates/docs/qa-report.md`
- `templates/tasks/tarefa-codex.md`

## Novos agentes sugeridos

A recomendacao principal nao e criar muitos agentes agora.

Antes disso, fortalecer:

- Gerente de Projetos
- Prompt Specialist
- Analista
- Arquiteto
- Framework Architect
- UX Lead
- Diretor Criativo UI
- UI Reviewer
- QA
- DevOps

Novos agentes so devem ser criados se forem realmente necessarios.

### Possiveis agentes futuros, com justificativa

#### Design System Lead

Justificativa:

Pode ser util quando a AI Office tiver uma biblioteca visual madura e precisar manter tokens, componentes e padroes de interface de forma continua.

Status:

Nao criar agora. Primeiro preencher `design/` e `component-library/`.

#### Documentation Lead

Justificativa:

Pode ser util se a documentacao crescer muito e precisar de manutencao recorrente.

Status:

Nao criar agora. Primeiro criar templates e playbooks.

#### Security Reviewer

Justificativa:

Pode ser necessario para projetos com autenticacao, pagamentos, dados sensiveis, SaaS ou deploy publico.

Status:

Nao criar agora. Primeiro criar `quality-gates/security.md`.

#### Release Manager

Justificativa:

Pode ser util quando o framework tiver releases internos e changelog.

Status:

Nao criar agora. Primeiro criar processo simples de versionamento.

## Bibliotecas sugeridas

### design/

Guardar fundamentos visuais permanentes:

- cores;
- tipografia;
- espacamento;
- radius;
- sombras;
- motion;
- iconografia;
- acessibilidade;
- principios visuais.

### component-library/

Guardar padroes reutilizaveis de componentes:

- botoes;
- cards;
- formularios;
- tabelas;
- modais;
- toasts;
- empty states;
- loading;
- dashboards;
- navegacao;
- filtros;
- confirmacoes.

### project-library/

Guardar modelos por tipo de projeto:

- landing page;
- site institucional;
- sistema web;
- CRM;
- ERP;
- PDV;
- ecommerce;
- clinica;
- imobiliaria;
- oficina;
- prefeitura;
- SaaS.

### inspiration/

Guardar referencias por dominio e tipo de interface.

Deve orientar estilo, nao virar copia.

### knowledge/

Guardar conhecimento tecnico permanente:

- Node.js;
- TypeScript;
- Next.js;
- PHP;
- MySQL;
- seguranca;
- performance;
- SEO;
- UX;
- UI;
- Git;
- APIs;
- infraestrutura.

### prompt-library/

Guardar prompts reutilizaveis por agente, etapa e tipo de tarefa.

Objetivo:

- reduzir repeticao;
- reduzir consumo;
- melhorar consistencia;
- acelerar planejamento.

### playbooks/

Guardar procedimentos executaveis.

Exemplo:

- como iniciar projeto web;
- como corrigir bug;
- como preparar GitHub;
- como rodar QA;
- como evoluir a AI Office.

### quality-gates/

Guardar criterios obrigatorios de aprovacao entre fases.

Objetivo:

- impedir DEV prematuro;
- impedir UI generica;
- impedir deploy sem checklist;
- manter qualidade constante.

### templates/

Guardar modelos oficiais de documentos, tarefas e estruturas iniciais.

## Mudancas recomendadas no workflow

### Workflow oficial para projetos web

```text
Gerente de Projetos
-> Prompt Specialist
-> Analista
-> Arquiteto
-> UX Lead
-> Diretor Criativo UI
-> Validacao do Usuario
-> DEV
-> UI Reviewer
-> QA
-> DevOps
```

### Workflow para projeto interno da AI Office

```text
Gerente de Projetos
-> Prompt Specialist
-> Analista
-> Arquiteto
-> Framework Architect
-> UX Lead
-> Diretor Criativo UI
-> QA
```

### Regra de governanca

Cada etapa deve gerar um artefato ou uma decisao clara.

Nenhuma etapa deve existir apenas como formalidade.

### Regra de economia

Codex deve ser usado apenas quando houver tarefa objetiva de criacao, edicao, validacao, teste ou commit.

Planejamento, diagnostico, decisao e aprovacao devem ser conduzidos por JADE antes da execucao tecnica.

## Plano de implementacao em fases

### Fase 1 - Diagnostico oficial

Status:

Executada neste documento.

Objetivo:

Registrar arquitetura atual, problemas, melhorias, bibliotecas sugeridas, workflow alvo e plano de fases.

Arquivos permitidos:

- `projects/ai-office-framework-v2/diagnostico.md`

### Fase 2 - Documentos base do projeto

Objetivo:

Criar a base formal do projeto AI Office Framework v2.

Entregas:

- `discovery.md`
- `master-prompt.md`
- `requisitos.md`
- `arquitetura.md`

Observacao:

Ainda nao deve alterar workflow, agentes ou bibliotecas globais.

### Fase 3 - Arquitetura do framework

Objetivo:

Criar a arquitetura detalhada do AI Office Framework v2.

Entregas:

- `framework-architecture.md`
- mapa de bibliotecas;
- responsabilidades do Framework Architect;
- regras de governanca;
- criterios para novos agentes.

### Fase 4 - UX Lead

Objetivo:

Definir a experiencia de uso da AI Office como processo conduzido pela JADE.

Entregas:

- `ux-lead.md`
- jornada do usuario;
- jornada da JADE;
- fluxo de aprovacao;
- pontos de decisao;
- checklist de clareza.

### Fase 5 - Direcao Criativa UI

Objetivo:

Definir como futuras interfaces, dashboards ou documentos visuais da AI Office devem parecer.

Entregas:

- `direcao-criativa.md`
- principios visuais;
- padrao anti-CRUD generico;
- referencia SaaS premium;
- estados obrigatorios;
- densidade e responsividade.

### Fase 6 - Bibliotecas base

Objetivo:

Preencher bibliotecas permanentes essenciais.

Prioridade:

1. `quality-gates/`
2. `playbooks/`
3. `prompt-library/`
4. `templates/docs/`
5. `templates/tasks/`
6. `design/`
7. `component-library/`
8. `knowledge/`
9. `project-library/`
10. `inspiration/`

### Fase 7 - Fortalecimento de agentes existentes

Objetivo:

Atualizar agentes apenas depois das bibliotecas base existirem.

Regra:

Agentes devem apontar para bibliotecas e playbooks, nao duplicar conhecimento.

### Fase 8 - Quality gates oficiais

Objetivo:

Implementar bloqueios metodologicos claros entre fases.

Entregas:

- Gate Discovery
- Gate Requisitos
- Gate Arquitetura
- Gate UX
- Gate Direcao Criativa
- Gate Aprovacao Visual
- Gate DEV
- Gate UI Review
- Gate QA
- Gate DevOps

### Fase 9 - QA do framework

Objetivo:

Validar se o AI Office Framework v2 esta coerente, simples, escalavel e aplicavel.

Entregas:

- `qa-report.md`
- criterios aprovados/reprovados;
- lacunas restantes;
- recomendacoes para v2.1.

### Fase 10 - Release interno v2.0

Objetivo:

Consolidar a primeira versao oficial do framework.

Entregas:

- README atualizado;
- changelog;
- guia de uso;
- checklist de manutencao;
- commit final da release.

## Criterios de sucesso

O AI Office Framework v2 sera considerado bem sucedido quando:

- o fluxo oficial estiver claro e documentado;
- o conhecimento reutilizavel estiver em bibliotecas;
- os agentes estiverem mais enxutos e consistentes;
- o Framework Architect tiver papel claro de governanca;
- Codex for acionado apenas com tarefas pequenas e aprovadas;
- projetos web nao avancarem sem UX, direcao criativa e aprovacao visual;
- a AI Office evitar aparencia de CRUD generico por padrao;
- novos projetos forem mais rapidos de planejar e mais seguros de executar.

## Proxima fase proposta

Fase 2 - Documentos base do projeto.

Antes de executar, deve haver aprovacao explicita.

Escopo sugerido da Fase 2:

- criar `discovery.md`;
- criar `master-prompt.md`;
- criar `requisitos.md`;
- criar `arquitetura.md`;
- nao alterar arquivos globais;
- nao alterar agentes;
- nao alterar bibliotecas;
- nao implementar nenhuma mudanca estrutural.

