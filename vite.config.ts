import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from "@vitejs/plugin-vue"

export default defineConfig({
    plugins: [
        laravel([
            'app/interfaces/http/resources/scss/app.scss',
            'app/interfaces/http/resources/scss/frontend/app.scss',
            'app/interfaces/http/resources/scss/backend/app.scss',
            'app/interfaces/http/resources/js/app.ts',
        ]),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false
                }
            }
        })
    ],
});
