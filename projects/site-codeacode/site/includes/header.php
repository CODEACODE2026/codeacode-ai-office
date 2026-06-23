<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Site oficial da Code a Code. Desenvolvimento de sites, sistemas web, automacao com IA, integracao WhatsApp, APIs e suporte em tecnologia.">
    <title><?php echo htmlspecialchars($pageTitle ?? 'Code a Code'); ?></title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header class="site-header">
        <div class="container site-header__inner">
            <a class="brand" href="#inicio" aria-label="Ir para o inicio">
                <?php echo htmlspecialchars($site['name'] ?? 'Code a Code'); ?>
            </a>
            <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="site-menu">
                Menu
            </button>
            <nav class="site-nav" id="site-menu" aria-label="Menu principal">
                <a href="#sobre">Sobre</a>
                <a href="#servicos">Servicos</a>
                <a href="#beneficios">Beneficios</a>
                <a href="#whatsapp">WhatsApp</a>
                <a href="#contato">Contato</a>
            </nav>
        </div>
    </header>
