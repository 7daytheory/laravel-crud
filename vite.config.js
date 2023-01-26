import { defineConfig } from 'vite';

export default defineConfig({
    plugins: [
            mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/sass/app.scss', 'public/css')
    ],
});
