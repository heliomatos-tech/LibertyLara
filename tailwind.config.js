import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    purge: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    mode: 'jit', // Adicione esta linha para habilitar o modo JIT
    darkMode: 'class', // ou 'media' para usar a media query prefers-color-scheme
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
        },
    },
    plugins: [
        forms, typography
    ],
};
