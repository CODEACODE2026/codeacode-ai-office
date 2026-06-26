# Quality Gate - Release

## Objetivo
Bloquear commit, push, deploy ou entrega sem validacao, revisao de risco e aprovacao.

## Quando executar
Antes de commit, push, deploy, tag, release interna ou entrega final.

## Quem executa
JADE coordena. QA valida. DevOps entra quando houver deploy.

## Bibliotecas consultadas
- `playbooks/release.md`
- `knowledge/backend.md`
- `knowledge/frontend.md`
- `knowledge/ui.md`
- README do projeto.

## Criterios obrigatorios
- escopo entregue confere com pedido;
- arquivos proibidos nao foram alterados;
- validacoes executadas;
- `git status` revisado;
- segredos protegidos;
- commit autorizado;
- push/deploy autorizado quando aplicavel;
- riscos pendentes declarados.

## Criterios de reprovacao
- validacao falhou;
- `.env` ou segredo versionado;
- arquivos fora do escopo;
- commit sem autorizacao;
- deploy sem aprovacao;
- falta de resumo final.

## Acoes quando reprovado
- corrigir problema;
- remover segredo;
- pedir aprovacao;
- reexecutar validacao;
- registrar pendencia.

## Evidencias esperadas
- comandos executados;
- hash do commit quando houver;
- status final;
- URL ou ambiente quando houver deploy;
- resumo de riscos.

## Relacao com DoR e DoD
Valida Definition of Done de entrega.

Se falhar, nao publicar nem encerrar release.

