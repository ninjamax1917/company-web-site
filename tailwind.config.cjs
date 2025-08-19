module.exports = {
  darkMode: ['class', '.dark'],
  content: [
    './views/**/*.{php,html}',
    './public/**/*.{php,html,js,ts}',
  ],
  theme: {
    container: {
      center: true,
      padding: {
        DEFAULT: '1rem', // 16px, как в Bootstrap
        sm: '2rem',
        lg: '3rem',
        xl: '4rem',
        '2xl': '6rem',
      },
    },
    extend: {},
  },
};
