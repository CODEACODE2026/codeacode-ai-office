<?php
$site = [
    'name' => 'Code a Code',
    'phone' => '(00) 00000-0000',
    'email' => 'contato@codeacode.com.br',
    'whatsapp' => '5500000000000',
    'tagline' => 'Tecnologia simples para empresas que querem vender, atender e operar melhor.',
];

$services = [
    [
        'title' => 'Desenvolvimento de sites',
        'description' => 'Sites institucionais, paginas de servicos e landing pages responsivas para apresentar sua empresa com clareza.',
    ],
    [
        'title' => 'Sistemas web',
        'description' => 'Solucoes sob medida para organizar processos, cadastros, atendimentos e rotinas internas.',
    ],
    [
        'title' => 'Automacao com IA',
        'description' => 'Automacoes para reduzir tarefas repetitivas, apoiar atendimento e acelerar fluxos operacionais.',
    ],
    [
        'title' => 'Integracao WhatsApp',
        'description' => 'Conexoes para melhorar o contato com clientes, organizar mensagens e facilitar a entrada de novos pedidos.',
    ],
    [
        'title' => 'APIs',
        'description' => 'Criacao e integracao de APIs para conectar sistemas, ferramentas e servicos digitais.',
    ],
    [
        'title' => 'Suporte e manutencao',
        'description' => 'Acompanhamento tecnico para manter sites, sistemas e integracoes funcionando com estabilidade.',
    ],
];

$benefits = [
    'Solucoes adequadas ao tamanho e momento do negocio.',
    'Tecnologia objetiva, sem complexidade desnecessaria.',
    'Projetos pensados para manutencao e evolucao.',
    'Atendimento direto para entender o problema antes de propor a solucao.',
];

$pageTitle = $site['name'] . ' - Sites, sistemas e automacao com IA';
include __DIR__ . '/includes/header.php';
?>

<main>
    <section class="hero" id="inicio">
        <div class="container hero__grid">
            <div class="hero__content">
                <p class="eyebrow">Sites, sistemas e automacao</p>
                <h1>A Code a Code cria tecnologia para sua empresa funcionar melhor.</h1>
                <p class="hero__text">
                    Desenvolvemos sites, sistemas web, automacoes com IA, integracoes com WhatsApp,
                    APIs e suporte tecnico para negocios que precisam de solucao pratica e confiavel.
                </p>
                <div class="hero__actions">
                    <a class="button button--primary" href="https://wa.me/<?php echo htmlspecialchars($site['whatsapp']); ?>?text=Ola%2C%20quero%20falar%20com%20a%20Code%20a%20Code" target="_blank" rel="noopener">
                        Chamar no WhatsApp
                    </a>
                    <a class="button button--secondary" href="#servicos">Ver servicos</a>
                </div>
            </div>
            <div class="hero__panel" aria-label="Resumo da Code a Code">
                <strong>Code a Code</strong>
                <span><?php echo htmlspecialchars($site['tagline']); ?></span>
                <ul>
                    <li>Sites institucionais</li>
                    <li>Sistemas web</li>
                    <li>Automacao e integracoes</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="section" id="sobre">
        <div class="container split">
            <div>
                <p class="eyebrow">Sobre</p>
                <h2>Uma empresa de tecnologia focada em solucao real.</h2>
            </div>
            <div class="content-stack">
                <p>
                    A Code a Code ajuda empresas a transformar necessidades do dia a dia em solucoes digitais simples,
                    bem organizadas e prontas para uso.
                </p>
                <p>
                    O foco e entender o problema, escolher a tecnologia adequada e entregar projetos que possam crescer
                    sem exigir uma estrutura desnecessariamente complexa.
                </p>
            </div>
        </div>
    </section>

    <section class="section section--muted" id="servicos">
        <div class="container">
            <div class="section__header">
                <p class="eyebrow">Servicos</p>
                <h2>Como podemos ajudar</h2>
                <p>Atuamos do primeiro site da empresa ate sistemas e automacoes para melhorar processos internos.</p>
            </div>
            <div class="cards cards--services">
                <?php foreach ($services as $service): ?>
                    <article class="card">
                        <h3><?php echo htmlspecialchars($service['title']); ?></h3>
                        <p><?php echo htmlspecialchars($service['description']); ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="section" id="beneficios">
        <div class="container benefits">
            <div>
                <p class="eyebrow">Beneficios</p>
                <h2>Tecnologia com menos atrito e mais resultado.</h2>
                <p>
                    Priorizamos escopo claro, implementacao direta e manutencao viavel para que a solucao continue util depois da entrega.
                </p>
            </div>
            <div class="benefits__list">
                <?php foreach ($benefits as $benefit): ?>
                    <div class="benefit"><?php echo htmlspecialchars($benefit); ?></div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="section cta" id="whatsapp">
        <div class="container cta__inner">
            <div>
                <p class="eyebrow">Atendimento</p>
                <h2>Quer tirar uma ideia do papel ou melhorar um processo?</h2>
                <p>Fale com a Code a Code pelo WhatsApp e conte o que sua empresa precisa resolver.</p>
            </div>
            <a class="button button--light" href="https://wa.me/<?php echo htmlspecialchars($site['whatsapp']); ?>?text=Ola%2C%20quero%20solicitar%20um%20orcamento" target="_blank" rel="noopener">
                Solicitar orcamento
            </a>
        </div>
    </section>

    <section class="section" id="contato">
        <div class="container contact">
            <div>
                <p class="eyebrow">Contato</p>
                <h2>Envie uma mensagem</h2>
                <p>
                    Use o formulario para preparar uma mensagem por e-mail ou chame diretamente no WhatsApp.
                </p>
                <div class="contact__links">
                    <a href="mailto:<?php echo htmlspecialchars($site['email']); ?>"><?php echo htmlspecialchars($site['email']); ?></a>
                    <a href="tel:<?php echo preg_replace('/\D+/', '', $site['phone']); ?>"><?php echo htmlspecialchars($site['phone']); ?></a>
                </div>
            </div>
            <form class="contact-form" id="contact-form" action="mailto:<?php echo htmlspecialchars($site['email']); ?>" method="post" enctype="text/plain">
                <label>
                    Nome
                    <input type="text" name="nome" autocomplete="name" required>
                </label>
                <label>
                    E-mail
                    <input type="email" name="email" autocomplete="email" required>
                </label>
                <label>
                    Mensagem
                    <textarea name="mensagem" rows="5" required></textarea>
                </label>
                <button class="button button--primary" type="submit">Enviar contato</button>
                <p class="form-note">O envio abrira o aplicativo de e-mail configurado no dispositivo.</p>
            </form>
        </div>
    </section>
</main>

<?php include __DIR__ . '/includes/footer.php'; ?>
