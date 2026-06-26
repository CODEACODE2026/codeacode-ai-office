# Buttons

## Objetivo
Botoes executam comandos claros. Eles devem indicar acao, prioridade e estado.

## Quando utilizar
Use botoes para:
- salvar;
- confirmar;
- cancelar;
- excluir;
- enviar;
- abrir modal;
- iniciar fluxo;
- executar acao principal.

## Quando evitar
Evite botao quando:
- o elemento for apenas navegacao simples;
- a acao nao estiver clara;
- um icone com tooltip resolver melhor;
- houver muitos comandos concorrentes sem hierarquia.

## Variacoes recomendadas
- Primario: acao principal da tela.
- Secundario: acao alternativa.
- Fantasma: acao leve.
- Destrutivo: exclusao, cancelamento ou risco.
- Icone: ferramenta compacta.
- Loading: acao em processamento.

## Boas praticas de UX
- Um fluxo deve ter uma acao primaria evidente.
- Botoes destrutivos exigem confirmacao.
- Texto deve ser verbo direto.
- Evitar muitos botoes primarios na mesma area.
- Acoes frequentes devem ficar proximas do fluxo.

## Boas praticas de UI
- Manter altura consistente.
- Garantir contraste.
- Usar espacamento interno suficiente.
- Evitar texto quebrado em varias linhas.
- Usar estado visual para hover, focus e disabled.
- Botoes em grupos devem ter alinhamento claro.

## Acessibilidade basica
- Deve ser acionavel por teclado.
- Deve ter foco visivel.
- Icone sem texto precisa de label acessivel.
- Estado disabled deve ser perceptivel alem da cor.

## Erros comuns
- Botao principal pouco visivel.
- Texto generico como "OK" sem contexto.
- Botao destrutivo perto demais do primario.
- Loading sem feedback.
- Botao sobrepondo outro elemento.

## Checklist
- acao esta clara?
- prioridade esta correta?
- estado loading existe?
- foco e hover existem?
- texto cabe no mobile?
- acao critica pede confirmacao?

## Reutilizacao pelos agentes
UX Lead define prioridade. Diretor Criativo UI define estilo. DEV implementa estados. UI Reviewer valida consistencia. QA valida comportamento.

