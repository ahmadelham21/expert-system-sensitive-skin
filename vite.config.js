import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import path from "path";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/js/app.js", "resources/css/app.css"],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            "@": path.resolve(__dirname, "resources/js"),
        },
    },

    // Asset public directory in Laravel
    base: "/public/",

    // Laravel Mix compatible output directory
    build: {
        outDir: "../public/dist",
    },
});
