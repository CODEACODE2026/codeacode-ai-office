# Framework Architecture - AI Office Framework v2

## Status

Fase 3 aprovada e executada.

Este documento detalha a arquitetura de evolucao da AI Office, com foco em bibliotecas permanentes, governanca do Framework Architect, versionamento interno, quality gates e criterios para novos agentes.

Nenhum arquivo global foi alterado nesta fase.

## Fontes

- `projects/ai-office-framework-v2/diagnostico.md`
- `projects/ai-office-framework-v2/discovery.md`
- `projects/ai-office-framework-v2/master-prompt.md`
- `projects/ai-office-framework-v2/requisitos.md`
- `projects/ai-office-framework-v2/arquitetura.md`

## Objetivo arquitetural

Transformar a AI Office em um framework interno profissional da Code a Code.

O framework deve ser:

- simples de operar;
- escalavel por bibliotecas;
- reutilizavel entre projetos;
- economico no uso de Codex;
- governado por criterios claros;
- forte em UX/UI para projetos web;
- capaz de evoluir por releases internos.

## Principio estrutural

A AI Office deve separar responsabilidades em quatro tipos de recurso:

```text
Bibliotecas -> guardam conhecimento permanente.
Playbooks -> guardam procedimentos repetiveis.
Quality gates -> guardam criterios de aprovacao.
Agentes -> aplicam, orquestram e tomam decisoes.
```

Essa separacao evita agentes longos demais, reduz duplicacao e facilita manutencao.

## Arquitetura alvo

```text
ai-office/
  README.md
  WORKFLOW.md
  DESIGN_PRINCIPLES.md

  agents/

  design/
  component-library/
  project-library/
  inspiration/
  knowledge/
  prompt-library/
  playbooks/
  quality-gates/
  templates/

  projects/
```

## Mapa de camadas

### 1. Camada de entrada e governanca

Responsavel por explicar como a AI Office funciona.

Arquivos e pastas:

- `README.md`
- `WORKFLOW.md`
- `quality-gates/`
- `playbooks/`

Responsavel:

- Framework Architect

Resultado esperado:

- fluxo claro;
- regras de aprovacao;
- criterios de passagem;
- processo previsivel.

### 2. Camada de agentes

Responsavel por papeis especializados.

Pasta:

- `agents/`

Regra principal:

Agentes nao devem ser enciclopedias.

Agentes devem:

- saber sua funcao;
- saber suas entradas;
- saber suas saidas;
- consultar bibliotecas;
- aplicar playbooks;
- respeitar quality gates;
- manter limites de escopo.

### 3. Camada de conhecimento permanente

Responsavel por conhecimento reutilizavel.

Pastas:

- `knowledge/`
- `project-library/`
- `inspiration/`

Resultado esperado:

- menos repeticao;
- mais consistencia;
- melhor reaproveitamento;
- agentes mais enxutos.

### 4. Camada de design e experiencia

Responsavel por padrao visual, experiencia e componentes.

Pastas e arquivos:

- `DESIGN_PRINCIPLES.md`
- `design/`
- `component-library/`

Resultado esperado:

- evitar CRUD generico;
- garantir padrao premium;
- criar consistencia visual;
- acelerar criacao de interfaces.

### 5. Camada de prompts

Responsavel por prompts reutilizaveis.

Pasta:

- `prompt-library/`

Resultado esperado:

- menor consumo;
- menos improviso;
- mais consistencia;
- tarefas para Codex mais precisas.

### 6. Camada de procedimentos

Responsavel por execucao recorrente.

Pasta:

- `playbooks/`

Resultado esperado:

- processos repetiveis;
- menos dependencia de memoria;
- menos erros entre fases;
- melhor onboarding.

### 7. Camada de validacao

Responsavel por impedir avancos indevidos.

Pasta:

- `quality-gates/`

Resultado esperado:

- DEV nao inicia cedo demais;
- UI nao passa generica;
- QA tem criterio;
- DevOps nao publica sem seguranca.

### 8. Camada de templates

Responsavel por formatos reutilizaveis.

Pasta:

- `templates/`

Resultado esperado:

- documentos consistentes;
- tarefas para Codex padronizadas;
- menos tempo de preparacao;
- menos variacao entre projetos.

### 9. Camada de projetos

Responsavel por documentacao de projetos planejados.

Pasta:

- `projects/`

Regra:

Projetos reais devem ser desenvolvidos em repositorios proprios fora da AI Office.

## Responsabilidades do Framework Architect

O Framework Architect e o guardiao continuo da AI Office.

### Responsabilidades principais

- Governar a arquitetura da AI Office.
- Manter simplicidade e escalabilidade.
- Decidir se uma melhoria deve virar biblioteca, playbook, template, quality gate ou agente.
- Reduzir consumo de Codex.
- Evitar criacao excessiva de agentes.
- Promover reutilizacao de conhecimento.
- Revisar consistencia entre workflow, agentes e bibliotecas.
- Propor releases internos.
- Manter criterio para evolucao do framework.

