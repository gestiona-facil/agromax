/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    'node_modules/flowbite-vue/**/*.{js,jsx,ts,tsx}',
    'node_modules/flowbite/**/*.{js,jsx,ts,tsx}',
    'resources/views/**/*.blade.php'
  ],
  theme: {},
  // safelist: [
  //   { 
  //     pattern:/.+/i,
  //   }
  // ],
  plugins: [
    require('flowbite/plugin')
  ],
}

