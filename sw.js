var CACHE_NAME = 'tancrea_cache';
var urlsToCache = [
    '/3il/',
    '/3il/index.html',
    '/index.php',
    '/3il/css/body.css',
    '/3il/css/footer.css',
    '/3il/css/header.css',
    '/3il/img/porto/1.jpg',
    '/3il/img/porto/2.jpg',
    '/3il/img/porto/3.jpg',
    '/3il/img/porto/4.jpg',
    '/3il/img/chirac.jpg',
    '/3il/img/pwa.png',
    '/3il/img/pwa_512.png',
    '/3il/js/footer.js',
    '/3il/js/header.js',
    '/3il/manifest.json',
    '/3il/sw.js',
    '/3il/webdata.xml'
];
console.log('loading sw');

self.addEventListener('install', function(event) {
    // Perform install steps
    console.log('installing sw');
    event.waitUntil(
        caches.open(CACHE_NAME)
            .then(function(cache) {
                console.log('Opened cache');
                var x = cache.addAll(urlsToCache);
                console.log('cache added');
                return x;
            })
    );
});
/*
self.addEventListener('fetch', function(event) {
    event.respondWith(
        caches.match(event.request)
            .then(function(response) {
                    // Cache hit - return response
                    if (response) {
                        return response;
                    }
                    return fetch(event.request);
                }
            )
    );
});*/