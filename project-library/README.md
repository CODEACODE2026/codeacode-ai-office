# Project Library - AI Office Framework v2

## Objetivo
Guardar modelos reutilizaveis por tipo de projeto.

Esta biblioteca ajuda agentes a reconhecer escopo tipico, modulos comuns, riscos e checklist minimo antes de criar discovery, requisitos, arquitetura ou tarefa para Codex.

## Quando usar
Use `project-library/` quando:
- iniciar projeto novo;
- classificar tipo de projeto;
- estimar escopo inicial;
- definir modulos minimos;
- evitar esquecer requisitos comuns;
- comparar pedido do usuario com padroes recorrentes.

## Quando nao usar
Nao use esta biblioteca para:
- substituir discovery do projeto;
- impor funcionalidades sem validacao do usuario;
- criar tarefas para Codex diretamente;
- decidir design visual;
- documentar regra especifica de cliente.

## Arquivos iniciais
- `landing-page.md`
- `pdv.md`
- `crm.md`
- `erp.md`

## Como agentes devem reutilizar
1. Identificar o tipo de projeto.
2. Ler apenas o arquivo correspondente.
3. Usar como checklist, nao como escopo fechado.
4. Adaptar ao contexto do cliente.
5. Registrar excecoes em discovery e requisitos.

## Manutencao
Novos tipos de projeto so devem ser adicionados quando forem recorrentes.

Cada arquivo deve ser curto, reutilizavel e manter os mesmos blocos: objetivo, funcionalidades, modulos, integracoes, requisitos nao funcionais, checklist, erros comuns e boas praticas.

