// service-worker.js
const CACHE_NAME = 'my-pwa-cache-v1';
const urlsToCache = [
    '/',
    'pgrm4.html',
    'prgm4.css',
    'app.js'
];

self.addEventListener('install', (event) => {
    event.waitUntil(
        caches.open(CACHE_NAME)
            .then((cache) => cache.addAll(urlsToCache))
    );
});

self.addEventListener('fetch', (event) => {
    event.respondWith(
        caches.match(event.request)
            .then((response) => response || fetch(event.request))
    );
});