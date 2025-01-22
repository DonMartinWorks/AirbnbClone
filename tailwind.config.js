import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            colors: {
                'primary': {
                    DEFAULT: '#222222'
                },
                'airbnb': {
                    'gray-light': '#767676',
                    'gray-dark': '#484848',
                    'accent': '#FF5A5F',
                    'green': '#00A699',
                    'orange': '#FC642D'
                },
            },

            fontFamily: {
                'text': ['Nunito', 'sans-serif'],
            },
        },
    },
    // plugins: [require('@tailwindcss/forms')],
    plugins: [],
};
