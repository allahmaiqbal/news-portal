import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import react from "@vitejs/plugin-react";
import vue from "@vitejs/plugin-vue";

export default defineConfig({
    build: {
        assetsInlineLimit: 0
    },
    plugins: [
        laravel({
            hotFile: 'storage/vite.hot',
            input: [
                // "resources/css/tailwind.css", // uncomment to use tailwind css
                "resources/scss/backend/master.scss",
                "resources/statics/backend/js/backend.js",
                "resources/js/app.js",
                //frontend
                "resources/scss/frontend/style.scss",
                "resources/statics/frontend/js/main.js",

            ]
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
    resolve: {
        alias: {
            "~": "node_modules/",
        },
    },
    // server: {  // uncomment if use secure localhost url
    //     https: true,
    //     host: 'localhost',
    // },
});
