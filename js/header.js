function responsiveMenu() {
    var nav = document.getElementById("topnav");
    var title = document.getElementById("title");
    if (nav.className === "topnav") {
        nav.className += " responsive";
        title.style.display = "none";
    } else {
        nav.className = "topnav";
        title.style.display = "block";
    }
}

function registerServiceWorker() {
  // register sw script in supporting browsers
  if ('serviceWorker' in navigator) {
    navigator.serviceWorker.register('sw.js', { scope: '.' }).then(() => {
      console.log('Service Worker registered successfully.');
    }).catch(error => {
      console.log('Service Worker registration failed:', error);
    });
  }
}

registerServiceWorker();