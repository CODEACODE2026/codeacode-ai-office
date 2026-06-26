# Quality Gate - UI Review

## Objetivo
Bloquear interfaces genericas, desalinhadas, incompletas ou sem estados obrigatorios.

## Quando executar
Antes de aprovar frontend, site, dashboard, SaaS ou qualquer entrega com interface.

## Quem executa
UI Reviewer, UX Lead, Diretor Criativo UI e QA quando aplicavel.

## Bibliotecas consultadas
- `DESIGN_PRINCIPLES.md`
- `knowledge/ux.md`
- `knowledge/ui.md`
- `component-library/`
- `inspiration/`

## Criterios obrigatorios
- UX aprovado antes do DEV;
- direcao criativa aprovada quando projeto web;
- layout responsivo;
- hierarquia visual clara;
- loading definido;
- empty state definido;
- error state definido;
- success state definido;
- hover e focus definidos;
- acoes criticas com confirmacao;
- interface nao parece CRUD generico.

## Criterios de reprovacao
- sobreposicao visual;
- texto estourando;
- mobile quebrado;
- estados ausentes;
- botoes desalinhados;
- visual generico;
- ausencia de aprovacao visual.

## Acoes quando reprovado
- listar problemas especificos;
- apontar arquivo/tela afetada;
- solicitar ajuste pequeno;
- reexecutar validacao visual.

## Evidencias esperadas
- prints ou descricao da tela;
- lista de estados testados;
- resultado de build/typecheck quando aplicavel;
- resumo de ajustes.

## Relacao com DoR e DoD
Valida Definition of Done visual.

Se falhar, a entrega nao vai para QA final.

