# Выполниете эти действия для инициализации composer, pint и var-dumper

- docker compose run --rm php composer init

- docker compose run --rm php composer install

- docker compose run --rm php composer require --dev laravel/pint symfony/var-dumper

- **Скачать "Run on Save"**

# Если проблемы с правами на Laravel Pint

- docker compose run --rm php chmod +x ./vendor/bin/pint
- docker compose run --rm php ./vendor/bin/pint ${relativeFile}

# Дать права пользователя директориям:

<!-- sudo chown -R ninja:ninja /home/ninja/vscode/project/src /home/ninja/vscode/project/composer.json /home/ninja/vscode/project/composer.lock

sudo chown -R $USER:$USER vendor

docker exec -it project-php-1 composer dump-autoload -->

# Autoload Composer

docker compose exec php composer dump-autoload

# Вывести дерево диреторий исключая некоторые

tree -I 'mediamtx|nginx|node_modules'

# 1:10
