<div class="container mx-auto">
  <div class="navbar bg-base-100 dark:bg-base-200 border-b border-base-200 dark:border-base-300 shadow-sm dark:shadow-lg transition-colors">
    <div class="navbar-start">
      <div class="dropdown">
        <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
          </svg>
        </div>
        <ul
          tabindex="0"
          class="menu menu-sm dropdown-content bg-base-100 dark:bg-base-200 rounded-box z-1 mt-3 w-52 p-2 shadow">
          <li><a>Главная</a></li>
          <li>
            <a>Услуги</a>
            <ul class="p-2">
              <li><a>Submenu 1</a></li>
              <li><a>Submenu 2</a></li>
            </ul>
          </li>
          <li><a>Камеры города</a></li>
        </ul>
      </div>
      <?php $view->components('header/logo'); ?>
    </div>
    <div class="navbar-center hidden lg:flex">
      <ul class="menu menu-horizontal px-1">
        <li><a>Главная</a></li>
        <li>
          <details>
            <summary>Услуги</summary>
            <ul class="p-2">
              <li><a>Submenu 1</a></li>
              <li><a>Submenu 2</a></li>
            </ul>
          </details>
        </li>
        <li><a>Камеры города</a></li>
      </ul>
    </div>
    <div class="navbar-end">
      <a class="btn">Кнопка</a>
    </div>
  </div>
</div>