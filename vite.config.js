import { defineConfig } from 'vite';

export default defineConfig({
    plugins: [

    ],

    css: {
        preprocessorOptions: {
            scss: {
                additionalData: '@import "./resources/sass/_variables.scss";' 
            }
        }
    },
});
