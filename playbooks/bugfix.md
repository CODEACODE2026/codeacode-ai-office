# Playbook - Bugfix

## Quando utilizar
Use quando o usuario relatar bug visual, erro tecnico, comportamento incorreto ou quebra em funcionalidade existente.

## Objetivo
Corrigir o problema com menor alteracao possivel, sem refatorar fora do escopo.

## Sequencia de execucao
1. Entender sintoma e contexto.
2. Localizar area afetada.
3. Ler somente arquivos necessarios.
4. Identificar causa provavel.
5. Explicar ajuste antes de editar.
6. Corrigir apenas o necessario.
7. Rodar validacao adequada.
8. Resumir causa, arquivos alterados e testes.

## Agentes envolvidos
JADE, DEV/Codex e QA. UI Reviewer entra se for bug visual.

## Documentos consultados
- documentacao do projeto;
- arquivos afetados;
- README ou comandos de validacao.

## Bibliotecas consultadas
- `knowledge/frontend.md` para bug de interface;
- `knowledge/backend.md` para bug de API;
- `knowledge/ui.md` para bug visual;
- `component-library/` quando componente estiver envolvido.

## Pontos de aprovacao
- aprovar escopo se a correcao crescer;
- aprovar alteracao destrutiva se houver risco;
- aprovar commit quando necessario.

## Criterios de conclusao
- bug corrigido;
- escopo preservado;
- validacao executada;
- resumo entregue;
- sem regressao evidente.

## Erros comuns
- refatorar demais;
- alterar regra de negocio sem pedir;
- corrigir sintoma e nao causa;
- nao rodar build/typecheck;
- mexer em arquivos nao relacionados.

