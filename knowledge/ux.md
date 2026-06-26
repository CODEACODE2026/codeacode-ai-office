# UX Knowledge

## Objetivo
Orientar experiencia do usuario em projetos da Code a Code.

UX deve vir antes da direcao visual e antes do DEV em projetos web.

## Principios
- O usuario deve entender a proxima acao sem explicacao externa.
- Fluxos principais devem ser curtos e previsiveis.
- A interface deve reduzir erro humano.
- Estados do sistema devem ser visiveis.
- A experiencia deve respeitar o contexto real de uso.
- Projeto operacional deve priorizar eficiencia, nao efeito decorativo.

## Perguntas iniciais
Antes de planejar uma tela, responder:
- Quem usa?
- Qual tarefa precisa concluir?
- Qual informacao precisa antes de agir?
- Qual erro pode acontecer?
- O que deve ser confirmado?
- O que pode ser automatizado sem risco?
- O que precisa ficar sempre visivel?

## Jornada
Toda jornada importante deve indicar:
- ponto de entrada;
- acao principal;
- dados necessarios;
- decisoes do usuario;
- estados de erro;
- saida esperada;
- proximo passo natural.

## Fluxos criticos
Fluxos criticos exigem mais cuidado:
- login;
- cadastro essencial;
- pagamento;
- exclusao;
- cancelamento;
- permissao;
- importacao;
- deploy;
- configuracao sensivel.

## Friccoes a evitar
- formulario longo sem agrupamento;
- mensagem de erro vaga;
- botao destrutivo sem confirmacao;
- estado carregando sem feedback;
- lista vazia sem orientacao;
- campo obrigatorio sem indicacao;
- navegacao que muda contexto sem aviso.

## Estados de experiencia
Toda tela com interacao deve prever:
- inicio;
- carregando;
- vazio;
- erro;
- sucesso;
- bloqueado por permissao;
- confirmacao;
- recuperacao apos falha.

## UX em sistemas operacionais
Para PDV, ERP, CRM e dashboards:
- reduzir cliques;
- manter acoes frequentes proximas;
- evitar layout decorativo;
- usar densidade adequada;
- proteger acoes irreversiveis;
- favorecer leitura rapida.

## Aprovacao
Antes do DEV em projeto web, deve existir:
- jornada principal definida;
- telas prioritarias mapeadas;
- estados criticos previstos;
- riscos de usabilidade registrados;
- aprovacao visual do usuario quando aplicavel.

## Codex
Codex nao deve decidir UX sozinho.

Quando Codex for executar tela, entregar:
- objetivo da tela;
- fluxo aprovado;
- estados obrigatorios;
- restricoes de layout;
- criterio de aceite.

