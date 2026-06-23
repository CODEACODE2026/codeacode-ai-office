<?php
$site = [
    'name' => 'Nome da Empresa',
    'phone' => '(11) 99999-9999',
    'email' => 'contato@empresa.com.br',
    'whatsapp' => '5511999999999',
];

$services = [
    [
        'title' => 'Servico principal',
        'description' => 'Explique de forma direta o principal servico oferecido pela empresa.',
    ],
    [
        'title' => 'Atendimento especializado',
        'description' => 'Mostre o diferencial no atendimento, prazo ou suporte ao cliente.',
    ],
    [
        'title' => 'Orcamento rapido',
        'description' => 'Convide o visitante a entrar em contato para receber uma proposta.',
    ],
];

$pageTitle = $site['name'] . ' - Site Institucional';
include __DIR__ . '/includes/header.php';
?>

<main>
    <section class="hero" id="inicio">
        <div class="container hero__grid">
            <div class="hero__content">
                <p class="eyebrow">Atendimento profissional</p>
                <h1>Solucoes simples para apresentar sua empresa na internet.</h1>
                <p class="hero__text">
                    Use este espaco para resumir a promessa principal do negocio, o publico atendido
                    e o motivo para o cliente entrar em contato.
                </p>
                <div class="hero__actions">
                    <a class="button button--primary" href="https://wa.me/<?php echo htmlspecialchars($site['whatsapp']); ?>" target="_blank" rel="noopener">
                        Chamar no WhatsApp
                    </a>
                    <a class="button button--secondary" href="#servicos">Ver servicos</a>
                </div>
            </div>
            <div class="hero__card" aria-label="Resumo de atendimento">
                <strong>Pronto para personalizar</strong>
                <span>Troque textos, cores, telefone e servicos em poucos minutos.</span>
            </div>
        </div>
    </section>

    <section class="section" id="sobre">
        <div class="container split">
            <div>
                <p class="eyebrow">Sobre</p>
                <h2>Uma base limpa para sites simples.</h2>
            </div>
            <p>
                Este template foi criado para hospedagem compartilhada e cPanel. Ele usa PHP apenas
                para organizar dados e reutilizar cabecalho e rodape, sem dependencias complexas.
            </p>
        </div>
    </section>

    <section class="section section--muted" id="servicos">
        <div class="container">
            <div class="section__header">
                <p class="eyebrow">Servicos</p>
                <h2>O que a empresa oferece</h2>
            </div>
            <div class="cards">
                <?php foreach ($services as $service): ?>
                    <article class="card">
                        <h3><?php echo htmlspecialchars($service['title']); ?></h3>
                        <p><?php echo htmlspecialchars($service['description']); ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="section" id="contato">
        <div class="container contact">
            <div>
                <p class="eyebrow">Contato</p>
                <h2>Fale com a equipe</h2>
                <p>Adapte estes dados para telefone, WhatsApp, endereco ou horario de atendimento.</p>
            </div>
            <div class="contact__box">
                <a href="tel:<?php echo preg_replace('/\D+/', '', $site['phone']); ?>">
                    <?php echo htmlspecialchars($site['phone']); ?>
                </a>
                <a href="mailto:<?php echo htmlspecialchars($site['email']); ?>">
                    <?php echo htmlspecialchars($site['email']); ?>
                </a>
                <a href="https://wa.me/<?php echo htmlspecialchars($site['whatsapp']); ?>" target="_blank" rel="noopener">
                    WhatsApp
                </a>
            </div>
        </div>
    </section>
</main>

<?php include __DIR__ . '/includes/footer.php'; ?>
