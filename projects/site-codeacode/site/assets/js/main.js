const menuButton = document.querySelector('.menu-toggle');
const siteMenu = document.querySelector('#site-menu');
const contactForm = document.querySelector('#contact-form');

if (menuButton && siteMenu) {
    menuButton.addEventListener('click', () => {
        const isOpen = siteMenu.classList.toggle('is-open');
        menuButton.setAttribute('aria-expanded', String(isOpen));
    });

    siteMenu.querySelectorAll('a').forEach((link) => {
        link.addEventListener('click', () => {
            siteMenu.classList.remove('is-open');
            menuButton.setAttribute('aria-expanded', 'false');
        });
    });
}

if (contactForm) {
    contactForm.addEventListener('submit', () => {
        const button = contactForm.querySelector('button[type="submit"]');

        if (button) {
            button.textContent = 'Abrindo e-mail...';
        }
    });
}
