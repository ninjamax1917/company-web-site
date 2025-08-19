<header class="bg-white dark:bg-gray-800 shadow-md sticky top-0 z-50 transition-colors duration-500">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex items-center justify-between gap-4">
    <!-- Лого -->
    <?php $view->components('header/logo'); ?>

    <!-- Навигационная панель для десктопов -->
    <nav class="hidden md:flex items-center gap-6">
      <a href="/main" class="text-gray-600 hover:text-blue-600 transition">Главная</a>

      <!-- Dropdown меню -->
      <div class="relative group">
        <button type="button" class="text-gray-600 hover:text-blue-600 transition flex items-center gap-1 group-hover:text-blue-600 focus:outline-none" aria-haspopup="true" aria-expanded="false">
          Услуги
          <svg class="w-4 h-4 text-gray-400 transition-transform duration-200 group-hover:rotate-[360deg] group-hover:text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
          </svg>
        </button>

  <div class="dropdown-panel opacity-0 transition-opacity duration-200 absolute left-0 mt-2 min-w-max max-w-xs bg-white dark:bg-gray-700 border rounded shadow-lg z-10 p-1">
          <a href="/cctv" class="hover-dark-bg flex items-center gap-2 px-4 py-2 rounded text-gray-700 hover:text-blue-700 hover:bg-gray-50">
            <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 -960 960 960" width="20" fill="currentColor" aria-hidden="true">
              <path d="M576-189q-22 26-54.5 29.5T463-178L294-319q-26-21-45-48t-31-58q-11 12-26 18.5t-32 6.5H80v-320h80q29 0 51.5 18t27.5 47q38-58 98-91.5T466-780q45 0 85.5 16t74.5 45l170 141q26 21 28.5 53.5T806-466L576-189ZM280-521q-1 41 16.5 77.5T345-381l169 141 230-277-169-141q-24-20-53-30.5T462-699q-75-1-128 51t-54 127Zm231 51Z" />
            </svg>
            Видеонаблюдение
          </a>
          <a href="/fire-alarm" class="hover-dark-bg flex items-center gap-2 px-4 py-2 rounded text-gray-700 hover:text-red-600 hover:bg-gray-50">
            <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 -960 960 960" width="20" fill="currentColor" aria-hidden="true">
              <path d="M200-160v-80h64l79-263q8-26 29.5-41.5T420-560h120q26 0 47.5 15.5T617-503l79 263h64v80H200Zm148-80h264l-72-240H420l-72 240Zm92-400v-200h80v200h-80Zm238 99-57-57 142-141 56 56-141 142Zm42 181v-80h200v80H720ZM282-541 141-683l56-56 142 141-57 57ZM40-360v-80h200v80H40Zm440 120Z" />
            </svg>
            Противопожарная автоматика
          </a>
          <a href="/networks" class="hover-dark-bg group/icon flex items-center gap-2 px-4 py-2 rounded text-gray-700 hover:text-blue-700 hover:bg-gray-50">
            <span class="relative inline-block w-6 h-6">
              <svg class="absolute inset-0 w-6 h-6 block group-hover/icon:hidden" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" fill="currentColor" aria-hidden="true">
                <path d="M480-120 0-600q96-98 220-149t260-51q137 0 261 51t219 149L480-120ZM232-482q53-38 116-59.5T480-563q69 0 132 21.5T728-482l116-116q-78-59-170.5-90.5T480-720q-101 0-193.5 31.5T116-598l116 116Z" />
              </svg>
              <svg class="absolute inset-0 w-6 h-6 hidden group-hover/icon:block" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" fill="currentColor" aria-hidden="true">
                <path d="M480-120 0-600q95-97 219.5-148.5T480-800q136 0 260.5 51.5T960-600L480-120Z" />
              </svg>
            </span>
            Связь | Сети | Wi‑Fi
          </a>
          <a href="/security-alarm" class="hover-dark-bg group/icon flex items-center gap-2 px-4 py-2 rounded text-gray-700 hover:text-blue-700 hover:bg-gray-50">
            <span class="relative inline-block w-6 h-6">
              <svg class="absolute inset-0 w-6 h-6 hidden group-hover/icon:block" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" fill="currentColor" aria-hidden="true">
                <path d="M480-80q-139-35-229.5-159.5T160-516v-244l320-120 320 120v244q0 152-90.5 276.5T480-80Zm0-84q97-30 162-118.5T718-480H480v-315l-240 90v207q0 7 2 18h238v316Z" />
              </svg>
              <svg class="absolute inset-0 w-6 h-6 block group-hover/icon:hidden" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" fill="currentColor" aria-hidden="true">
                <path d="M480-80q-139-35-229.5-159.5T160-516v-244l320-120 320 120v244q0 152-90.5 276.5T480-80Zm0-84q104-33 172-132t68-220v-189l-240-90-240 90v189q0 121 68 220t172 132Zm0-316Z" />
              </svg>
            </span>
            Охранная сигнализация
          </a>
          <a href="/project-design" class="hover-dark-bg flex items-center gap-2 px-4 py-2 rounded text-gray-700 hover:text-blue-700 hover:bg-gray-50">
            <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 -960 960 960" width="20" fill="currentColor" aria-hidden="true">
              <path d="M456-600h320q-27-69-82.5-118.5T566-788L456-600Zm-92 80 160-276q-11-2-22-3t-22-1q-66 0-123 25t-101 67l108 188ZM170-400h218L228-676q-32 41-50 90.5T160-480q0 21 2.5 40.5T170-400Zm224 228 108-188H184q27 69 82.5 118.5T394-172Zm86 12q66 0 123-25t101-67L596-440 436-164q11 2 21.5 3t22.5 1Zm252-124q32-41 50-90.5T800-480q0-21-2.5-40.5T790-560H572l160 276ZM480-480Zm0 400q-82 0-155-31.5t-127.5-86Q143-252 111.5-325T80-480q0-83 31.5-155.5t86-127Q252-817 325-848.5T480-880q83 0 155.5 31.5t127 86q54.5 54.5 86 127T880-480q0 82-31.5 155t-86 127.5q-54.5 54.5-127 86T480-80Z" />
            </svg>
            Проектирование
          </a>
          <a href="/electricity" class="hover-dark-bg flex items-center gap-2 px-4 py-2 rounded text-gray-700 hover:text-blue-700 hover:bg-gray-50">
            <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 -960 960 960" width="20" fill="currentColor" aria-hidden="true">
              <path d="M456-600h320q-27-69-82.5-118.5T566-788L456-600Zm-92 80 160-276q-11-2-22-3t-22-1q-66 0-123 25t-101 67l108 188ZM170-400h218L228-676q-32 41-50 90.5T160-480q0 21 2.5 40.5T170-400Zm224 228 108-188H184q27 69 82.5 118.5T394-172Zm86 12q66 0 123-25t101-67L596-440 436-164q11 2 21.5 3t22.5 1Zm252-124q32-41 50-90.5T800-480q0-21-2.5-40.5T790-560H572l160 276ZM480-480Zm0 400q-82 0-155-31.5t-127.5-86Q143-252 111.5-325T80-480q0-83 31.5-155.5t86-127Q252-817 325-848.5T480-880q83 0 155.5 31.5t127 86q54.5 54.5 86 127T880-480q0 82-31.5 155t-86 127.5q-54.5 54.5-127 86T480-80Z" />
            </svg>
            Электромонтажные работы
          </a>
        </div>
      </div>

      <a href="city-cctv" class="text-gray-600 hover:text-blue-600 transition">Камеры города</a>
    </nav>

    <!-- Кнопки для десктопов -->
    <?php $view->components('header/button_toggle_desktop'); ?>

    <!-- Mobile: burger -->
    <?php $view->components('header/burger_button'); ?>

  </div>

  <!-- Mobile menu panel -->
  <div id="mobileMenu" class="md:hidden hidden border-t bg-white dark:bg-gray-800 transition-colors duration-500">
    <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-3 flex flex-col gap-1">
  <a href="/" class="mobile-menu-item px-2 py-2 rounded text-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-700">Главная</a>

      <!-- Mobile: Services accordion with icons -->
      <div class="px-2">
  <button type="button" class="mobile-menu-item w-full flex items-center justify-between py-2 text-gray-700 hover:text-blue-600 dark:text-gray-200 dark:hover:text-blue-400 focus:outline-none" aria-expanded="false" data-accordion-btn>
          <span class="flex items-center gap-2">
            <span>Услуги</span>
          </span>
          <svg class="w-4 h-4 text-gray-400 transition-transform duration-200" viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true" data-accordion-icon>
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
          </svg>
        </button>
  <div class="dropdown-panel hidden flex-col pl-3 pb-2 gap-1" data-accordion-panel>
          <a href="/cctv" class="mobile-menu-item hover-dark-bg flex items-center gap-2 px-2 py-2 rounded text-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-700">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600 dark:text-gray-300" viewBox="0 -960 960 960" fill="currentColor" aria-hidden="true">
              <path d="M576-189q-22 26-54.5 29.5T463-178L294-319q-26-21-45-48t-31-58q-11 12-26 18.5t-32 6.5H80v-320h80q29 0 51.5 18t27.5 47q38-58 98-91.5T466-780q45 0 85.5 16t74.5 45l170 141q26 21 28.5 53.5T806-466L576-189ZM280-521q-1 41 16.5 77.5T345-381l169 141 230-277-169-141q-24-20-53-30.5T462-699q-75-1-128 51t-54 127Zm231 51Z" />
            </svg>
            Видеонаблюдение
          </a>
          <a href="/fire-alarm" class="mobile-menu-item hover-dark-bg flex items-center gap-2 px-2 py-2 rounded text-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-700 hover:text-red-600">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 -960 960 960" fill="currentColor" aria-hidden="true">
              <path d="M200-160v-80h64l79-263q8-26 29.5-41.5T420-560h120q26 0 47.5 15.5T617-503l79 263h64v80H200Zm148-80h264l-72-240H420l-72 240Zm92-400v-200h80v200h-80Zm238 99-57-57 142-141 56 56-141 142Zm42 181v-80h200v80H720ZM282-541 141-683l56-56 142 141-57 57ZM40-360v-80h200v80H40Zm440 120Z" />
            </svg>
            Противопожарная автоматика
          </a>
          <a href="/networks" class="mobile-menu-item hover-dark-bg flex items-center gap-2 px-2 py-2 rounded text-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-700">
            <svg class="w-5 h-5 text-gray-600 dark:text-gray-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" fill="currentColor" aria-hidden="true">
              <path d="M480-120 0-600q96-98 220-149t260-51q137 0 261 51t219 149L480-120ZM232-482q53-38 116-59.5T480-563q69 0 132 21.5T728-482l116-116q-78-59-170.5-90.5T480-720q-101 0-193.5 31.5T116-598l116 116Z" />
            </svg>
            Связь | Сети | Wi‑Fi
          </a>
          <a href="/security-alarm" class="mobile-menu-item hover-dark-bg flex items-center gap-2 px-2 py-2 rounded text-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-700">
            <svg class="w-5 h-5 text-gray-600 dark:text-gray-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" fill="currentColor" aria-hidden="true">
              <path d="M480-80q-139-35-229.5-159.5T160-516v-244l320-120 320 120v244q0 152-90.5 276.5T480-80Zm0-84q104-33 172-132t68-220v-189l-240-90-240 90v189q0 121 68 220t172 132Zm0-316Z" />
            </svg>
            Охранная сигнализация
          </a>
          <a href="/project-design" class="mobile-menu-item hover-dark-bg flex items-center gap-2 px-2 py-2 rounded text-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-700">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600 dark:text-gray-300" viewBox="0 -960 960 960" fill="currentColor" aria-hidden="true">
              <path d="M456-600h320q-27-69-82.5-118.5T566-788L456-600Zm-92 80 160-276q-11-2-22-3t-22-1q-66 0-123 25t-101 67l108 188ZM170-400h218L228-676q-32 41-50 90.5T160-480q0 21 2.5 40.5T170-400Zm224 228 108-188H184q27 69 82.5 118.5T394-172Zm86 12q66 0 123-25t101-67L596-440 436-164q11 2 21.5 3t22.5 1Zm252-124q32-41 50-90.5T800-480q0-21-2.5-40.5T790-560H572l160 276ZM480-480Zm0 400q-82 0-155-31.5t-127.5-86Q143-252 111.5-325T80-480q0-83 31.5-155.5t86-127Q252-817 325-848.5T480-880q83 0 155.5 31.5t127 86q54.5 54.5 86 127T880-480q0 82-31.5 155t-86 127.5q-54.5 54.5-127 86T480-80Z" />
            </svg>
            Проектирование
          </a>
          <a href="/electricity" class="mobile-menu-item hover-dark-bg flex items-center gap-2 px-2 py-2 rounded text-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-700">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600 dark:text-gray-300" viewBox="0 -960 960 960" fill="currentColor" aria-hidden="true">
              <path d="M456-600h320q-27-69-82.5-118.5T566-788L456-600Zm-92 80 160-276q-11-2-22-3t-22-1q-66 0-123 25t-101 67l108 188ZM170-400h218L228-676q-32 41-50 90.5T160-480q0 21 2.5 40.5T170-400Zm224 228 108-188H184q27 69 82.5 118.5T394-172Zm86 12q66 0 123-25t101-67L596-440 436-164q11 2 21.5 3t22.5 1Zm252-124q32-41 50-90.5T800-480q0-21-2.5-40.5T790-560H572l160 276ZM480-480Zm0 400q-82 0-155-31.5t-127.5-86Q143-252 111.5-325T80-480q0-83 31.5-155.5t86-127Q252-817 325-848.5T480-880q83 0 155.5 31.5t127 86q54.5 54.5 86 127T880-480q0 82-31.5 155t-86 127.5q-54.5 54.5-127 86T480-80Z" />
            </svg>
            Электромонтажные работы
          </a>
        </div>
      </div>

  <a href="/city-cctv" class="mobile-menu-item px-2 py-2 rounded text-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-700">Камеры города</a>

      <!-- Кнопки для мобильных устройств -->

      <?php $view->components('header/button_toggle_mobile'); ?>

    </nav>
  </div>
</header>

<script src="/assets/js/pages/components/header/header.js"></script>
<script src="/assets/js/pages/components/header/button_toggle.js"></script>