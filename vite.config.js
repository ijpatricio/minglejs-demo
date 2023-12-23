import path from "path"
import {defineConfig} from 'vite'
import laravel, {refreshPaths} from 'laravel-vite-plugin'
import dotenv from 'dotenv'
import vue from '@vitejs/plugin-vue'
import reactRefresh from '@vitejs/plugin-react-refresh'

dotenv.config()

const extendedViteDevServerOptions = {}

if (process.env.GITPOD_VITE_URL) {
    extendedViteDevServerOptions.hmr = {
        protocol: 'wss',
        host: new URL(process.env.GITPOD_VITE_URL).hostname,
        clientPort: 443
    }
}

export default defineConfig({
    server: {
        ...extendedViteDevServerOptions
    },
    plugins: [
        laravel({
            input: 'resources/js/app.js',
            refresh: [
                ...refreshPaths,
                'app/**/*.php',
            ],
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
        reactRefresh(),
    ],
    resolve: {
        alias: {
            "@": path.resolve(__dirname, "./resources/js"),
        },
    },
})
