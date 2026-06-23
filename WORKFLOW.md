WORKFLOW - Code a Code AI Office
Objetivo

Definir o fluxo oficial de desenvolvimento da Code a Code.

Nenhum projeto deve iniciar diretamente pelo Agente DEV.

Todos os projetos devem seguir este fluxo.

Fluxo Oficial

Cliente
↓
Analista
↓
Arquiteto
↓
DEV
↓
QA
↓
GitHub
↓
Deploy

Agente Analista

Arquivo:

agents/analista.md

Responsável por:

Entender o projeto.
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

Requisitos concluídos.
Arquitetura definida.
Tecnologia aprovada.
Padrão da Empresa

Projetos simples:
PHP

Sistemas:
Node.js + TypeScript

SaaS:
Next.js + Node.js

Sempre utilizar a solução mais simples que resolva o problema.
