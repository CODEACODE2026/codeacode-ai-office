# Prompt - New PDV

## Quando utilizar
Use quando o usuario pedir sistema de PDV, caixa, vendas de balcão, controle de estoque comercial ou sistema para loja.

## Objetivo do prompt
Conduzir discovery e planejamento de um PDV operacional, rapido, seguro e modular.

## Informacoes minimas
- tipo de loja;
- quantidade de usuarios;
- fluxo de venda;
- formas de pagamento;
- necessidade de estoque;
- necessidade de caixa;
- necessidade de impressao;
- necessidade fiscal;
- ambiente de deploy.

## Estrutura recomendada
1. Resumo do PDV.
2. Operacao real da loja.
3. Modulos obrigatorios.
4. Modulos opcionais.
5. Integracoes.
6. Requisitos nao funcionais.
7. UX do operador.
8. Arquitetura inicial.
9. Tarefas pequenas.
10. Pergunta de aprovacao.

## Perguntas obrigatorias
- A venda precisa funcionar com leitor de codigo de barras?
- Havera impressora local?
- O caixa precisa abertura e fechamento?
- Estoque baixa automaticamente?
- Existe venda a prazo?
- Precisa fiscal ou apenas comprovante nao fiscal?

## Integracao com bibliotecas
- `project-library/pdv.md`
- `knowledge/backend.md`
- `knowledge/frontend.md`
- `knowledge/ux.md`
- `knowledge/ui.md`
- `component-library/dashboard.md`
- `component-library/forms.md`
- `inspiration/dashboards.md`

## Criterios de reutilizacao
Reutilizar para PDV comercial. Adaptar se o projeto for ERP amplo ou ecommerce.

## Erros comuns
- tentar criar PDV completo de uma vez;
- pular caixa e permissoes;
- esquecer estoque;
- deixar impressao para o fim;
- fazer interface lenta ou com cara de CRUD.

