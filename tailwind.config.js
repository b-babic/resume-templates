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
      },
      width: {
        a4: '210mm'
      },
      maxWidth: {
        a4: '210mm'
      },
      height: {
        a4: '297mm'
      },
      minHeight: {
        a4: '297mm'
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
