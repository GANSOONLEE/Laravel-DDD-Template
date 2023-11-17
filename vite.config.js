import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                // 'app/Interfaces/Http/resources/scss/app.scss',
                'app/Interfaces/Http/resources/ts/app.js',
            ],
            refresh: [
                'resources/routes/**',
                'routes/**',
                'app/Interfaces/Http/resources/views/**',
            ],
        })
    ],
});
