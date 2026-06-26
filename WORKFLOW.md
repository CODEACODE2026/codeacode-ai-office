WORKFLOW - Code a Code AI Office
Objetivo

Definir o fluxo oficial de desenvolvimento da Code a Code.

Nenhum projeto deve iniciar diretamente pelo Agente DEV.

Todos os projetos devem seguir este fluxo.

Fluxo Oficial

Cliente
↓
Gerente de Projetos
↓
Prompt Specialist
↓
Analista
↓
Arquiteto
↓
UX Lead
↓
Diretor Criativo UI
↓
Validação do Usuário
↓
DEV
↓
UI Reviewer
↓
QA
↓
DevOp

Prompt Specialist

Arquivo:

agents/prompt-specialist.md

Responsável por:

Transformar ideias vagas em especificações claras.
Descobrir o problema real do cliente.
Refinar escopo.
Identificar riscos.
Identificar integrações.
Identificar usuários.
Definir objetivo do projeto.
Criar documentação base.

Regra obrigatória:

Nenhum projeto deve seguir para o Agente Analista sem passar primeiro pelo Prompt Specialist.

Saídas:

projects/NOME_DO_PROJETO/discovery.md
projects/NOME_DO_PROJETO/master-prompt.md

Fonte oficial:

discovery.md e master-prompt.md são a fonte oficial de verdade do projeto.

Agente Analista

Arquivo:

agents/analista.md

Responsável por:

Analisar discovery.md e master-prompt.md.
Levantar requisitos.
Identificar funcionalidades.
Identificar usuários.
Identificar integrações.
Criar documentação.

Saída:

projects/NOME_DO_PROJETO/requisitos.md

Agente Arquiteto

Arquivo:

agents/arquiteto.md

Responsável por:

Analisar requisitos.
Escolher tecnologia.
Escolher template.
Definir arquitetura.

Classificações:

Nível 1:
PHP + Hospedagem Compartilhada

Nível 2:
Node.js + Express + MySQL

Nível 3:
Next.js + Node.js + Redis + WebSocket

Saída:

projects/NOME_DO_PROJETO/arquitetura.md

Diretor Criativo UI

Arquivo:

agents/diretor-criativo-ui.md

Responsável por:

Criar conceito visual.
Definir identidade visual.
Definir paleta de cores.
Definir tipografia.
Definir wireframe conceitual.
Definir componentes especiais.
Definir imagens e ilustrações.
Definir animações e microinterações.
Definir experiência mobile.
Criar diretrizes visuais para o Agente DEV.

Saída:

projects/NOME_DO_PROJETO/direcao-criativa.md

Agente DEV

Arquivo:

agents/dev.md

Responsável por:

Criar código.
Criar APIs.
Criar frontend.
Criar banco de dados.
Criar documentação.

Obrigatório:

README.md
.env.example
Git

Saída:

Código do projeto.

Agente QA

Arquivo:

agents/qa.md

Responsável por:

Revisar código.
Revisar segurança.
Revisar documentação.
Revisar banco.
Revisar APIs.

Saída:

projects/NOME_DO_PROJETO/qa-report.md

Resultado:

APROVADO
ou
REPROVADO

Templates Oficiais

Nível 1:

templates/site-simples-php

Nível 2:

templates/sistema-node

Nível 3:

Em desenvolvimento

Regra Principal

Nunca iniciar desenvolvimento sem:

Nunca iniciar desenvolvimento sem:

- Discovery concluído
- Master prompt concluído
- Requisitos concluídos
- Arquitetura definida
- UX Lead concluído
- Direção criativa concluída
- Visual aprovado pelo usuário
- Plano aprovado pelo usuário

Projetos simples:
PHP

Sistemas:
Node.js + TypeScript

SaaS:
Next.js + Node.js

Sempre utilizar a solução mais simples que resolva o problema.


## Projetos de site/landing page

Todo projeto de site deve passar por:

Prompt Specialist
↓
Site Creative Director
↓
Diretor Criativo UI
↓
DEV
↓
UI Reviewer

Nenhum site pode ser desenvolvido sem:
- conceito visual aprovado
- referências visuais
- palavras-chave de imagens
- animações definidas
- estrutura de seções aprovada
