// Service worker.js  
// self.importScripts('data/games.js');

// Files to cache
var cacheName = 'exampleApp-v1';
var appShellFiles = [
  './',
  './Board1.html',
  './icon_512.png'
];

var extra = [];
var contentToCache = appShellFiles.concat(extra);

// Installing Service Worker
self.addEventListener('install', function(e) {
  console.log('[Service Worker] Installing');

  e.waitUntil(
    caches.open(cacheName).then(function(cache) {
      console.log('[Service Worker] Caching all: app shell and content');
      var result = cache.addAll(contentToCache);
      console.log('[Service Worker] Content cached:' + result);
      return result;
    })
  );
});

// Fetching content using Service Worker
// checks if item is in cache before loading from the server
self.addEventListener('fetch', function(e) {
  e.respondWith(
    caches.match(e.request).then(function(r) {
      console.log('[Service Worker] Fetching resource: '+e.request.url);
      return r || fetch(e.request).then(function(response) {
        return caches.open(cacheName).then(function(cache) {
          console.log('[Service Worker] Caching new resource: '+e.request.url);
          cache.put(e.request, response.clone());
          return response;
        });
      });
    })
  );
});