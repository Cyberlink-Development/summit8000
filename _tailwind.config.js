export default {
  content: [
    "./resources/views/**/*.blade.php",
    "./resources/js/**/*.js",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      colors: {
        brand: {
          50:  '#e6f7fd',
          100: '#cceefb',
          200: '#99def7',
          300: '#66cdf3',
          400: '#2EB0E4',
          500: '#2498c7',  
          600: '#1f86b0'
        }
      }
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}
