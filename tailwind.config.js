/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
  theme: {
    extend: {
        fontFamily:{
            "hanken-grotesk": ["Hanken Grotesk", "sans-serif"]
        },
        colors: {
            "black": "#060606"
        },
        fontsize:{
            "2xs": ".625rem"
        }
    },
  },
  plugins: [],
}

