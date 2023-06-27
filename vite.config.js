import { fileURLToPath, URL } from 'node:url'

import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

import vue from '@vitejs/plugin-vue'
import vueJsx from '@vitejs/plugin-vue-jsx'

export default defineConfig({
    build: {
        assetsDir: "assets",
        rollupOptions: {
          output: {
            assetFileNames: "[name].[hash][extname]",
            chunkFileNames: "[name].[hash].js",
            entryFileNames: "[name].js",
          },
        },
        // Change the default file name pattern
        assetFileNames: "[name].[hash][extname]",
    },
    plugins: [
        vue(),
        vueJsx(),    
        laravel({
            input: ['resources/css/styles.css', 'resources/js/src/main.ts'],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
          '@': fileURLToPath(new URL('./resources/js/src', import.meta.url))
        }
    }
});
