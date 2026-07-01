# MySQL / MariaDB

## Objetivo
Padronizar validacao de banco relacional local ou VPS.

## Validar
- conexao real
- usuario e permissoes
- database correto
- migrations
- seed quando houver
- CRUD principal

## Evidencias
- env usado sem expor segredo
- comando executado
- resultado de migrations
- teste de leitura/escrita

## Evitar
- aprovar usando mock quando banco existe
- alterar dados sensiveis sem backup
- usar root sem necessidade
