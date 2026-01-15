// Service Worker
// Version: 1.0 | Last Updated: January 16, 2026

const CACHE_NAME = 'apna-fantasy-v1';
const urlsToCache = [
    '/',
    '/index.php',
    '/pages/play.php',
    '/pages/about.php',
    '/pages/contact.php',
    '/assets/css/style.css',
    '/assets/js/main.js',
    '/assets/js/toast.js',
    '/assets/css/toast.css'
];

// Install event - cache resources
self.addEventListener('install', (event) => {
    event.waitUntil(
        caches.open(CACHE_NAME).then((cache) => {
            return cache.addAll(urlsToCache).catch((error) => {
                console.log('Cache addAll error:', error);
                // Continue even if some resources fail to cache
            });
        }).then(() => {
            self.skipWaiting();
        })
    );
});

// Activate event - clean up old caches
self.addEventListener('activate', (event) => {
    event.waitUntil(
        caches.keys().then((cacheNames) => {
            return Promise.all(
                cacheNames.map((cacheName) => {
                    if (cacheName !== CACHE_NAME) {
                        return caches.delete(cacheName);
                    }
                })
            );
        }).then(() => {
            self.clients.claim();
        })
    );
});

// Fetch event - serve from cache, fallback to network
self.addEventListener('fetch', (event) => {
    // Skip non-GET requests
    if (event.request.method !== 'GET') {
        return;
    }

    // Skip offline API calls
    if (event.request.url.includes('/includes/verify-age.php')) {
        return fetch(event.request);
    }

    event.respondWith(
        caches.match(event.request).then((response) => {
            if (response) {
                return response;
            }

            return fetch(event.request).then((response) => {
                // Don't cache non-successful responses
                if (!response || response.status !== 200 || response.type === 'error') {
                    return response;
                }

                // Cache successful responses
                const responseToCache = response.clone();
                caches.open(CACHE_NAME).then((cache) => {
                    cache.put(event.request, responseToCache);
                });

                return response;
            }).catch(() => {
                // Return offline page if available
                return caches.match('/index.php');
            });
        })
    );
});
