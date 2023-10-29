// Function to disable the back functionality
function disableBackNavigation() {
  const stateObj = { page: 'disabled' };
  history.replaceState(stateObj, '', window.location.href);
  window.addEventListener('popstate', function(event) {
    history.pushState(stateObj, '', window.location.href);
  });
}
