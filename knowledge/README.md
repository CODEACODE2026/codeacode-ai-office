# Knowledge - AI Office Framework v2

## Objetivo
Esta biblioteca guarda conhecimento permanente e reutilizavel da Code a Code.

Ela deve ser consultada pelos agentes antes de iniciar projetos, planejar tarefas ou acionar Codex.

## Quando usar
Use `knowledge/` quando precisar de:
- padroes tecnicos;
- boas praticas reutilizaveis;
- criterios de arquitetura;
- riscos comuns;
- orientacoes de UX/UI;
- orientacoes para backend e frontend.

## Quando nao usar
Nao use esta biblioteca para:
- escopo de um projeto especifico;
- tarefas pontuais para Codex;
- regras temporarias;
- documentacao longa sem divisao;
- conteudo que pertence a `project-library/`, `playbooks/`, `quality-gates/` ou `templates/`.

## Arquivos iniciais
- `backend.md`: padroes reutilizaveis para backend.
- `frontend.md`: padroes reutilizaveis para frontend.
- `ux.md`: principios de experiencia e usabilidade.
- `ui.md`: principios de interface visual.

## Como agentes devem consultar
1. Identificar o tipo de tarefa.
2. Ler apenas o arquivo relevante.
3. Evitar leitura ampla da pasta inteira.
4. Usar este conhecimento como criterio, nao como escopo de implementacao.
5. Acionar Codex somente depois de definir tarefa pequena e arquivos permitidos.

## Regra de manutencao
Todo conteudo novo deve ser:
- reutilizavel;
- curto;
- aplicavel por mais de um projeto;
- sem duplicar outros arquivos;
- revisado pelo Framework Architect quando mudar padrao global.

## Economia de contexto
Cada arquivo deve se manter curto, idealmente abaixo de 200 linhas.

Se um tema crescer demais, dividir em documento especializado.

