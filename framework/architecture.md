# Framework Architecture

## Objetivo
Definir a arquitetura documental do AI Office.

## Camadas
- `agents/`: quem executa ou valida.
- `knowledge/` e bibliotecas: o que o time sabe.
- `playbooks/`: como executar.
- `quality-gates/`: quando aprovar ou reprovar.
- `templates/`: qual formato produzir.
- `examples/`: como aplicar em casos comuns.
- `integrations/`: como lidar com ferramentas externas.
- `testing/`: como validar tecnicamente.

## Regra de pertencimento
- Responsabilidade vai para agente.
- Conhecimento reutilizavel vai para biblioteca.
- Procedimento vai para playbook.
- Criterio bloqueador vai para quality gate.
- Formato vai para template.
- Decisao duravel vai para decision record.

## Anti-padroes
- Duplicar regras em varios lugares.
- Criar agente para problema que uma regra resolve.
- Misturar projeto de cliente com framework.
- Criar documento longo sem necessidade.
