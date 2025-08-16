document.addEventListener('DOMContentLoaded', () => {
    const html = document.documentElement;

    // Определение начальной темы
    const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
    const saved = localStorage.theme;
    const startDark = saved ? saved === 'dark' : prefersDark;
    html.classList.toggle('dark', startDark);

    // Все кнопки (мобильная с id и десктопные с классом)
    const toggles = Array.from(document.querySelectorAll('#themeToggle, .js-theme-toggle'));

    function applyMode(dark) {
        html.classList.toggle('dark', dark);
        localStorage.theme = dark ? 'dark' : 'light';
        toggles.forEach(btn => btn.setAttribute('data-mode', dark ? 'dark' : 'light'));
    }

    toggles.forEach(btn => btn.setAttribute('data-mode', startDark ? 'dark' : 'light'));

    toggles.forEach(btn => {
        btn.addEventListener('click', () => {
            // Инвертируем: если сейчас dark -> идём в light, если light -> в dark
            const currentDark = html.classList.contains('dark');
            applyMode(!currentDark);
        });
    });
});