# Requisitos - Site Code a Code

## Resumo do Projeto

Criar o site oficial da Code a Code para apresentar a empresa, divulgar seus servicos de tecnologia e gerar contatos comerciais por WhatsApp e formulario simples.

## Objetivo

Disponibilizar uma presenca institucional simples, clara e responsiva, adequada para hospedagem compartilhada/cPanel, permitindo que potenciais clientes entendam rapidamente o que a Code a Code faz e entrem em contato.

## Usuarios

- Potenciais clientes que precisam de sites, sistemas web, automacoes ou suporte em tecnologia.
- Pequenas empresas e profissionais que buscam integracoes digitais.
- Equipe da Code a Code, que podera divulgar o site como canal oficial.

## Funcionalidades

- Pagina inicial com apresentacao direta da Code a Code.
- Secao sobre a empresa.
- Secao de servicos:
  - Desenvolvimento de sites.
  - Sistemas web.
  - Automacao com IA.
  - Integracao WhatsApp.
  - APIs.
  - Suporte e manutencao em tecnologia.
- Secao de beneficios para clientes.
- Chamada para contato via WhatsApp.
- Formulario simples de contato sem banco de dados.
- Rodape com dados institucionais e links principais.
- Navegacao por ancora na mesma pagina.
- Layout responsivo para desktop e celular.

## Regras de Negocio

- O projeto deve ser classificado como Nivel 1.
- Usar PHP, HTML, CSS e JavaScript.
- Usar o template oficial `templates/site-simples-php` como base.
- Rodar em hospedagem compartilhada/cPanel.
- Nao usar Node.js.
- Nao usar Next.js.
- Nao usar banco de dados.
- O formulario deve ser simples e compatovel com hospedagem compartilhada.
- Links de WhatsApp devem abrir em nova aba.

## Telas Necessarias

- Pagina inicial unica (`index.php`) com secoes:
  - Inicio.
  - Sobre.
  - Servicos.
  - Beneficios.
  - WhatsApp.
  - Contato.
  - Rodape.

## Banco de Dados

Nao ha banco de dados neste projeto.

## Integracoes

- WhatsApp por link `https://wa.me/`.
- Formulario simples via link `mailto:` gerado no navegador.

## Relatorios

Nao ha relatorios administrativos ou operacionais.

## Escalabilidade

Projeto de baixa complexidade, focado em apresentacao institucional. Pode evoluir futuramente para:

- Formulario com envio por PHP `mail()`.
- Integracao com CRM.
- Blog institucional.
- Paginas individuais por servico.
- Analytics e eventos de conversao.

## Observacoes

- Dados finais de telefone, WhatsApp e e-mail devem ser revisados antes da publicacao.
- O site deve permanecer simples para facilitar manutencao em cPanel.
