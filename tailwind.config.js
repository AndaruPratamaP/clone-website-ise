/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./resources/**/*.blade.php', './resources/**/*.js', './resources/**/*.vue'],
  theme: {
    screens: {
      xs: '475px',
      // => @media (min-width: 475px) { ... }

      sm: '640px',
      // => @media (min-width: 640px) { ... }

      md: '768px',
      // => @media (min-width: 768px) { ... }

      lg: '1024px',
      // => @media (min-width: 1024px) { ... }

      xl: '1280px',
      // => @media (min-width: 1280px) { ... }

      '2xl': '1536px',
      // => @media (min-width: 1536px) { ... }
    },
    extend: {
      fontFamily: {
        montserrat: ['Montserrat', 'sans-serif'],
      },
      colors: {
        blue: {
          50: '#B1FDFF',
          100: '#9AE6FF',
          200: '#82CFFE',
          300: '#6BB9E7',
          400: '#53A4D0',
          500: '#398FBA',
          600: '#177AA4',
          700: '#00668F',
          800: '#00537A',
          900: '#004066',
        },
        purple: {
          50: '#FFDAFF',
          100: '#FFC4FF',
          200: '#FAADF2',
          300: '#E298DB',
          400: '#CB82C5',
          500: '#B56DAF',
          600: '#9F5999',
          700: '#894584',
          800: '#743170',
          900: '#5F1D5C',
        },
        orange: {
          50: '#FFD693',
          100: '#FFBF7E',
          200: '#FFA969',
          300: '#FED880',
          400: '#EA7E41',
          500: '#D1692D',
          600: '#B85519',
          700: '#A04101',
          800: '#882D00',
          900: '#711800',
        },
        green: {
          50: '#AAFFEA',
          100: '#93EED3',
          200: '#7DD7BD',
          300: '#66C1A7',
          400: '#50AB92',
          500: '#39957E',
          600: '#1F8069',
          700: '#006C56',
          800: '#005843',
          900: '#004432',
        },
        lightGreen: {
          50: '#DBFEC1',
          100: '#C5E7AB',
          200: '#AFD196',
          300: '#99BA81',
          400: '#aba498',
          500: '#84A56D',
          600: '#6F9059',
          700: '#5B7B46',
          800: '#476733',
          900: '#345321',
          1000: '#22410F',
        },
        discolored: {
          50: '#FFFFFF',
          100: '#E2E2E2',
          200: '#C5C5C5',
          300: '#A9A9A9',
          400: '#8F8F8F',
          500: '#757575',
          600: '#5C5C5C',
          700: '#444444',
          800: '#2E2E2E',
          900: '#181818',
        },
      },
      display: ['group-focus'],
    },
  },
  plugins: [
    require('tailwind-scrollbar'),
  ],
};
