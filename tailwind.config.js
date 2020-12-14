module.exports = {
  purge: {
    content: [
      'source/**/*.blade.php',
      'source/**/*.md',
      'source/**/*.html',
    ]
  },
  theme: {
    extend: {
      screens: {
        'print': {'raw': 'print'},
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [
    require('tailwindcss-font-inter')(),
    require('@tailwindcss/aspect-ratio')
  ]
}
