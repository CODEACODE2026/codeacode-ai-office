# Frontend Knowledge

## Objetivo
Orientar decisoes reutilizaveis de frontend em projetos da Code a Code.

Este documento deve ajudar agentes a evitar interfaces genericas, inconsistentes ou dificeis de usar.

## Principios
- Frontend deve servir ao fluxo do usuario.
- Interface de sistema deve priorizar clareza, velocidade e previsibilidade.
- Projeto web nao deve ir para DEV sem UX Lead e direcao criativa aprovadas.
- Estados de loading, vazio, erro e sucesso sao obrigatorios em telas com dados.
- Responsividade deve ser considerada desde o inicio.
- Visual nao pode parecer CRUD generico.

## Nivel de tecnologia
Escolher tecnologia conforme o projeto:
- site simples: PHP, HTML, CSS e JavaScript;
- sistema web: frontend simples ou Next.js quando houver justificativa;
- SaaS/plataforma: Next.js ou stack aprovada;
- dashboard interno: priorizar estabilidade e manutencao.

## Estrutura de frontend
Para apps modernos, preferir separacao clara:
```text
src/
  app/
  components/
  lib/
  types/
  styles/
```

Evitar componentes enormes quando houver fluxos distintos.

## Componentes
Componentes devem:
- ter responsabilidade clara;
- receber dados por props ou estado bem definido;
- evitar regra de negocio pesada;
- tratar estados vazios;
- tratar erros;
- manter acessibilidade basica.

## Dados e API
Chamadas de API devem:
- ficar em camada reutilizavel;
- ter tipos definidos;
- tratar falhas de permissao;
- evitar duplicacao de fetch;
- expor mensagens compreensiveis.

## Layout
Aplicacoes operacionais devem evitar:
- hero marketing desnecessario;
- cards decorativos em excesso;
- tabelas sem responsividade;
- botoes sobrepostos;
- scroll confuso;
- texto grande demais em area densa.

Preferir:
- navegacao clara;
- acoes principais visiveis;
- filtros compactos;
- tabelas com overflow controlado;
- densidade adequada ao tipo de uso.

## Estados obrigatorios
Telas com dados devem prever:
- carregando;
- lista vazia;
- erro de API;
- falta de permissao;
- sucesso apos acao;
- confirmacao para acao critica.

## Validacao visual
Antes de encerrar frontend:
- verificar desktop e mobile;
- verificar sobreposicao;
- verificar overflow;
- verificar contraste;
- verificar foco e hover;
- verificar mensagens de erro;
- verificar componentes com dados vazios.

## Codex
Ao acionar Codex para frontend, fornecer:
- tela/componente alvo;
- arquivos permitidos;
- comportamento esperado;
- estados obrigatorios;
- restricoes visuais;
- comandos de typecheck/build.

