// https://tailwindcss.com/docs/configuration
module.exports = {
  content: ['./**/*.scss', './**/*.twig', './**/*.php'],
  theme: {
    colors: {
    },
    screens: {
      sm: '641px',
      md: '769px',
      lg: '1025px',
      xl: '1281px',
      '2xl': '1537px'
    },
    extend: {
      borderRadius: {
        sm: '10px',
        md: '24px',
        lg: '48px',
        xl: '90px'
      },
      boxShadow: {
        sm: '0px 4px 6px -1px rgba(0, 0, 0, 0.1), 0px 2px 4px -2px rgba(0, 0, 0, 0.05)',
        lg: '0px 8px 12px -2px rgba(0, 0, 0, 0.1), 0px 8px 12px -2px rgba(0, 0, 0, 0.05)'
      },
      colors: {
      },
      borderWidth: {
        DEFAULT: '1px',
        0: '0',
        2: '2px',
        3: '3px',
        4: '4px'
      },
      fontFamily: {
        oswald: ['Oswald Bold', 'sans-serif'],
        sourcesans: ['Source Sans', 'sans-serif']
      },
      spacing: {
        sm: '10px',
        md: '24px',
        lg: '48px',
        xl: '90px'
      },
      translate: {
        sm: '10px',
        md: '24px',
        lg: '48px',
        xl: '90px'
      }
    }
  },
  plugins: [require('@tailwindcss/typography')]
}
