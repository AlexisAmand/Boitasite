// vite.config.js
import { defineConfig } from 'vite';

export default defineConfig({
  base: '/dist/', // ou '/mon-sous-dossier/' selon ta config serveur
  build: {
    manifest: true,   // <<<<< active la génération du manifest
    outDir: 'dist',
    rollupOptions: {
      input: 'src/main.js', // Indique bien ton fichier d’entrée ici
    }
  },
  server: {
    cors: true,        // active CORS pour toutes les origines
    origin: 'http://localhost:5173',  // facultatif, mais souvent utile
  }
});




