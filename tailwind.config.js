module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      backgroundImage: theme => ({
        'homeBackground': "linear-gradient(to bottom right, red, yellow);",

       }),
       screens: { 

        'mobile': {'max': '767px'},
        'tablet': {'min': '768px', 'max': '1280px'},
        // => @media (max-width: 767px) { ... }
      }
    },
},
  variants: {
    extend: {},
  },
  plugins: [],
}
