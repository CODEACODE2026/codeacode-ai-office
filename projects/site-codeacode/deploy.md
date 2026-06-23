# Deploy - Site Code a Code

## Ambiente Necessario

- Hospedagem compartilhada com cPanel.
- PHP 8 ou superior.
- Acesso ao Gerenciador de Arquivos, FTP ou Git da hospedagem.
- Dominio apontado para a hospedagem.

## Arquivos de Publicacao

Publicar o conteudo da pasta:

```text
projects/site-codeacode/site/
```

Destino comum no cPanel:

```text
public_html/
```

## Passo a Passo no cPanel

1. Acessar o cPanel da hospedagem.
2. Abrir o Gerenciador de Arquivos.
3. Entrar em `public_html` ou na pasta configurada para o dominio.
4. Enviar os arquivos e pastas de `projects/site-codeacode/site/`.
5. Confirmar que `index.php` esta na raiz publica do site.
6. Confirmar que as pastas `assets/` e `includes/` foram enviadas.
7. Atualizar telefone, WhatsApp e e-mail em `index.php`, se necessario.

## Permissoes

Permissoes recomendadas:

```text
Pastas: 755
Arquivos: 644
```

## Configuracao de Dominio

- Apontar o dominio ou subdominio para a hospedagem.
- No cPanel, confirmar que o document root aponta para `public_html` ou pasta equivalente.
- Ativar SSL pelo recurso AutoSSL ou SSL/TLS do cPanel.

## Nginx

Nao aplicavel para este projeto.

Motivo: o projeto e Nivel 1 e deve rodar em hospedagem compartilhada/cPanel, normalmente com Apache ou LiteSpeed gerenciado pela hospedagem.

## PM2

Nao aplicavel para este projeto.

Motivo: o site nao usa Node.js e nao possui processo persistente.

## Banco de Dados

Nao aplicavel. O projeto nao usa banco de dados.

## Testes Pos-Deploy

Executar apos publicar:

- Acessar a pagina inicial pelo dominio.
- Conferir se o CSS carregou corretamente.
- Conferir se o menu mobile abre e fecha.
- Conferir secoes:
  - Inicio.
  - Sobre.
  - Servicos.
  - Beneficios.
  - WhatsApp.
  - Contato.
  - Rodape.
- Clicar nos botoes de WhatsApp e validar se abrem o link correto.
- Preencher o formulario e validar se o aplicativo de e-mail abre.
- Testar em celular e desktop.
- Confirmar que o site abre em HTTPS.

## Logs

Em hospedagem compartilhada, os logs geralmente ficam no cPanel em:

- Metrics > Errors.
- Arquivo `error_log` na pasta publica, quando gerado pela hospedagem.

Verificar os logs caso a pagina carregue em branco ou retorne erro 500.

## Rollback

1. Antes de substituir arquivos em producao, baixar uma copia da versao atual.
2. Se houver falha apos o deploy, remover os arquivos novos.
3. Restaurar a copia anterior no `public_html`.
4. Limpar cache da hospedagem, se existir.
5. Testar novamente o dominio.

## Checklist Final

- [ ] Dados de contato revisados.
- [ ] `index.php` publicado na raiz correta.
- [ ] Assets carregando.
- [ ] WhatsApp validado.
- [ ] Formulario validado.
- [ ] HTTPS ativo.
- [ ] Erros do cPanel verificados.
