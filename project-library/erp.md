# ERP

## Objetivo
ERP integra processos administrativos e operacionais de uma empresa em modulos conectados.

## Funcionalidades esperadas
- cadastros centrais;
- usuarios e permissoes;
- financeiro;
- estoque;
- compras;
- vendas;
- relatorios;
- configuracoes;
- auditoria basica.

## Modulos obrigatorios
- Autenticacao.
- Empresas ou unidade operacional.
- Usuarios/permissoes.
- Cadastros principais.
- Financeiro basico.
- Relatorios essenciais.
- Configuracoes.

## Modulos opcionais
- Estoque avancado.
- Compras.
- Vendas.
- Fiscal.
- Producao.
- Contratos.
- Comissoes.
- BI.
- Integracoes externas.

## Integracoes comuns
- sistemas fiscais;
- gateways de pagamento;
- bancos;
- planilhas;
- ecommerce;
- APIs de terceiros;
- ferramentas de BI.

## Requisitos nao funcionais
- arquitetura modular;
- seguranca por permissao;
- rastreabilidade;
- consistencia transacional;
- bom desempenho em listas;
- backup;
- documentacao de ambiente.

## Checklist minimo
- login;
- perfis;
- cadastro central;
- fluxo financeiro basico;
- relatorio essencial;
- filtros e busca;
- tratamento de permissao;
- logs ou historico quando critico.

## Erros comuns
- tentar criar ERP completo de uma vez;
- modulos acoplados demais;
- permissao deixada para o fim;
- relatorios sem filtros;
- cadastros sem padrao;
- excesso de telas CRUD sem jornada.

## Boas praticas
- dividir por modulos pequenos;
- priorizar processos principais;
- validar regras com usuarios reais;
- usar tarefas economicas;
- manter consistencia visual;
- documentar limites do MVP.

## Reutilizacao pelos agentes
Gerente usa para controlar escopo. Analista define modulos e regras. Arquiteto decide modularizacao. DEV executa uma parte por vez. QA valida fluxos integrados.

