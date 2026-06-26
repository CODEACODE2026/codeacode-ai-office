# AI Office Framework v2 - Index

## Objetivo
Orientar leitura minima do Framework v2 para reduzir consumo de contexto e evitar duplicacao.

Padrao oficial de arquivos:
- documentos de bibliotecas usam nomes em minusculo com hifen;
- `README.md` e mantido como indice de pasta;
- arquivos legados vazios em maiusculo foram aposentados.

## Mapa das bibliotecas
- `knowledge/`: conhecimento tecnico, UX e UI reutilizavel.
- `project-library/`: padroes por tipo de projeto.
- `component-library/`: componentes de interface reutilizaveis.
- `inspiration/`: referencias visuais descritas como boas praticas.
- `prompt-library/`: prompts reutilizaveis para iniciar projetos.
- `playbooks/`: procedimentos operacionais.
- `quality-gates/`: criterios bloqueadores entre fases.
- `templates/`: formatos oficiais de documentos e tarefas.

## Leitura por agente
Gerente de Projetos:
- `playbooks/new-project.md`
- `project-library/README.md`
- projeto especifico em `project-library/`
- `quality-gates/project-ready.md`

Prompt Specialist:
- `prompt-library/README.md`
- prompt especifico em `prompt-library/`
- projeto especifico em `project-library/`
- `knowledge/ux.md` quando houver interface

Analista:
- `project-library/`
- `knowledge/backend.md` ou `knowledge/frontend.md` conforme escopo
- `component-library/README.md` quando houver interface

Arquiteto:
- `knowledge/backend.md`
- `knowledge/frontend.md`
- projeto especifico em `project-library/`
- `quality-gates/backend.md` quando houver backend

UX Lead:
- `knowledge/ux.md`
- projeto especifico em `project-library/`
- `component-library/`
- `inspiration/`

Diretor Criativo UI:
- `DESIGN_PRINCIPLES.md`
- `knowledge/ui.md`
- `component-library/`
- `inspiration/`
- `quality-gates/ui-review.md`

Site Creative Director:
- `DESIGN_PRINCIPLES.md`
- `project-library/landing-page.md`
- `inspiration/landing-pages.md`
- `component-library/buttons.md`
- `component-library/forms.md`
- `quality-gates/ui-review.md`

DEV:
- tarefa aprovada em formato `templates/codex-task.md`
- `knowledge/backend.md` quando houver backend
- `knowledge/frontend.md` quando houver frontend
- `component-library/` somente quando houver UI
- quality gate aplicavel

UI Reviewer:
- `quality-gates/ui-review.md`
- `DESIGN_PRINCIPLES.md`
- `knowledge/ui.md`
- `knowledge/ux.md`

QA:
- quality gates aplicaveis
- documentos do projeto
- `knowledge/` somente para a area revisada

DevOps:
- `playbooks/release.md`
- `quality-gates/release.md`
- README do projeto

Framework Architect:
- `projects/ai-office-framework-v2/framework-governance.md`
- `projects/ai-office-framework-v2/knowledge-architecture.md`
- biblioteca ou agente alvo da mudanca

## Ordem por tipo de projeto
Landing page/site:
1. `playbooks/new-site.md`
2. `project-library/landing-page.md`
3. `prompt-library/new-landing-page.md`
4. `knowledge/ux.md`
5. `knowledge/ui.md`
6. `inspiration/landing-pages.md`
7. `quality-gates/project-ready.md`

PDV:
1. `playbooks/new-project.md`
2. `project-library/pdv.md`
3. `prompt-library/new-pdv.md`
4. `knowledge/backend.md`
5. `knowledge/frontend.md`
6. `component-library/dashboard.md`
7. `quality-gates/project-ready.md`

CRM:
1. `playbooks/new-project.md`
2. `project-library/crm.md`
3. `prompt-library/new-crm.md`
4. `knowledge/ux.md`
5. `knowledge/frontend.md`
6. `component-library/forms.md`
7. `quality-gates/project-ready.md`

ERP:
1. `playbooks/new-project.md`
2. `project-library/erp.md`
3. `prompt-library/new-erp.md`
4. `knowledge/backend.md`
5. `knowledge/frontend.md`
6. `component-library/dashboard.md`
7. `quality-gates/project-ready.md`

Bugfix:
1. `playbooks/bugfix.md`
2. tarefa atual
3. arquivo ou biblioteca diretamente relacionada
4. quality gate aplicavel

Release:
1. `playbooks/release.md`
2. `quality-gates/release.md`
3. QA report
4. README do projeto

## Fluxo resumido
Gerente de Projetos -> Prompt Specialist -> Analista -> Arquiteto -> UX Lead -> Diretor Criativo UI -> Validacao do Usuario -> DEV -> UI Reviewer -> QA -> DevOps.

## Regra de economia
Cada agente deve ler apenas:
- indice quando precisar localizar fonte;
- biblioteca especifica da sua funcao;
- documentos aprovados do projeto;
- quality gate aplicavel.

Nao reler documentos estrategicos longos em tarefas rotineiras.
