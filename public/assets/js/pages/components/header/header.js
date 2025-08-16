document.addEventListener('DOMContentLoaded', () => {
    
// Burger toggle
const burgerBtn = document.getElementById('burgerBtn');
const mobileMenu = document.getElementById('mobileMenu');
const iconOpen = document.getElementById('iconOpen');
const iconClose = document.getElementById('iconClose');

burgerBtn?.addEventListener('click', () => {
    const isOpen = mobileMenu.classList.toggle('hidden') === false;
    iconOpen.classList.toggle('hidden', isOpen);
    iconClose.classList.toggle('hidden', !isOpen);
    burgerBtn.setAttribute('aria-expanded', String(isOpen));
});

// Accordion for "Услуги" in mobile
document.querySelectorAll('[data-accordion-btn]').forEach((btn) => {
    btn.addEventListener('click', () => {
        const panel = btn.parentElement.querySelector('[data-accordion-panel]');
        const icon = btn.querySelector('[data-accordion-icon]');
    const isOpen = panel.classList.toggle('hidden') === false;
    panel.classList.toggle('panel-flex', isOpen);
        btn.setAttribute('aria-expanded', String(isOpen));
        if (icon) {
            icon.style.transform = isOpen ? 'rotate(180deg)' : 'rotate(0deg)';
        }
    });
});

//Закрытие dropdown меню с задержкой

    const dropdownGroup = document.querySelector('.group');
    const dropdownMenu = dropdownGroup?.querySelector('div.absolute');
    let hideTimeout;

    if (dropdownGroup && dropdownMenu) {
        dropdownGroup.addEventListener('mouseenter', () => {
            clearTimeout(hideTimeout);
            dropdownMenu.classList.remove('opacity-0', 'pointer-events-none');
            dropdownMenu.classList.add('opacity-100', 'pointer-events-auto');
        });

        dropdownGroup.addEventListener('mouseleave', () => {
            hideTimeout = setTimeout(() => {
                dropdownMenu.classList.add('opacity-0', 'pointer-events-none');
                dropdownMenu.classList.remove('opacity-100', 'pointer-events-auto');
            }, 200);
        });
    }
});