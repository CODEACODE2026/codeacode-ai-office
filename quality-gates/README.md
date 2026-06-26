# Quality Gates - AI Office Framework v2

## Objetivo
Quality gates definem criterios obrigatorios que bloqueiam o avanco entre fases do Framework.

Eles nao sao apenas checklists. Um gate pode reprovar uma entrega.

## Quando utilizar
Use antes de:
- iniciar execucao tecnica;
- aprovar UI;
- concluir backend;
- preparar release;
- passar para proxima fase.

## Quem executa
JADE coordena. O agente responsavel pela fase aplica o gate. QA valida quando houver entrega final.

## Bibliotecas consultadas
- `framework-governance.md`
- `knowledge/`
- `project-library/`
- `component-library/`
- `playbooks/`

## Resultado possivel
- aprovado;
- aprovado com ressalvas;
- reprovado.

## Regra de bloqueio
Se criterio obrigatorio falhar, a fase nao avanca.

## Gates iniciais
- `project-ready.md`
- `ui-review.md`
- `backend.md`
- `release.md`

## Relacao com DoR e DoD
Definition of Ready valida se a fase pode comecar.

Definition of Done valida se a fase pode ser encerrada.

