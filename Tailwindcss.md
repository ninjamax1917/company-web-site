**Инициализируйте npm (если ещё нет package.json)**
sudo apt install npm
npm init -y
**Установите Tailwind CSS и CLI**
npm install tailwindcss @tailwindcss/cli
**(Опционально) Сгенерируйте конфиг Tailwind**
npx tailwindcss init

**package.json**
{
"name": "project",
"version": "1.0.0",
"description": "",
"main": "index.js",
"scripts": {
"tailwind:build": "tailwindcss -c tailwind.config.js -i public/assets/styles/input.css -o public/assets/styles/output.css",
"tailwind:watch": "tailwindcss -c tailwind.config.js -i public/assets/styles/input.css -o public/assets/styles/output.css --watch"
},
"repository": {
"type": "git",
"url": "git+https://github.com/ninjamax1917/company-web-site.git"
},
"keywords": [],
"author": "",
"license": "ISC",
"bugs": {
"url": "https://github.com/ninjamax1917/company-web-site/issues"
},
"homepage": "https://github.com/ninjamax1917/company-web-site#readme",
"dependencies": {
"@tailwindcss/cli": "^4.1.12",
"tailwindcss": "^4.1.12"
}

}

**Режим "watch"**

- npm run tailwind:watch

**Пересобрать Tailwind вручную**

- npm run tailwind:build

**Переустановить зависимости**
- rm -rf node_modules package-lock.json
- npm install

**Пересборка Tailwind**
- npx tailwindcss -c tailwind.config.cjs -i public/assets/styles/input.css -o public/assets/styles/output.css