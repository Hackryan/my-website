// Remove the current page from the browser's history
window.history.replaceState(null, null, window.location.href);

// Disable the back button (may not work in all browsers)
window.onpopstate = function(event) {
    window.history.pushState(null, null, window.location.href);
};