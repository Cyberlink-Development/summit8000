export default {
  content: [
    "./resources/views/**/*.blade.php",
  ],
  theme: {
    extend: {
      colors: {
        brand: {
          50: '#f0faff',
          100: '#e0f5ff',
          200: '#baeaff',
          300: '#7cd8ff',
          400: '#2EB0E4',
          500: '#1d9fd6',
          600: '#1381b8',
          700: '#116896',
          800: '#12587b',
          900: '#154a67',
        },
        blue: {
            50: '#f0faff',
            100: '#e0f5ff',
            200: '#baeaff',
            300: '#7cd8ff',
            400: '#2EB0E4', // Exact blue from design
            500: '#1d9fd6',
            600: '#1381b8',
            700: '#116896',
            800: '#12587b',
            900: '#154a67',
        }
      },
      fontFamily: {
        sans: ['Inter', 'sans-serif'],
      },
      keyframes: {
        'slide-down': {
          '0%': { transform: 'translateY(-100%)' },
          '100%': { transform: 'translateY(0)' },
        },
      },
      animation: {
        'slide-down': 'slide-down 0.35s ease-out',
      },
    },
  },
  plugins: [
    require('@tailwindcss/typography'),
  ],
}
