# Template Site Simples PHP

Template Nivel 1 para landing pages, sites institucionais, paginas de servicos e pequenos negocios.

## Tecnologias

- PHP 8+
- HTML5
- CSS3
- JavaScript

## Estrutura

```text
+-- assets/
|   +-- css/
|   |   +-- style.css
|   +-- js/
|       +-- main.js
+-- includes/
|   +-- footer.php
|   +-- header.php
+-- index.php
+-- README.md
```

## Como usar

1. Copie os arquivos para a pasta do site na hospedagem, normalmente `public_html`.
2. Edite os textos, links e dados de contato em `index.php`.
3. Ajuste cores e espacamentos em `assets/css/style.css`.
4. Suba os arquivos via cPanel, FTP ou Git, conforme a hospedagem permitir.

## Desenvolvimento local

Com PHP instalado:

```bash
php -S localhost:8000
```

Depois acesse:

```text
http://localhost:8000
```

## Observacoes

- Este template nao usa banco de dados.
- Este template nao usa Node.js, Next.js ou build step.
- Nao ha `.env.example` porque nao existem variaveis de ambiente obrigatorias.
