# Knowledge Architecture - AI Office Framework v2

## Status
Fase 4 aprovada e executada.

Este documento define a arquitetura da base de conhecimento permanente da AI Office. Nenhuma biblioteca foi criada nesta fase.

## Fontes
- `diagnostico.md`
- `discovery.md`
- `master-prompt.md`
- `requisitos.md`
- `arquitetura.md`
- `framework-architecture.md`
- `framework-governance.md`

## Objetivo
Organizar como a AI Office armazena, consulta, reutiliza e atualiza conhecimento permanente para reduzir improviso, duplicacao e consumo de contexto do Codex.

## Principio central
Conhecimento permanente fica em bibliotecas. Agentes consultam bibliotecas antes de executar qualquer projeto ou fase.

## Separacao de responsabilidades
```text
knowledge/ -> conhecimento tecnico e operacional
project-library/ -> modelos por tipo de projeto
component-library/ -> padroes de componentes
inspiration/ -> referencias e benchmarks
prompt-library/ -> prompts reutilizaveis
playbooks/ -> procedimentos recorrentes
quality-gates/ -> criterios de aprovacao
templates/ -> formatos oficiais
```

## Como agentes consultam conhecimento
Antes de iniciar uma tarefa, o agente deve:
1. Identificar o tipo de tarefa.
2. Identificar o tipo de projeto.
3. Ler apenas bibliotecas diretamente relevantes.
4. Ler o playbook correspondente, se existir.
5. Ler o quality gate da fase, se existir.
6. Usar templates aprovados quando houver documento ou tarefa repetivel.
7. Acionar Codex apenas com contexto minimo necessario.

## Ordem de consulta recomendada
```text
governanca -> playbook -> project-library -> knowledge -> design/component-library -> prompt-library -> templates -> quality-gates
```

A ordem pode mudar conforme a tarefa, mas o agente deve evitar leitura ampla sem necessidade.

## Estrutura de knowledge/
Funcao: guardar conhecimento tecnico e operacional permanente.

Estrutura sugerida futura: `README.md`, `frontend/`, `backend/`, `database/`, `infra/`, `security/`, `performance/`, `ux/`, `ui/`, `git/`, `api/`.

Conteudo permitido:
- padroes tecnicos;
- boas praticas;
- decisoes recorrentes;
- riscos conhecidos;
- exemplos curtos;
- referencias internas.

Conteudo proibido:
- escopo de projeto especifico;
- tarefas para Codex;
- regras duplicadas de agentes;
- documentacao extensa sem divisao modular.

## Estrutura de project-library/
Funcao: guardar modelos por tipo de projeto.

Estrutura sugerida futura: `README.md`, `site-simples.md`, `landing-page.md`, `sistema-web.md`, `saas.md`, `ecommerce.md`, `crm.md`, `erp.md`, `pdv.md`, `automacao.md`, `infraestrutura.md`.

Cada arquivo deve conter:
- quando usar;
- publico comum;
- escopo tipico;
- tecnologias provaveis;
- riscos;
- checklist inicial;
- documentos obrigatorios.

## Estrutura de component-library/
Funcao: guardar padroes reutilizaveis de interface.

Estrutura sugerida futura: `README.md`, `buttons.md`, `forms.md`, `tables.md`, `filters.md`, `modals.md`, `toasts.md`, `loading.md`, `empty-states.md`, `dashboards.md`, `navigation.md`.

Cada componente deve definir:
- objetivo;
- quando usar;
- estados obrigatorios;
- variantes;
- acessibilidade;
- comportamento responsivo;
- erros comuns.

## Estrutura de inspiration/
Funcao: guardar referencias por dominio, sem copiar layouts.

Estrutura sugerida futura: `README.md`, `saas.md`, `dashboard.md`, `login.md`, `ecommerce.md`, `crm.md`, `erp.md`, `pdv.md`, `mobile.md`, `landing.md`.

Cada referencia deve registrar:
- tipo de produto;
- referencias visuais;
- padroes uteis;
- o que evitar;
- aplicacao possivel na Code a Code.

## Estrutura de prompt-library/
Funcao: guardar prompts reutilizaveis e economicos.

