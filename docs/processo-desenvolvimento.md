# Processo de Desenvolvimento - Code a Code

## Níveis de Projeto

### Nível 1 - Site Simples
Usar para landing pages, sites institucionais, páginas de serviços, assistência técnica e pequenos negócios.

Tecnologias padrão:
- PHP 8+
- HTML5
- CSS3
- JavaScript
- MySQL quando necessário

Hospedagem:
- Hospedagem compartilhada
- cPanel

Regra:
Nunca usar Next.js, Node.js ou estrutura complexa quando PHP simples resolver.

---

### Nível 2 - Sistema Web
Usar para painéis administrativos, ordem de serviço, CRM, controle de clientes e sistemas internos.

Tecnologias:
- Node.js
- Express
- TypeScript
- MySQL

Hospedagem:
- VPS

---

### Nível 3 - Plataforma SaaS
Usar para sistemas multi-tenant, IA, WhatsApp, WebSocket e produtos escaláveis.

Tecnologias:
- Next.js
- Node.js
- TypeScript
- MySQL
- Redis
- WebSocket

Hospedagem:
- VPS ou cloud

## Regras obrigatórias

- Sempre identificar o nível do projeto antes de desenvolver.
- Sempre criar README.md.
- Sempre criar .env.example quando houver variáveis.
- Sempre documentar instalação.
- Sempre usar Git.
- Sempre explicar alterações feitas.
- Evitar complexidade desnecessária.
