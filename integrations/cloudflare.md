# Cloudflare

## Objetivo
Notas para DNS, proxy, SSL e regras de borda.

## Validar
- DNS correto
- SSL ativo
- proxy laranja/cinza conforme necessidade
- cache sem quebrar API
- redirects essenciais

## Evidencias
- registros DNS
- dominio respondendo
- HTTPS funcionando

## Evitar
- alterar DNS sem registrar estado anterior
- cache agressivo em rotas dinamicas
- expor origem sem necessidade
