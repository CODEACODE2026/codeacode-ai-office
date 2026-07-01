# Quality Gate - QA

## Objetivo
Bloquear aprovacao final sem evidencia tecnica, integracao real e riscos declarados.

## Quando executar
Antes de aprovar MVP, release, entrega ao cliente ou encerramento de tarefa tecnica.

## Quem executa
QA valida. JADE resume ao usuario. DEV/Codex corrige pontos reprovados.

## Bibliotecas consultadas
- `templates/qa-report.md`
- quality gates aplicaveis em `quality-gates/`
- documentos do projeto;
- `knowledge/` somente para a area validada.

## Criterios obrigatorios
- QA report preenchido com escopo, fontes, validacoes, problemas, riscos, evidencias e decisao;
- projetos com banco validados contra banco real local antes de aprovar MVP;
- migrations e comandos de banco documentados com resultado da execucao;
- scripts Prisma compativeis com Windows e Linux quando o projeto usa Prisma;
- parsers de PDF/arquivo com pasta `samples/`, exemplos reais permitidos e testes automatizados;
- se o frontend usar dados mockados, o relatorio deve listar claramente o que ainda falta validar com API e banco real;
- projetos financeiros com listagem financeira devem ter totalizadores por filtro e periodo.

## Criterios de reprovacao
- aprovar MVP com banco sem validar migrations em banco real local;
- comandos Prisma dependentes de sintaxe exclusiva de Windows ou Linux sem alternativa;
- parser de PDF/arquivo sem `samples/` reais ou sem teste automatizado;
- frontend com mock aprovado como se estivesse integrado a API e banco real;
- projeto financeiro com listagem sem totalizadores por filtro/periodo;
- riscos pendentes omitidos do relatorio;
- quality gate obrigatorio falhando.

## Acoes quando reprovado
- registrar problema no QA report;
- devolver tarefa para DEV/Codex com escopo pequeno;
- revalidar apenas o ponto corrigido e seus impactos diretos;
- manter decisao como REPROVADO ou APROVADO COM RESSALVAS ate a evidencia existir.

## Evidencias esperadas
- comandos executados e resultados;
- ambiente de banco usado na validacao local;
- migrations aplicadas ou validadas;
- testes de parser e caminho de `samples/`;
- lista do que ainda esta mockado no frontend;
- prints/logs quando ajudarem a comprovar fluxo;
- totalizadores financeiros testados por filtro e periodo quando aplicavel.

## Relacao com DoR e DoD
Este gate valida Definition of Done final.

Se falhar, a entrega nao deve ser aprovada.
