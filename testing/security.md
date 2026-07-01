# Security Testing

## Objetivo
Validar seguranca basica antes de entrega.

## Validar
- secrets fora do codigo
- `.env.example` sem segredo real
- autenticacao e autorizacao
- validacao de entrada
- logs sem dados sensiveis
- dependencia critica conhecida

## Evidencias
- arquivos revisados
- comandos executados
- riscos pendentes

## Reprovacao
Segredo no repositorio, endpoint sensivel sem protecao ou dado sensivel em log.
