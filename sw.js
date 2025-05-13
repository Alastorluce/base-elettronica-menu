self.addEventListener('install', (event) => {
  console.log('Service Worker: Installato');
  // event.waitUntil(self.skipWaiting()); // Opzionale: forza l'attivazione immediata
});

self.addEventListener('activate', (event) => {
  console.log('Service Worker: Attivato');
  // event.waitUntil(self.clients.claim()); // Opzionale: prende il controllo immediato delle pagine aperte
});

self.addEventListener('fetch', (event) => {
  // console.log('Service Worker: Fetching', event.request.url);
  // Risposta di base: passa semplicemente la richiesta alla rete
  event.respondWith(fetch(event.request));
});
