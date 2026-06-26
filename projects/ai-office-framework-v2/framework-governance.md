# Framework Governance - AI Office Framework v2

## Status
Fase 3.5 aprovada e executada.

Este documento e a constituicao do AI Office Framework v2. Ele define regras para evoluir a AI Office com simplicidade, reutilizacao, economia de contexto e controle de qualidade.

## Fontes
- `diagnostico.md`
- `discovery.md`
- `master-prompt.md`
- `requisitos.md`
- `arquitetura.md`
- `framework-architecture.md`

## Principios
1. A AI Office existe para melhorar a execucao da Code a Code.
2. O framework deve ser simples antes de ser completo.
3. Conhecimento permanente pertence a bibliotecas.
4. Procedimentos recorrentes pertencem a playbooks.
5. Criterios de aprovacao pertencem a quality gates.
6. Formatos repetiveis pertencem a templates.
7. Agentes aplicam o framework, nao substituem o framework.
8. Novos agentes sao excecao.
9. Codex executa tarefas pequenas, aprovadas e delimitadas.
10. Projetos web nao avancam para DEV sem UX, direcao criativa e aprovacao visual.

## Regra central
Antes de criar ou alterar algo, classificar:

```text
conhecimento -> biblioteca
procedimento -> playbook
criterio -> quality gate
formato -> template
responsabilidade -> agente existente ou novo agente justificado
```

## Framework Architect
O Framework Architect e o guardiao continuo da AI Office.

Responsabilidades:
- governar a arquitetura do framework;
- reduzir consumo de Codex;
- manter padroes reutilizaveis;
- evitar excesso de agentes;
- decidir onde cada conhecimento deve viver;
- revisar propostas de mudanca global;
- manter quality gates;
- orientar versionamento interno;
- preservar simplicidade;
- propor evolucao em fases pequenas.

Decisoes que passam por ele:
- nova biblioteca;
- novo playbook;
- novo quality gate;
- novo template;
- mudanca em workflow;
- alteracao em agente;
- novo agente;
- release interno.

## Regras para evolucao
Toda evolucao deve declarar:
- objetivo;
- arquivos permitidos;
- arquivos proibidos;
- fontes existentes;
- criterio de aceite;
- validacao;
- proxima fase sugerida.

Nao permitido:
- alterar varios modulos sem escopo;
- criar agentes sem justificativa;
- duplicar conhecimento em agentes;
- alterar workflow global sem fase aprovada;
- usar Codex para planejamento amplo;
- modificar projetos de clientes sem aprovacao explicita.

## Bibliotecas
Criar biblioteca quando o conhecimento for recorrente, reutilizavel e util para mais de um agente ou projeto.

Cada biblioteca deve ter:
- objetivo;
- quando usar;
- quem usa;
- conteudo permitido;
- conteudo proibido;
- referencias quando util.

Bibliotecas base:
- `design/`
- `component-library/`
- `project-library/`
- `inspiration/`
- `knowledge/`
- `prompt-library/`

## Playbooks
Criar playbook quando houver procedimento repetivel.

Cada playbook deve ter:
- gatilho de uso;
- entradas;
- passos;
- saidas esperadas;
- validacao;
- limites;
- proxima acao.

Playbooks apontam para bibliotecas quando precisarem de conhecimento permanente.

## Quality gates
Criar quality gate quando uma fase precisar de criterio formal de aprovacao.

Cada gate deve ter:
- fase avaliada;
- itens obrigatorios;
- bloqueios;
- evidencias aceitas;
- resultado;
- responsavel.

Resultados possiveis:
- aprovado;
- aprovado com ressalvas;
- reprovado.

## Templates
Criar template quando um formato for repetido em mais de uma fase ou projeto.

Cada template deve:
- ter objetivo claro;
- ser curto;
- conter secoes obrigatorias;
- evitar texto fixo desnecessario;
- facilitar preenchimento rapido;
- apontar fontes quando necessario.

Templates devem reduzir contexto, nao aumentar.

## Agentes
Criar novo agente e ultima opcao.

Antes de propor, verificar:
1. Pode ser biblioteca?
2. Pode ser playbook?
3. Pode ser quality gate?
4. Pode ser template?
5. Pode fortalecer agente existente?

