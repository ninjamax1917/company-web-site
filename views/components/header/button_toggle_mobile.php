<div class="pt-2 px-2 flex flex-row gap-3 items-center justify-between">
    <!-- Унифицированный переключатель темы (мобильный) -->
    <button id="themeToggle" aria-label="Переключить тему"
        class="mobile-action-btn js-theme-toggle relative w-20 h-10 flex items-center px-2 rounded-full transition-colors duration-500 focus:outline-none gap-2 select-none overflow-hidden shadow-inner">
        <span class="icon-moon flex items-center justify-center w-6 h-6 text-gray-600 dark:text-gray-200">
            <svg class="w-5 h-5 pointer-events-none" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-width="2" d="M21 12.79A9 9 0 1111.21 3a7 7 0 109.79 9.79z" />
            </svg>
        </span>
    <span class="icon-sun flex items-center justify-center w-6 h-6 text-yellow-500">
            <svg class="w-5 h-5 pointer-events-none" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <circle cx="12" cy="12" r="5" stroke-width="2" />
                <path stroke-width="2" d="M12 1v2M12 21v2M4.22 4.22l1.42 1.42M18.36 18.36l1.42 1.42M1 12h2M21 12h2M4.22 19.78l1.42-1.42M18.36 5.64l1.42-1.42" />
            </svg>
        </span>
    <span class="theme-pill absolute top-1 left-1 w-8 h-8 rounded-full bg-gray-200 border border-gray-300 dark:bg-gray-200 dark:border-gray-400 shadow"></span>
        <span class="theme-active-glow pointer-events-none absolute inset-0 rounded-full"></span>
    </button>
    <!--Кнопка входа-->
    <button class="mobile-action-btn shrink-0 bg-blue-600 text-white px-4 py-2 rounded-full shadow font-medium hover:bg-green-700 transition-colors duration-200 focus:outline-none">
        Вход в личный кабинет
    </button>
</div>