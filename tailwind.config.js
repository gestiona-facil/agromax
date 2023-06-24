/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    'node_modules/flowbite-vue/**/*.{js,jsx,ts,tsx}',
    'node_modules/flowbite/**/*.{js,jsx,ts,tsx}',
    'resources/views/**/*.blade.php'
  ],
  theme: {},
  plugins: [
    require('flowbite/plugin')
  ],
}

