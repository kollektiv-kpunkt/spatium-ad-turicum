/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./*/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                'blau': '#0013C1',
                "rot": "#e10078",
                "gruen": "#009B3E"
            },
            fontSize: {
                "2xs": ".625rem"
            }
        },
    },
    plugins: [],
}

