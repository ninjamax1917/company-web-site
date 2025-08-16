<?php /** layout всей системы. Переменная $content содержит HTML страницы */ ?>
<!DOCTYPE html>
<html lang="ru" class="h-full">
<?php include_once __DIR__.'/../components/head/head.php'; ?>
<body class="h-full antialiased">
	<?php include_once __DIR__.'/../components/header/header.php'; ?>
	<main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
		<?= $content ?>
	</main>
	<?php include_once __DIR__.'/../components/footer/footer.php'; ?>
	<!-- Дополнительные скрипты можно подключать через секцию -->
</body>
</html>