import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    theme: {
        colors: {
            custom: "#ba0047",
            custom2: "#611b40",
        },
    },

    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
        }),
    ],
});
