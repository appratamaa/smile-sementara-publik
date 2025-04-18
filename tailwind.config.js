import defaultTheme from 'tailwindcss/defaultTheme';
// const defaultTheme = require('tailwindcss/defaultTheme')
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                // sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                sans: ['Poppins', ...defaultTheme.fontFamily.sans],
                // sans: ['InterVariable', '...defaultTheme.fontFamily.sans'],
            },
        },
    },

    plugins: [forms],
};
