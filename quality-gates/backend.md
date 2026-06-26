# Quality Gate - Backend

## Objetivo
Bloquear backend sem estrutura, validacao, seguranca ou contrato minimo.

## Quando executar
Antes de considerar concluida uma tarefa de backend, API, banco ou infraestrutura de servidor.

## Quem executa
DEV/Codex valida tecnicamente. QA revisa resultado. JADE resume ao usuario.

## Bibliotecas consultadas
- `knowledge/backend.md`
- `playbooks/bugfix.md`
- docs do projeto;
- README do backend quando existir.

## Criterios obrigatorios
- regra de negocio no service ou camada apropriada;
- controllers sem excesso de regra;
- validacao de entrada;
- erros claros;
- variaveis sensiveis fora do codigo;
- `.env.example` quando houver ambiente;
- comandos de typecheck/build executados quando existirem;
- migrations/seeds preservadas quando fora do escopo.

## Criterios de reprovacao
- regra complexa em controller;
- SQL espalhado sem criterio;
- segredo em codigo;
- endpoint sem validacao;
- erro sem mensagem util;
- build/typecheck falhando;
- alteracao fora do escopo.

## Acoes quando reprovado
- corrigir ponto especifico;
- reduzir escopo;
- revalidar comandos;
- registrar limitacao se ambiente externo faltar.

## Evidencias esperadas
- arquivos alterados;
- comandos executados;
- resultado de typecheck/build;
- limitacoes de ambiente;
- resumo de contrato.

## Relacao com DoR e DoD
Valida Definition of Done tecnico para backend.

Se falhar, a tarefa nao deve ser encerrada.

