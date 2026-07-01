# Prisma

## Objetivo
Padronizar cuidados com Prisma em projetos Node/TypeScript.

## Validar
- `prisma generate`
- schema valido
- migration ou `db push` conforme fase
- scripts compativeis com Windows e Linux
- client atualizado no build

## Evidencias
- comando executado
- banco usado
- resultado sem erro

## Evitar
- sintaxe exclusiva de shell Unix em script npm
- esquecer generate apos mudar schema
- aprovar schema sem banco real quando disponivel
