module.exports = {
  content: [
    './views/**/*.{php,html}',
    './public/**/*.{php,html,js,ts}',
  ],
  darkMode: 'class', // включение темной темы
  theme: {
    extend: {},
  },
  plugins: [require('daisyui')],
};
