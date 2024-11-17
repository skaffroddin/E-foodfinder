import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',  // Input CSS file for Tailwind
                'resources/js/app.js',    // Input JS file for your JavaScript (e.g., Alpine.js or Vue.js)
            ],
            refresh: true,  // Automatically reloads on file changes during development
        }),
    ],
});
