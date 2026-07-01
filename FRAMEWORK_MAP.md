# Framework Map - AI Office

## Objetivo
Mapear a estrutura permanente do AI Office para orientar leitura, manutencao e evolucao.

## Pastas principais
- `agents/`: papeis operacionais do time de IA.
- `framework/`: regras internas de governanca, arquitetura e versionamento.
- `knowledge/`: conhecimento tecnico e de produto reutilizavel.
- `project-library/`: padroes por tipo de projeto.
- `component-library/`: componentes e criterios de UI.
- `assets-library/`: regras para imagens, icones, mockups e busca de assets.
- `inspiration/`: referencias descritas como principios.
- `prompt-library/`: prompts reutilizaveis.
- `playbooks/`: procedimentos de execucao.
- `quality-gates/`: criterios que bloqueiam aprovacao.
- `templates/`: formatos de documentos.
- `testing/`: padroes de validacao.
- `integrations/`: notas para servicos e ferramentas externas.
- `examples/`: exemplos curtos por tipo de projeto.
- `decision-records/`: decisoes duraveis do framework.

## Ordem de consulta
1. `FRAMEWORK_INDEX.md` para localizar fontes.
2. Documento do agente responsavel.
3. Biblioteca especifica da tarefa.
4. Playbook aplicavel.
5. Quality gate aplicavel.
6. Template de saida.

## Regra de manutencao
Adicionar conteudo no menor lugar util. Se for criterio, vai para `quality-gates/`. Se for procedimento, vai para `playbooks/`. Se for conhecimento reutilizavel, vai para `knowledge/` ou biblioteca especializada.

## Limite
Este mapa nao substitui documentos de cada pasta. Ele apenas orienta navegacao.
