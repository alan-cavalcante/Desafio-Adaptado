module.exports = {
  content: [
    "resources/**/*.blade.php",
    "resources/**/*.js",
    "resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        'projeto': 'Epilogue',
      },
      colors: {
        'mediumgray': '#696969',
        'almostblack': '#141414',
        'almostwhite': '#fafafa',
      },
      screens: {
        'mobile1':'375px',
        'desktop1': '1440px',
      }
    }
  },
  plugins: [],
}