### Decisoes que passam pelo Framework Architect

- Criar nova biblioteca.
- Criar novo playbook.
- Criar novo quality gate.
- Alterar fluxo oficial.
- Fortalecer agente existente.
- Criar novo agente.
- Alterar templates oficiais.
- Criar release interno.

### Pergunta decisoria padrao

Antes de criar qualquer coisa nova, o Framework Architect deve perguntar:

```text
Este conhecimento deve ficar em uma biblioteca?
Este procedimento deve virar playbook?
Este criterio deve virar quality gate?
Este formato deve virar template?
Esta responsabilidade realmente exige um novo agente?
```

## Mapa das bibliotecas

### design/

Funcao:

Guardar os fundamentos visuais permanentes da Code a Code.

Conteudos alvo:

- cores;
- tipografia;
- espacamento;
- radius;
- sombras;
- motion;
- iconografia;
- acessibilidade;
- principios visuais.

Uso:

- UX Lead;
- Diretor Criativo UI;
- UI Reviewer;
- DEV em tarefas de frontend.

### component-library/

Funcao:

Guardar padroes reutilizaveis de componentes.

Conteudos alvo:

- botoes;
- cards;
- formularios;
- tabelas;
- filtros;
- modais;
- toasts;
- loading;
- skeleton;
- empty state;
- error state;
- success state;
- dashboards;
- navegacao.

Uso:

- Diretor Criativo UI;
- UI Reviewer;
- DEV;
- QA visual.

### project-library/

Funcao:

Guardar modelos por tipo de projeto.

Conteudos alvo:

- landing page;
- site institucional;
- sistema web;
- SaaS;
- CRM;
- ERP;
- PDV;
- ecommerce;
- clinica;
- imobiliaria;
- oficina;
- prefeitura.

Uso:

- Gerente de Projetos;
- Prompt Specialist;
- Analista;
- Arquiteto.

### inspiration/

Funcao:

Guardar referencias visuais e funcionais por dominio.

Regra:

Inspirar, nao copiar.

Uso:

- UX Lead;
- Diretor Criativo UI;
- Site Creative Director;
- UI Reviewer.

### knowledge/

Funcao:

Guardar conhecimento tecnico permanente.

Conteudos alvo:

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

Uso:

- Arquiteto;
- DEV;
- QA;
- DevOps;
- Framework Architect.

### prompt-library/

Funcao:

Guardar prompts padronizados e reutilizaveis.

Conteudos alvo:

- prompts por agente;
- prompts por fase;
- prompts por tipo de projeto;
- prompts para Codex;
- prompts de QA;
- prompts de revisao;
- prompts de diagnostico interno.

Uso:

- JADE;
- Prompt Specialist;
- Framework Architect;
- Codex quando acionado.

### playbooks/

Funcao:

Guardar procedimentos operacionais.

Conteudos alvo:

- novo projeto web;
- site simples;
- sistema web;
- SaaS;
- infraestrutura;
- correcao de bug;
- QA;
- GitHub;
- evolucao da AI Office.

Uso:

- JADE;
- Gerente de Projetos;
- Framework Architect;
- DEV;
- QA;
- DevOps.

### quality-gates/

Funcao:

Guardar criterios obrigatorios de aprovacao.

Conteudos alvo:

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

Uso:

- JADE;
- Gerente de Projetos;
- Framework Architect;
- UI Reviewer;
- QA.

### templates/

Funcao:

Guardar modelos oficiais.

Conteudos alvo:

- documentos de projeto;
- tarefas para Codex;
- estrutura inicial de repositorios;
- README;
- `.env.example`;
- checklist de entrega.

Uso:

- todos os agentes;
- Codex em tarefas objetivas.

## Governanca

### Regra de aprovacao

Toda fase estrutural da AI Office deve ser aprovada pelo usuario antes de execucao.

### Regra de escopo

Cada fase deve declarar:

- objetivo;
- arquivos permitidos;
- arquivos proibidos;
- fontes;
- criterio de aceite;
- validacao.

### Regra de modificacao global

Arquivos globais so podem ser alterados quando a fase aprovada permitir.

Arquivos globais incluem:

- `WORKFLOW.md`
- `README.md`
- `DESIGN_PRINCIPLES.md`
- `agents/`
- `design/`
- `component-library/`
- `project-library/`
- `inspiration/`
- `knowledge/`
- `prompt-library/`
- `playbooks/`
- `quality-gates/`
- `templates/`

### Regra de Codex

Codex deve receber tarefas pequenas, objetivas e delimitadas.

Codex nao deve receber comandos como:

