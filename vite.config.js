import {defineConfig} from 'vite'
import laravel from 'laravel-vite-plugin'
import dotenv from 'dotenv'

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
            refresh: true,
        }),
    ],
})
