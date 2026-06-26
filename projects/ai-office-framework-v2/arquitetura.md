# Arquitetura - AI Office Framework v2

## Objetivo da arquitetura

Definir a arquitetura inicial do AI Office Framework v2, priorizando bibliotecas reutilizaveis, governanca simples, agentes enxutos e menor consumo de Codex.

## Principio arquitetural

Conhecimento permanente fica em bibliotecas.

Procedimentos ficam em playbooks.

Criterios de aprovacao ficam em quality gates.

Formatos repetiveis ficam em templates.

Agentes orquestram e aplicam esses recursos.

## Estrutura alvo

```text
ai-office/
  WORKFLOW.md
  DESIGN_PRINCIPLES.md
  README.md
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

## Camadas do framework

### 1. Camada de governanca

Responsavel por definir regras, fluxo e criterios de evolucao.

Arquivos e areas:

- `WORKFLOW.md`
- `README.md`
- `quality-gates/`
- `playbooks/evolucao-ai-office.md`

Responsavel principal:

- Framework Architect

### 2. Camada de agentes

Responsavel por papeis, decisoes e orquestracao.

Arquivos e areas:

- `agents/`

Regra:

Agentes devem ser enxutos e consultar bibliotecas, playbooks e templates.

### 3. Camada de conhecimento

Responsavel por conhecimento tecnico e operacional permanente.

Arquivos e areas:

- `knowledge/`
- `project-library/`
- `inspiration/`

Regra:

Conhecimento recorrente nao deve ficar duplicado dentro dos agentes.

### 4. Camada de design e experiencia

Responsavel por padrao visual, UX e componentes.

Arquivos e areas:

- `DESIGN_PRINCIPLES.md`
- `design/`
- `component-library/`

Regra:

Projetos web devem evitar aparencia de CRUD generico e seguir padrao SaaS premium quando aplicavel.

### 5. Camada de prompts

Responsavel por padronizar instrucoes reutilizaveis para JADE, agentes e Codex.

Arquivos e areas:

- `prompt-library/`

Regra:

Prompts recorrentes devem ser versionados e reutilizados.

### 6. Camada de templates

Responsavel por formatos oficiais de documentos, tarefas e estruturas.

Arquivos e areas:

- `templates/docs/`
- `templates/tasks/`
- templates tecnicos por tipo de projeto

Regra:

Cada documento recorrente deve ter um modelo base.

### 7. Camada de projetos

Responsavel por documentacao e historico de projetos planejados.

Arquivos e areas:

- `projects/`

Regra:

Projetos reais devem ter repositorios proprios fora da AI Office.

## Responsabilidades por agente

### JADE

- Ponto unico de contato com o usuario.
- Orquestra fases.
- Controla aprovacao.
- Evita uso precoce de Codex.
- Mantem comunicacao clara.

### Gerente de Projetos

- Organiza escopo.
- Define tipo de projeto.
- Coordena fluxo inicial.
- Garante que o projeto nao avance sem artefatos minimos.

### Prompt Specialist

- Gera discovery e master prompt.
- Estrutura contexto antes de requisitos e arquitetura.

### Analista

- Define requisitos.
- Clarifica regras, escopo, limites e criterios.

### Arquiteto

- Define nivel, tecnologia e estrutura tecnica.
- Mantem simplicidade proporcional ao projeto.

### Framework Architect

- Governa a AI Office.
- Decide onde conhecimento deve ficar.
- Reduz consumo de Codex.
- Evita excesso de agentes.
- Mantem bibliotecas, playbooks e quality gates.
- Propõe evolucao por releases.

### UX Lead

- Define experiencia antes da direcao visual.
- Mapeia jornada, fluxos, telas e riscos de usabilidade.

### Diretor Criativo UI

- Define conceito visual, componentes, estados e padrao premium.
- Impede visual generico em projetos web.

### UI Reviewer

- Revisa interface final antes do QA tecnico em projetos web.

### QA

- Valida aderencia ao escopo, qualidade, lacunas e criterio de aceite.

### DevOps

- Prepara deploy e ambiente quando o projeto exigir.

## Regra para novos agentes

Um novo agente so deve ser criado quando:

- houver uma responsabilidade recorrente;
- essa responsabilidade nao couber em agente existente;
- nao bastar criar biblioteca, playbook, template ou quality gate;
- houver justificativa documentada;
- o usuario aprovar.

## Arquitetura de bibliotecas

### design/

Fundamentos visuais permanentes.

Conteudo alvo:

- cores;
- tipografia;
- espacamento;
- motion;
- iconografia;
- acessibilidade;
- principios visuais.

### component-library/

Padroes reutilizaveis de componentes.

Conteudo alvo:

- botoes;
- formularios;
- tabelas;
- modais;
- toasts;
- loading;
- empty states;
- dashboards;
- navegacao;
- filtros.

### project-library/

Modelos por tipo de projeto.

Conteudo alvo:

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
- oficina.

### inspiration/

Referencias visuais e funcionais por dominio.

Regra:

Inspirar, nao copiar.

### knowledge/

Conhecimento tecnico permanente.

Conteudo alvo:

- TypeScript;
- Node.js;
- Next.js;
- PHP;
- MySQL;
- seguranca;
- performance;
- SEO;
- UX;
- UI;
- Git;
- APIs.

### prompt-library/

Prompts reutilizaveis.

Conteudo alvo:

- prompt por agente;
- prompt por fase;
- prompt por tipo de projeto;
- prompt para Codex;
- prompt para QA;
- prompt para revisao.

### playbooks/

Procedimentos operacionais.

Conteudo alvo:

- novo projeto web;
- sistema web;
- SaaS;
- infraestrutura;
- correcao de bug;
- QA;
- GitHub;
- evolucao AI Office.

### quality-gates/

Criterios de aprovacao entre fases.

Conteudo alvo:

- discovery;
- requisitos;
- arquitetura;
- UX;
- direcao criativa;
- aprovacao visual;
- DEV;
- UI Review;
- QA;
- DevOps.

### templates/

Modelos oficiais.

Conteudo alvo:

- documentos;
- tarefas;
- estrutura inicial por tipo de projeto.

## Fluxo de evolucao

```text
Diagnostico
-> Documentos base
-> Arquitetura do framework
-> UX Lead
-> Direcao Criativa UI
-> Bibliotecas base
-> Fortalecimento de agentes
-> Quality gates oficiais
-> QA do framework
-> Release interno
```

## Estrategia de implementacao

Implementar em fases pequenas:

1. documentar;
2. estruturar;
3. preencher bibliotecas essenciais;
4. conectar agentes as bibliotecas;
5. validar;
6. versionar.

## Riscos arquiteturais

- Criar agentes demais e fragmentar o processo.
- Duplicar conhecimento entre agentes e bibliotecas.
- Automatizar antes de padronizar.
- Alterar workflow global sem testes metodologicos.
- Fazer fases grandes demais.
- Usar Codex para decisoes que JADE pode conduzir.

## Mitigacoes

- Priorizar bibliotecas.
- Fortalecer agentes existentes.
- Usar quality gates.
- Trabalhar por fases aprovadas.
- Criar templates antes de escalar.
- Manter Framework Architect como guardiao.

## Criterios de aceite da arquitetura

A arquitetura sera considerada adequada quando:

- mantiver simplicidade;
- suportar crescimento;
- reduzir improviso;
- centralizar conhecimento em bibliotecas;
- evitar excesso de agentes;
- controlar uso de Codex;
- proteger projetos web contra DEV prematuro;
- permitir releases internos do framework.

## Fonte principal

- `projects/ai-office-framework-v2/diagnostico.md`

