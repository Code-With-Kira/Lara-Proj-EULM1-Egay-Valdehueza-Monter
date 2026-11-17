const menuToggle = document.querySelector('.menu-toggle');
const primaryNavigation = document.querySelector('.primary-nav');

if (menuToggle && primaryNavigation) {
    menuToggle.addEventListener('click', () => {
        const isExpanded = menuToggle.getAttribute('aria-expanded') === 'true';
        menuToggle.setAttribute('aria-expanded', String(!isExpanded));
        primaryNavigation.classList.toggle('is-open', !isExpanded);
    });

    primaryNavigation.addEventListener('click', (event) => {
        if (event.target instanceof HTMLAnchorElement && window.matchMedia('(max-width: 760px)').matches) {
            menuToggle.setAttribute('aria-expanded', 'false');
            primaryNavigation.classList.remove('is-open');
        }
    });
}