Estrutura sugerida futura: `README.md`, `agents/`, `phases/`, `codex-tasks/`, `qa/`, `review/`.

Cada prompt deve conter:
- objetivo;
- quando usar;
- contexto minimo;
- entradas;
- saidas;
- limites;
- exemplo curto.

## Estrutura de playbooks/
Funcao: guardar procedimentos recorrentes.

Estrutura sugerida futura: `README.md`, `novo-projeto-web.md`, `sistema-web.md`, `saas.md`, `correcao-bug.md`, `infraestrutura.md`, `qa.md`, `github-release.md`, `evolucao-ai-office.md`.

Cada playbook deve conter:
- gatilho;
- pre-requisitos;
- passos;
- arquivos permitidos;
- arquivos proibidos;
- validacao;
- proxima acao.

## Estrutura de quality-gates/
Funcao: guardar criterios de aprovacao entre fases.

Estrutura sugerida futura: `README.md`, `discovery.md`, `requisitos.md`, `arquitetura.md`, `ux.md`, `direcao-criativa.md`, `aprovacao-visual.md`, `dev.md`, `ui-review.md`, `qa.md`, `devops.md`.

Cada gate deve conter:
- fase;
- criterios obrigatorios;
- bloqueios;
- evidencias aceitas;
- resultado possivel;
- responsavel.

## Reutilizacao de conhecimento
Antes de criar novo conteudo, verificar:
1. Ja existe biblioteca equivalente?
2. Ja existe playbook equivalente?
3. Ja existe template equivalente?
4. O conteudo pode ser referencia em vez de copia?
5. A nova informacao serve para mais de um projeto?

Se servir apenas para um projeto, manter dentro do projeto. Se for recorrente, mover para biblioteca em fase aprovada.

## Evitar duplicacao
Regras:
- nao repetir conhecimento permanente em agentes;
- nao copiar secoes grandes entre documentos;
- preferir links e referencias internas;
- manter documentos entre 200 e 300 linhas;
- dividir assuntos grandes em documentos especializados;
- cada arquivo deve ter uma responsabilidade clara.

## Atualizacao das bibliotecas
Toda atualizacao deve declarar:
- motivo;
- fonte;
- impacto;
- arquivos afetados;
- responsavel;
- validacao.

Mudancas maiores devem passar pelo Framework Architect e por aprovacao do usuario.

## Fluxo de consulta por tipo de agente
Gerente de Projetos:
- `project-library/`
- `playbooks/`
- `quality-gates/discovery.md`

Prompt Specialist:
- `prompt-library/`
- `templates/docs/`
- `project-library/`

Analista:
- `project-library/`
- `knowledge/`
- `quality-gates/requisitos.md`

Arquiteto:
- `knowledge/`
- `project-library/`
- `templates/docs/arquitetura.md`

UX Lead e Diretor Criativo UI:
- `design/`
- `component-library/`
- `inspiration/`
- `quality-gates/ux.md`

DEV:
- `playbooks/`
- `knowledge/`
- `templates/tasks/`
- contexto aprovado do projeto

QA e UI Reviewer:
- `quality-gates/`
- `component-library/`
- `DESIGN_PRINCIPLES.md`

## Politica de economia do Codex
Codex deve receber somente:
- tarefa atual;
- arquivos permitidos;
- arquivos proibidos;
- fontes minimas;
- criterio de conclusao;
- validacao.

Bibliotecas reduzem contexto porque evitam reenviar conhecimento completo a cada tarefa.

## Divisao futura
Se este tema crescer, dividir em documentos especializados:
- `knowledge-index.md`
- `prompt-library-architecture.md`
- `playbook-architecture.md`
- `quality-gates-architecture.md`
- `component-library-architecture.md`

## Criterio de aceite
Esta fase esta concluida quando:
- `knowledge-architecture.md` existir;
- nenhuma biblioteca real tiver sido criada;
- nenhum arquivo global tiver sido alterado;
- regras de consulta, reutilizacao e economia de contexto estiverem claras.

## Proxima fase proposta
Fase 5 - UX Lead.

Criar `ux-lead.md` para definir a experiencia de uso da AI Office como framework conduzido pela JADE.
