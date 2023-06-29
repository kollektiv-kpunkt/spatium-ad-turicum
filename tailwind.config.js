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
                'blue': '#0013C1',
                "red": "#e10078",
                "green": "#009B3E"
            },
            fontSize: {
                "2xs": ".625rem"
            }
        },
    },
    plugins: [],
}

