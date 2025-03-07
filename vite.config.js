import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    "base": "./",
    plugins: [
        laravel({
            hotFile: 'vite.hot',
            input: [
                "resources/css/app.css",
                "resources/js/app.js",
            ],
            refresh: ['resources/views/**'],
        }),
    ],
    resolve: {
        alias: {
            "@": "/resources",
        },
    },
});
