/** @type {import('tailwindcss').Config} */
export default {
    purge: [
        './app/interfaces/Http/resources/**/*.blade.php',
        './app/interfaces/Http/resources/**/*.js',
    ],
    content: [
        "./app/interfaces/Http/resources/**/*.blade.php",
        "./app/interfaces/Http/resources/**/*.scss",
        "./app/interfaces/Http/resources/**/*.css",
        "./app/interfaces/Http/resources/**/*.ts",
        "./app/interfaces/Http/resources/**/*.js",
        "./app/interfaces/Http/resources/**/*.vue",
    ],
    theme: {
        extend: {},
    },
    plugins: [],
}

