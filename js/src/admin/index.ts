import app from 'flarum/admin/app';
import { default as extend } from './extend';

// Export the extend array - THIS IS CRITICAL FOR FLARUM 2.X
export { extend };

// Initializer (solo per logica imperativa se necessario)
app.initializers.add('peopleinside-admin-css', () => {
  // Le traduzioni vengono gestite inline in extend.ts
  // Non serve aggiungere nulla qui
});
