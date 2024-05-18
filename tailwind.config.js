/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{php,html,js}"],
  theme: {
    container: {
      center: true,
      padding: "16px",
    },

    extend: {
      colors: {
        primary: "#14b8a6",
        dark: "#334155",
        secondary: "#64748b",
      },

      screens: {
        '2xl': "1320px"
      },
    },
  },
  plugins: [],
}