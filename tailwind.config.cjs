// Tailwind v4 config in CommonJS so CLI (without type:module) loads it reliably
module.exports = {
  // Force class-based dark mode in Tailwind v4 (try array form)
  darkMode: ['class', '.dark'],
  content: [
    './views/**/*.{php,html}',
    './public/**/*.{php,html,js,ts}'
  ],
  theme: {
    extend: {}
  },
  plugins: [
    function({ addVariant }) {
      // Override default dark variant to use manual .dark class instead of prefers-color-scheme media query
      addVariant('dark', '.dark &')
    }
  ]
};
