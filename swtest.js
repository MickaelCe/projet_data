if('serviceWorker' in navigator) {
    
  navigator.serviceWorker.register('sw.js').then(function(reg) {
    console.log('ServiceWorker registration successful with scope: ', reg.scope);
  }).catch(function(err) {
    console.log('ServiceWorker registration failed: ', err);
  });
}