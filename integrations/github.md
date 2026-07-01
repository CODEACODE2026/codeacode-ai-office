# GitHub

## Objetivo
Orientar uso de repositorios por projeto.

## Padrao
- Cada projeto real deve ter repositorio proprio em `/opt/codeacode/repos/NOME_DO_PROJETO`.
- AI Office guarda apenas framework, agentes, processos e templates.
- Commits devem ser pequenos e descritivos.

## Validar
- `git status`
- branch correta
- arquivos de cliente fora do AI Office
- secrets fora do repositorio

## Evitar
- misturar projetos de cliente no framework
- commitar `.env`
- push sem revisar diff
