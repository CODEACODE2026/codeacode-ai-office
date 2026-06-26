# Backend Knowledge

## Objetivo
Orientar decisoes reutilizaveis de backend em projetos da Code a Code.

Este documento nao define escopo de projeto. Ele define criterios para agentes e DEV.

## Principios
- Backend deve ser simples, previsivel e testavel.
- A tecnologia deve seguir o nivel do projeto.
- Regras de negocio devem ficar fora de controllers.
- Rotas devem ser finas e delegar para services.
- Services devem concentrar casos de uso.
- Repositories devem isolar acesso a dados quando o projeto exigir.
- Validacao de entrada deve acontecer antes da regra de negocio.
- Erros devem ser claros e consistentes.

## Padrao recomendado para sistemas Node
Usar quando o projeto for sistema web ou SaaS:
- Node.js;
- TypeScript;
- Express ou framework aprovado;
- MySQL quando relacional simples for suficiente;
- Redis apenas quando houver necessidade real;
- WebSocket apenas quando houver requisito real-time.

## Estrutura esperada
Para sistemas modulares, preferir:
```text
src/
  config/
  modules/
  shared/
  http/
  database/
```

Cada modulo deve agrupar suas responsabilidades de forma clara.

## Controllers
Controllers devem:
- receber requisicao;
- validar entrada basica;
- chamar service;
- retornar resposta;
- traduzir erros conhecidos.

Controllers nao devem:
- conter regra de negocio complexa;
- executar SQL direto;
- decidir fluxo de dominio;
- acessar arquivos sensiveis sem camada apropriada.

## Services
Services devem:
- executar caso de uso;
- aplicar regra de negocio;
- coordenar repositories;
- validar permissao quando aplicavel;
- retornar resultado claro.

Services nao devem:
- depender de detalhes HTTP;
- retornar mensagens soltas sem padrao;
- misturar multiplos casos de uso sem motivo.

## Banco de dados
Boas praticas:
- migrations versionadas;
- seeds separadas de migrations;
- nomes claros de tabelas e colunas;
- chaves estrangeiras quando fizer sentido;
- timestamps consistentes;
- indices para buscas recorrentes.

Evitar:
- alterar migrations antigas sem necessidade;
- misturar seed com schema;
- depender de estado manual do banco;
- criar tabelas sem criterio de dominio.

## Autenticacao e seguranca
Todo backend com usuario deve considerar:
- senha com hash;
- tokens ou sessoes seguras;
- variaveis em `.env`;
- `.env.example` sem segredos;
- validacao de permissao;
- logs sem dados sensiveis.

## APIs
APIs devem ter:
- padrao de resposta previsivel;
- codigos HTTP corretos;
- mensagens de erro acionaveis;
- paginacao quando listas crescerem;
- filtros documentados quando existirem.

## Codex
Ao acionar Codex para backend, fornecer:
- modulo alvo;
- arquivos permitidos;
- endpoints envolvidos;
- regras de negocio;
- validacoes esperadas;
- comandos de teste/build.

