# Arquitetura - Site Code a Code

## Classificacao

Nivel 1 - Site Simples.

## Justificativa

O projeto e um site institucional de pagina unica para apresentar a Code a Code, listar servicos e gerar contatos. Nao ha area administrativa, banco de dados, login, painel interno, processamento complexo ou necessidade de infraestrutura dedicada.

## Tecnologias

- PHP 8+
- HTML5
- CSS3
- JavaScript

## Hospedagem

- Hospedagem compartilhada.
- cPanel.
- Publicacao em `public_html` ou pasta equivalente do dominio.

## Template Base

Template oficial:

```text
templates/site-simples-php
```

Estrutura adotada:

```text
projects/site-codeacode/site/
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

## Decisoes Tecnicas

- Site em pagina unica para reduzir custo e complexidade.
- PHP usado para organizar dados e reutilizar cabecalho/rodape.
- CSS proprio sem frameworks obrigatorios.
- JavaScript apenas para menu mobile e melhoria do formulario.
- Formulario sem banco de dados, usando `mailto:` para manter compatibilidade com hospedagem simples.
- WhatsApp via link direto `wa.me`.

## Restricoes

- Nao usar Node.js.
- Nao usar Next.js.
- Nao usar banco de dados.
- Nao depender de build step.
- Nao exigir VPS.

## Seguranca

- Saidas dinamicas com `htmlspecialchars`.
- Links externos com `target="_blank"` e `rel="noopener"`.
- Sem armazenamento de dados sensiveis.
- Sem credenciais no codigo.

## Escopo Inicial

- Criar pagina institucional completa.
- Criar documentacao do projeto.
- Executar QA.
- Criar orientacao de deploy em cPanel.
