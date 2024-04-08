/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./src/**/*.js', './templates/**/*.{twig,html,php}'],
  theme: {
    extend: {},
  },
  plugins: [],
  corePlugins: {
    container: false,
  },
};
