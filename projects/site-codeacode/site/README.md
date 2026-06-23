# Site Code a Code

Site institucional Nivel 1 da Code a Code.

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
+-- .env.example
+-- index.php
+-- README.md
```

## Desenvolvimento local

Com PHP instalado:

```bash
php -S localhost:8000
```

Acesse:

```text
http://localhost:8000
```

## Publicacao

Copie o conteudo desta pasta para `public_html` ou para a pasta configurada no dominio dentro do cPanel.

## Observacoes

- Nao usa banco de dados.
- Nao usa Node.js.
- Nao usa Next.js.
- Nao exige build step.
- Possui `.env.example` apenas para indicar que nao existem variaveis obrigatorias.
- Atualize telefone, WhatsApp e e-mail em `index.php` antes da publicacao.
