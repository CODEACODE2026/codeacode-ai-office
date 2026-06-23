const menuButton = document.querySelector('.menu-toggle');
const siteMenu = document.querySelector('#site-menu');

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
