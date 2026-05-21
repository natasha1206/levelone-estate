/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
    ],
    theme: {
        extend: {
            fontFamily: {
                serif: ['Cormorant Garamond', 'serif'],
                sans: ['Montserrat', 'sans-serif'],
            },
            colors: {
                gold: '#C6A43F',
                'gold-dark': '#A8882E',
                cream: '#FCF9F5',
                charcoal: '#1A1A1A',
            },
        },
    },
    plugins: [],
}