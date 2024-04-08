import { defineConfig } from 'vite';
import ViteRestart from 'vite-plugin-restart';
import path from 'path';

const port = 5173;
const origin = `${process.env.DDEV_PRIMARY_URL}:${port}`;

export default defineConfig(({ command }) => ({
  base: command === "serve" ? "" : "/dist/",
  publicDir: path.resolve(__dirname, "src/public"),
  build: {
    manifest: true,
    outDir: path.resolve(__dirname, "web/dist/"),
    rollupOptions: {
      input: {
        app: path.resolve(__dirname, "src/js/app.js"),
      },
    },
    modulePreload: true,
  },
  server: {
    host: "0.0.0.0",
    port: port,
    origin: origin,
    strictPort: true,
  },
  plugins: [
    ViteRestart({
      reload: [
        path.resolve(__dirname, "templates/**/*.twig"),
      ],
    }),
  ],
}));