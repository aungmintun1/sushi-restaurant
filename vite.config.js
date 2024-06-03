import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/sass/app.scss',  // Add your SASS file here
                'resources/js/app.js',
            ],
            refresh: [
                'resources/views/**/*.blade.php', // Watch Blade files for changes
                'resources/css/**/*.css',         // Optional: Watch CSS files
                'resources/sass/**/*.scss',       // Optional: Watch SCSS files
            ],
        }),
        
    ],
    css: {
        preprocessorOptions: {
            scss: {
                additionalData: `@import "resources/sass/variables";` // Optional: If you have any global variables
            }
        }
    }
});
