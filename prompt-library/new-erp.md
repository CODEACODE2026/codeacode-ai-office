# Prompt - New ERP

## Quando utilizar
Use quando o usuario pedir sistema integrado de gestao, administrativo, financeiro, estoque, compras, vendas ou operacao empresarial ampla.

## Objetivo do prompt
Conduzir planejamento de ERP modular sem tentar implementar tudo de uma vez.

## Informacoes minimas
- tipo de empresa;
- processos principais;
- modulos essenciais;
- usuarios e permissoes;
- regras financeiras;
- controle de estoque;
- relatorios;
- integracoes;
- ambiente de deploy.

## Estrutura recomendada
1. Resumo do ERP.
2. Processos prioritarios.
3. Modulos MVP.
4. Modulos futuros.
5. Regras de permissao.
6. Dados centrais.
7. Arquitetura modular.
8. UX operacional.
9. Tarefas por etapa.
10. Pergunta de aprovacao.

## Perguntas obrigatorias
- Qual processo precisa funcionar primeiro?
- Quais modulos sao obrigatorios no MVP?
- Quem acessa cada area?
- O sistema precisa financeiro completo?
- Ha integracoes fiscais, bancarias ou ecommerce?
- Qual relatorio e indispensavel?

## Integracao com bibliotecas
- `project-library/erp.md`
- `knowledge/backend.md`
- `knowledge/frontend.md`
- `knowledge/ux.md`
- `knowledge/ui.md`
- `component-library/dashboard.md`
- `component-library/forms.md`
- `inspiration/dashboards.md`
- `inspiration/saas.md`

## Criterios de reutilizacao
Reutilizar para sistemas administrativos amplos. Adaptar para PDV, CRM ou SaaS quando o dominio for mais especifico.

## Erros comuns
- tentar criar ERP completo em uma tarefa;
- misturar modulos sem fronteira;
- deixar permissoes para depois;
- criar telas CRUD sem jornada;
- nao definir MVP.

