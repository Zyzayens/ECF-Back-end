/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./view",
    "./node_modules/flowbite/dist/flowbite.min.js"
  ],
  theme: {
    extend: {},
  },
  plugins: [require('flowbite/plugin')],
}

