# WORKFLOW - Code a Code AI Office

## Objetivo
Definir o fluxo oficial de desenvolvimento da Code a Code usando o AI Office Framework.

Nenhum projeto deve iniciar diretamente pelo DEV.

## Fluxo oficial para projetos web
```text
Cliente
-> JADE / Gerente de Projetos
-> Prompt Specialist
-> Analista
-> Arquiteto
-> UX Lead
-> Conversion Strategist
-> Brand Strategist
-> Asset Manager
-> Diretor Criativo UI
-> Validacao do Usuario
-> DEV
-> UI Reviewer
-> QA
-> DevOps
```

## Regra principal
Nenhum projeto web pode ir para DEV sem:
- discovery e master prompt;
- requisitos;
- arquitetura;
- UX Lead;
- estrategia de conversao quando houver pagina comercial, site ou funil;
- estrategia de marca quando houver interface publica ou percepcao de valor relevante;
- plano de assets quando houver sites, landing pages ou imagens relevantes;
- direcao criativa;
- validacao visual do usuario;
- tarefa economica aprovada;
- `quality-gates/project-ready.md` aprovado.

## Framework obrigatorio
Agentes devem consultar bibliotecas antes de criar conteudo novo:
- `FRAMEWORK_INDEX.md` somente quando precisar localizar fontes;
- `knowledge/`
- `project-library/`
- `component-library/`
- `assets-library/`
- `inspiration/`
- `prompt-library/`
- `playbooks/`
- `quality-gates/`
- `templates/`

Padrao oficial:
- arquivos de bibliotecas em minusculo com hifen;
- `README.md` como indice de pasta;
- documentos estrategicos longos nao devem ser relidos em tarefas rotineiras.

## Quality Gates
Quality gates bloqueiam avanco de fase.

Gates iniciais:
- `quality-gates/project-ready.md`
- `quality-gates/ui-review.md`
- `quality-gates/backend.md`
- `quality-gates/qa.md`
- `quality-gates/release.md`

## Uso do Codex
Codex so deve ser acionado para tarefa tecnica objetiva com:
- objetivo;
- arquivos permitidos;
- arquivos proibidos;
- fontes;
- criterio de conclusao;
- validacao;
- aprovacao do usuario.

## Agentes e saidas
Prompt Specialist:
- `projects/NOME_DO_PROJETO/discovery.md` usando `templates/discovery.md`
- `projects/NOME_DO_PROJETO/master-prompt.md` usando `templates/master-prompt.md`

Analista:
- `projects/NOME_DO_PROJETO/requisitos.md` usando `templates/requisitos.md`

Arquiteto:
- `projects/NOME_DO_PROJETO/arquitetura.md` usando `templates/arquitetura.md`

UX Lead:
- `projects/NOME_DO_PROJETO/ux.md` usando `templates/ux.md`

Conversion Strategist:
- `projects/NOME_DO_PROJETO/conversion-strategy.md` para paginas comerciais, landing pages, sites e funis.

Brand Strategist:
- `projects/NOME_DO_PROJETO/brand-strategy.md` para projetos com identidade percebida, interface publica ou necessidade de diferenciacao.

Asset Manager:
- `projects/NOME_DO_PROJETO/assets-plan.md` para sites, landing pages e projetos com imagens/assets relevantes.

Diretor Criativo UI:
- `projects/NOME_DO_PROJETO/direcao-criativa.md` usando `templates/direcao-criativa.md`

Site Creative Director:
- `projects/NOME_DO_PROJETO/site-creative-direction.md` apenas para sites/landing pages que exigem storytelling visual especifico.

UI Reviewer:
- `projects/NOME_DO_PROJETO/ui-review.md`

QA:
- `projects/NOME_DO_PROJETO/qa-report.md` usando `templates/qa-report.md`

DevOps:
- `projects/NOME_DO_PROJETO/release.md` ou `deploy.md` usando `templates/release.md`

## Niveis de projeto
Nivel 1:
- site simples, landing page, institucional;
- PHP, HTML, CSS, JavaScript;
- hospedagem compartilhada/cPanel.

Nivel 2:
- sistema web, painel, CRM, PDV, ERP simples;
- Node.js, Express, TypeScript, MySQL;
- VPS.

Nivel 3:
- SaaS, IA, multi-tenant, WebSocket, Redis;
- Next.js, Node.js, Redis, MySQL;
- VPS/cloud.

## Framework interno
Mudancas na AI Office devem ser conduzidas pelo Framework Architect.

Ordem de decisao:
```text
conhecimento -> biblioteca
procedimento -> playbook
criterio -> quality gate
formato -> template
responsabilidade -> agente existente ou novo agente justificado
```

Novo agente e ultima opcao.

## Economia de contexto
Antes de qualquer tarefa, escolher no maximo as fontes necessarias:
- indice;
- biblioteca especifica;
- documentos aprovados do projeto;
- quality gate aplicavel;
- template de saida.

Nao ler bibliotecas inteiras quando um arquivo especifico resolver.
