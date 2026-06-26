# Quality Gate - Project Ready

## Objetivo
Bloquear inicio de projeto ou tarefa tecnica sem escopo, contexto e aprovacao suficientes.

## Quando executar
Antes de acionar Codex, DEV ou qualquer implementacao.

## Quem executa
JADE com apoio do Gerente de Projetos, Prompt Specialist, Analista e Arquiteto.

## Bibliotecas consultadas
- `project-library/`
- `knowledge/`
- `prompt-library/`
- `playbooks/new-project.md`

## Criterios obrigatorios
- tipo de projeto identificado;
- objetivo claro;
- escopo inicial definido;
- arquivos permitidos definidos quando houver execucao;
- arquivos proibidos definidos;
- fontes necessarias listadas;
- criterios de conclusao definidos;
- usuario aprovou proxima acao.

## Criterios de reprovacao
- pedido amplo demais;
- falta de objetivo;
- tentativa de criar sistema inteiro de uma vez;
- ausencia de aprovacao;
- Codex seria acionado sem tarefa economica.

## Acoes quando reprovado
- pedir esclarecimento;
- dividir escopo;
- criar discovery;
- preparar tarefa menor;
- solicitar nova aprovacao.

## Evidencias esperadas
- resumo do projeto;
- lista de arquivos permitidos/proibidos;
- plano de tarefas pequenas;
- aprovacao explicita.

## Relacao com DoR e DoD
Este gate valida Definition of Ready.

Se falhar, a fase ainda nao esta pronta.

