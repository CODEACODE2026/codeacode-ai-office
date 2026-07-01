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
- projeto com banco validado em banco real local antes do MVP ser considerado concluido;
- scripts Prisma compativeis com Windows e Linux, sem depender de sintaxe exclusiva de shell Unix;
- parser de PDF/arquivo com pasta `samples/`, exemplos reais permitidos e testes automatizados.

## Criterios de reprovacao
- regra complexa em controller;
- SQL espalhado sem criterio;
- segredo em codigo;
- endpoint sem validacao;
- erro sem mensagem util;
- build/typecheck falhando;
- migrations nao testadas em banco real local quando o projeto usa banco;
- scripts Prisma que funcionam apenas em Windows ou apenas em Linux;
- parser de PDF/arquivo sem amostras reais versionadas ou sem teste automatizado;
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
- resultado da validacao de migrations em banco real local quando houver banco;
- validacao de scripts Prisma em ambiente Windows/Linux ou justificativa tecnica registrada;
- exemplos em `samples/` e testes do parser quando houver PDF/arquivo;
- limitacoes de ambiente;
- resumo de contrato.

## Relacao com DoR e DoD
Valida Definition of Done tecnico para backend.

Se falhar, a tarefa nao deve ser encerrada.
