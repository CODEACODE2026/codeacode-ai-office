# Playbook - Release

## Quando utilizar
Use quando um projeto, sprint ou conjunto de alteracoes estiver pronto para commit, tag, push, deploy ou entrega.

## Objetivo
Preparar release com validacao, resumo, controle de risco e historico claro.

## Sequencia de execucao
1. Conferir escopo entregue.
2. Rodar validacoes combinadas.
3. Conferir `git status`.
4. Revisar arquivos sensiveis.
5. Confirmar se commit foi autorizado.
6. Criar commit com mensagem clara.
7. Preparar push/deploy apenas se aprovado.
8. Registrar resumo da entrega.

## Agentes envolvidos
JADE, QA, DEV/Codex e DevOps quando houver deploy.

## Documentos consultados
- README do projeto;
- checklist de entrega;
- docs de deploy;
- historico de tarefas.

## Bibliotecas consultadas
- `knowledge/backend.md`;
- `knowledge/frontend.md`;
- `knowledge/ui.md`;
- `playbooks/bugfix.md` se release for de correcao.

## Pontos de aprovacao
- commit;
- push;
- deploy;
- alteracao de ambiente;
- publicacao externa.

## Criterios de conclusao
- validacoes executadas;
- segredos protegidos;
- commit/push/deploy feitos somente se aprovados;
- resumo final entregue;
- riscos pendentes declarados.

## Erros comuns
- commitar sem autorizacao;
- versionar `.env`;
- pular build;
- fazer push sem remote correto;
- deploy sem rollback minimo.

