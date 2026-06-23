# Template Sistema Node

Template Nivel 2 para sistemas web com Node.js, Express, TypeScript e MySQL.

Use este template para paineis administrativos, ordem de servico, CRM, controle de clientes e sistemas internos que serao hospedados em VPS.

## Classificacao

- Nivel: 2 - Sistema Web
- Hospedagem indicada: VPS
- Banco de dados: MySQL
- API: Express
- Linguagem: TypeScript

## Tecnologias

- Node.js
- Express
- TypeScript
- MySQL
- mysql2
- dotenv

## Estrutura

```text
+-- src/
|   +-- config/
|   |   +-- env.ts
|   +-- controllers/
|   |   +-- health.controller.ts
|   +-- database/
|   |   +-- mysql.ts
|   +-- middlewares/
|   |   +-- error.middleware.ts
|   +-- routes/
|   |   +-- health.routes.ts
|   +-- services/
|   |   +-- health.service.ts
|   +-- app.ts
|   +-- server.ts
+-- .env.example
+-- package.json
+-- README.md
+-- tsconfig.json
```

## Responsabilidade das pastas

- `src/config`: configuracoes da aplicacao e leitura de variaveis de ambiente.
- `src/routes`: definicao das rotas HTTP.
- `src/controllers`: entrada das requisicoes e resposta HTTP.
- `src/services`: regras de negocio e casos de uso.
- `src/middlewares`: middlewares globais do Express.
- `src/database`: conexao com MySQL e utilitarios de banco.

## Requisitos

- Node.js 20 ou superior.
- MySQL 8 ou superior.
- npm instalado.

## Instalacao

1. Instale as dependencias:

```bash
npm install
```

2. Crie o arquivo `.env` com base no exemplo:

```bash
cp .env.example .env
```

3. Ajuste os dados do banco de dados no arquivo `.env`.

4. Inicie o servidor em desenvolvimento:

```bash
npm run dev
```

Depois acesse:

```text
http://localhost:3000
```

## Variaveis de ambiente

```text
NODE_ENV=development
PORT=3000

DB_HOST=localhost
DB_PORT=3306
DB_USER=root
DB_PASSWORD=
DB_NAME=sistema_node
DB_CONNECTION_LIMIT=10
```

Descricao:

- `NODE_ENV`: ambiente da aplicacao. Exemplo: `development` ou `production`.
- `PORT`: porta HTTP usada pelo Express.
- `DB_HOST`: endereco do servidor MySQL.
- `DB_PORT`: porta do MySQL.
- `DB_USER`: usuario do MySQL.
- `DB_PASSWORD`: senha do MySQL.
- `DB_NAME`: nome do banco de dados.
- `DB_CONNECTION_LIMIT`: limite de conexoes no pool MySQL.

## Rotas

### GET /health

Verifica se a aplicacao esta respondendo.

Exemplo de resposta:

```json
{
  "status": "ok",
  "environment": "development",
  "uptime": 12.34,
  "timestamp": "2026-06-23T00:00:00.000Z"
}
```

## Scripts

```bash
npm run dev
```

Inicia o servidor em modo desenvolvimento com reload automatico.

```bash
npm run build
```

Compila TypeScript para JavaScript na pasta `dist`.

```bash
npm start
```

Executa a versao compilada da aplicacao.

```bash
npm run typecheck
```

Executa a validacao de tipos sem gerar arquivos.

## Banco de dados

A conexao MySQL fica em `src/database/mysql.ts` e usa `mysql2/promise`.

O template exporta:

- `pool`: pool de conexoes para consultas.
- `checkDatabaseConnection`: funcao utilitaria para validar a conexao.

Exemplo de uso em um service:

```ts
import { pool } from '../database/mysql';

export const listarClientes = async () => {
  const [rows] = await pool.query('SELECT * FROM clientes');
  return rows;
};
```

## Build e producao

1. Instale dependencias:

```bash
npm install
```

2. Configure `.env` com dados reais da VPS.

3. Compile o projeto:

```bash
npm run build
```

4. Execute:

```bash
npm start
```

Em producao, use um gerenciador de processos como PM2 ou systemd para manter a aplicacao ativa.

## Padrao recomendado para novas funcionalidades

Para cada modulo do sistema:

1. Crie a rota em `src/routes`.
2. Crie o controller em `src/controllers`.
3. Crie a regra de negocio em `src/services`.
4. Use `src/database/mysql.ts` para acessar o MySQL.
5. Registre a rota em `src/app.ts`.

## Observacoes

- Este template nao usa Next.js.
- Este template nao inclui Redis ou WebSocket, pois estes recursos sao caracteristicos de projetos Nivel 3.
- A estrutura e intencionalmente simples para sistemas internos e administrativos.
