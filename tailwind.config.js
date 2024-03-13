/** @type {import('tailwindcss').Config} */
/* export default {
  content: [],
  theme: {
    extend: {},
  },
  plugins: [],
}

 */
module.exports = {
  content:[
    "./resources/**/*.blade.php",
    "./resources/**/*.js"
  ],
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {},
  },
  variants: {
    extend: {},
  },
  plugins: [],
}