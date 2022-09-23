import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css', 
                'resources/css/sb-admin-2.css',
                'resources/js/app.js',
                'resources/js/sb-admin-2.js',      
                ],
            refresh: true,
        }),
    ],
});