Um novo agente so pode existir se:
- tiver responsabilidade recorrente;
- tiver fronteira clara;
- tiver entradas e saidas definidas;
- nao duplicar agente existente;
- reduzir complexidade operacional;
- tiver justificativa documentada;
- tiver aprovacao do usuario.

## Reutilizacao
Preferir:
- biblioteca a instrucao isolada;
- playbook a explicacao repetida;
- template a documento criado do zero;
- quality gate a revisao informal.

Nao copiar conteudo entre arquivos sem necessidade. Usar referencias quando o conteudo ja existir.

## Economia de contexto
Cada agente deve ler apenas o necessario para sua tarefa.

Regra de tamanho:
- documentos devem ter aproximadamente 200 a 300 linhas;
- se crescer alem disso, dividir em documentos especializados;
- documento maior so e aceito com justificativa tecnica clara.

Documento modular deve ter objetivo, escopo, referencias e criterio de uso.

## Uso do Codex
Codex deve executar, nao decidir estrategia.

Permitido:
- criar arquivo aprovado;
- editar arquivo aprovado;
- rodar validacao;
- preparar commit quando autorizado.

Nao permitido:
- criar sistema inteiro;
- alterar escopo;
- ler arquivos desnecessarios;
- refatorar fora da tarefa;
- modificar arquivos proibidos.

Toda tarefa para Codex deve conter:
- projeto;
- tarefa;
- objetivo;
- arquivos permitidos;
- arquivos proibidos;
- fontes;
- criterio de conclusao;
- validacao;
- regra de economia.

## Versionamento
A AI Office deve evoluir por releases internos.

Modelo:
- `v2.0.0` primeira versao oficial;
- `v2.x.0` novas bibliotecas, playbooks ou gates;
- `v2.x.y` ajustes menores;
- `v3.0.0` mudanca grande de arquitetura ou workflow.

Cada release deve registrar versao, data, objetivo, arquivos alterados, impacto, riscos e proximos passos.

Commits so devem ser feitos quando autorizados.

## Documentacao
Cada documento deve responder:
- para que existe;
- quando usar;
- quem usa;
- o que entra;
- o que sai;
- o que nao deve fazer.

Evitar documentos gigantes, duplicacao, texto generico, regras escondidas em conversas e conhecimento espalhado em agentes.

## Definition of Ready
Uma fase esta pronta quando:
- objetivo esta claro;
- arquivos permitidos estao definidos;
- arquivos proibidos estao definidos;
- fontes foram indicadas;
- escopo cabe em tarefa economica;
- criterio de aceite esta definido;
- usuario aprovou a execucao.

Sem esses itens, a fase nao vai para Codex.

## Definition of Done
Uma fase esta concluida quando:
- entregas aprovadas foram criadas ou alteradas;
- arquivos proibidos nao foram tocados;
- validacao combinada foi executada;
- resultado foi resumido;
- riscos ou pendencias foram declarados;
- proxima fase foi sugerida;
- nova aprovacao foi solicitada quando necessario.

## Mudancas globais
Mudancas globais incluem:
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

Regras:
- exigir fase propria;
- exigir aprovacao explicita;
- declarar impacto;
- declarar arquivos afetados;
- evitar mudancas em lote;
- validar consistencia apos alteracao.

## Ordem de evolucao
1. Documentos base.
2. Governanca e arquitetura.
3. UX e direcao criativa.
4. Quality gates.
5. Playbooks.
6. Prompt library.
7. Templates.
8. Bibliotecas de design e componentes.
9. Bibliotecas de conhecimento e projetos.
10. Fortalecimento de agentes.
11. QA do framework.
12. Release interno.

## Criterio de sucesso
A governanca sera bem sucedida se reduzir improviso, reduzir consumo de Codex, evitar agentes desnecessarios, tornar conhecimento reutilizavel, proteger projetos web contra UX/UI fraca, permitir evolucao por fases e facilitar manutencao da AI Office.

## Proxima fase proposta
Fase 4 - UX Lead.

Criar `ux-lead.md` para definir a experiencia de uso da AI Office como framework conduzido pela JADE.

