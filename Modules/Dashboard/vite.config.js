const dotenvExpand = require('dotenv-expand');
dotenvExpand(require('dotenv').config({ path: '../../.env'/*, debug: true*/}));

import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import react from "@vitejs/plugin-react";
import vue from "@vitejs/plugin-vue";

export default defineConfig({
    build: {
        outDir: '../../public/build-dashboard',
        emptyOutDir: true,
        manifest: true,
        assetsInlineLimit: 0,
    },
    plugins: [
        laravel({
            publicDirectory: '../../public',
            buildDirectory: 'build-dashboard',
            hotFile: '../../storage/vite-build-dashboard.hot',
            input: [
                __dirname + '/Resources/assets/sass/app.scss',
                __dirname + '/Resources/assets/js/app.js'
            ],
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
        react(),
    ],
});
