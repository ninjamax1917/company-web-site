# Переключитесь на нужную ветку - main (если вы еще не в ней):

git checkout main

# Удалите файлы (из индекса, но не с диска!):

git rm --cached -r $(.env
/vendor/
/node_modules/
/dist/
/build/
docker-compose.yml
Dockerfile.php
HELP.md
GIT_HELP.md
secret.txt)

# Зафиксируйте изменения:

git add .
git commit -m "Remove ignored files from repository"

# Отправьте изменения на GitHub:

git push origin main

# Установить имя и email

- git config --global user.name "ninjamax1917"