- criar o framework inteiro;
- refatorar tudo;
- melhorar a AI Office;
- criar todos os agentes;
- preencher todas as bibliotecas.

Codex deve receber tarefas como:

- criar um documento especifico;
- preencher uma biblioteca especifica;
- atualizar um agente especifico;
- validar um conjunto de arquivos;
- preparar um commit quando autorizado.

## Versionamento interno

### Modelo de versao

Usar versoes internas simples:

```text
v2.0.0 - primeira versao oficial do AI Office Framework v2
v2.1.0 - novas bibliotecas ou playbooks
v2.2.0 - quality gates e templates adicionais
v2.3.0 - melhorias em agentes existentes
v3.0.0 - mudanca grande de arquitetura ou fluxo
```

### Criterios para versao

Incrementar versao quando houver:

- mudanca de workflow;
- nova biblioteca oficial;
- novo playbook oficial;
- novo quality gate;
- mudanca em agente;
- novo template oficial;
- release consolidada do framework.

### Changelog

Cada release interna deve registrar:

- versao;
- data;
- arquivos alterados;
- objetivo;
- impacto;
- riscos;
- como usar;
- proximas melhorias.

### Commits

Commits devem ser feitos apenas quando autorizados.

Mensagens sugeridas:

```text
docs: add AI Office Framework v2 diagnostics
docs: add AI Office Framework v2 base documents
docs: add AI Office framework architecture
chore: add AI Office quality gates
chore: add AI Office playbooks
docs: update AI Office workflow
```

## Criterios para novos agentes

Criar novo agente e ultima opcao.

### Antes de criar um agente, verificar

1. A necessidade pode ser resolvida com uma biblioteca?
2. A necessidade pode ser resolvida com um playbook?
3. A necessidade pode ser resolvida com um quality gate?
4. A necessidade pode ser resolvida com um template?
5. A necessidade pode ser incorporada em agente existente?
6. A responsabilidade e recorrente?
7. A responsabilidade exige decisao especializada?
8. O agente novo reduz ou aumenta complexidade?

### Criterios obrigatorios

Um novo agente so pode ser criado se:

- tiver responsabilidade recorrente;
- tiver fronteira clara;
- tiver entradas e saidas definidas;
- nao duplicar agente existente;
- nao substituir uma biblioteca;
- nao aumentar consumo desnecessario;
- tiver aprovacao do usuario.

### Agentes futuros possiveis

Nao criar agora.

Apenas candidatos:

- Design System Lead;
- Documentation Lead;
- Security Reviewer;
- Release Manager.

Cada um deve ser reavaliado depois da criacao das bibliotecas base.

## Fluxo de evolucao do framework

```text
Diagnostico
-> Documentos base
-> Arquitetura detalhada
-> UX Lead
-> Direcao Criativa UI
-> Bibliotecas base
-> Fortalecimento de agentes
-> Quality gates oficiais
-> QA do framework
-> Release interno
```

## Prioridade de implementacao

### Prioridade 1

- `quality-gates/`
- `playbooks/`
- `prompt-library/`
- `templates/docs/`
- `templates/tasks/`

### Prioridade 2

- `design/`
- `component-library/`

### Prioridade 3

- `knowledge/`
- `project-library/`
- `inspiration/`

### Prioridade 4

- fortalecimento de agentes existentes.

### Prioridade 5

- avaliacao de novos agentes, se ainda necessario.

## Riscos

### Risco 1 - Excesso de agentes

Mitigacao:

Priorizar bibliotecas, playbooks e templates.

### Risco 2 - Duplicacao de conhecimento

Mitigacao:

Registrar conhecimento permanente em bibliotecas e fazer agentes apontarem para elas.

### Risco 3 - Consumo alto de Codex

Mitigacao:

Usar tarefas pequenas, aprovadas e com arquivos permitidos.

### Risco 4 - Workflow burocratico

Mitigacao:

Cada etapa deve gerar valor real. Nenhuma etapa deve existir apenas como ritual.

### Risco 5 - UI generica em projetos web

Mitigacao:

Manter UX Lead, Diretor Criativo UI, Validacao do Usuario e UI Reviewer como gates obrigatorios.

## Criterios de aceite da Fase 3

A Fase 3 esta completa quando:

- `framework-architecture.md` existe;
- responsabilidades do Framework Architect estao claras;
- mapa das bibliotecas esta documentado;
- regras de governanca estao registradas;
- versionamento interno esta proposto;
- criterios para novos agentes estao definidos;
- nenhum arquivo global foi alterado.

## Proxima fase proposta

Fase 4 - UX Lead.

Objetivo:

Criar `ux-lead.md` para definir a experiencia de uso da AI Office como framework conduzido pela JADE, incluindo jornada do usuario, jornada da JADE, pontos de aprovacao, friccoes a evitar e checklist de clareza.

