# PDV

## Objetivo
PDV e um sistema de venda operacional para registrar produtos, pagamentos, caixa, estoque e impressao de comprovantes.

## Funcionalidades esperadas
- login e permissoes;
- busca de produto;
- carrinho;
- desconto;
- multiplas formas de pagamento;
- abertura e fechamento de caixa;
- controle de estoque;
- cadastro de produtos e clientes;
- relatorios basicos;
- impressao de cupom quando necessario.

## Modulos obrigatorios
- Autenticacao.
- PDV de venda rapida.
- Produtos.
- Clientes.
- Formas de pagamento.
- Caixa.
- Estoque.
- Relatorios essenciais.

## Modulos opcionais
- Compras.
- Financeiro.
- Devolucoes.
- Vale-compras.
- Importacao XML.
- Impressao local.
- Etiquetas.
- Comissoes.
- Multiempresa.

## Integracoes comuns
- leitor de codigo de barras como teclado;
- impressora local;
- gateway de pagamento;
- emissao fiscal, quando aplicavel;
- importacao XML;
- backup externo.

## Requisitos nao funcionais
- alta velocidade no fluxo de venda;
- baixa friccao operacional;
- tolerancia a erro do operador;
- seguranca em caixa e permissoes;
- consistencia de estoque;
- interface densa, clara e responsiva.

## Checklist minimo
- vender produto simples;
- finalizar pagamento;
- registrar movimentacao de caixa;
- baixar estoque;
- consultar venda;
- tratar produto nao encontrado;
- bloquear acao sem permissao;
- validar estados vazios e erros.

## Erros comuns
- PDV com visual de CRUD;
- fluxo de venda lento;
- botoes sobrepostos;
- total pouco visivel;
- estoque inconsistente;
- caixa sem trilha de auditoria;
- impressao tratada tarde demais.

## Boas praticas
- priorizar teclado e leitura rapida;
- manter total sempre claro;
- separar operacao de gestao;
- confirmar acoes criticas;
- registrar historico de caixa;
- testar com dados reais.

## Reutilizacao pelos agentes
Analista usa para requisitos. Arquiteto usa para modulos e riscos. UX Lead usa para fluxo de operador. Diretor Criativo UI usa para padrao operacional. QA usa para validar venda completa.

