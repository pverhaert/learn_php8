
module.exports = {
  content: [
    "./public_html/**/*.{php, html, js}",
  ],
  theme: {
    extend: {},
    fontFamily: {
      "montserrat":  ['Montserrat', 'sans-serif'],
      "raleway":  ['Raleway', 'sans-serif'],
      "fa": ['"Font Awesome 6 Free"']
    }
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
}
