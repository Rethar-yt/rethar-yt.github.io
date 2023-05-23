var scrollTopButton = document.getElementById('scroll-top-button');
var scrollTimeout;

window.addEventListener('scroll', function() {
  clearTimeout(scrollTimeout);
  scrollTimeout = setTimeout(function() {
    scrollTopButton.style.opacity = '0'; // Hide the button after 2 seconds of inactivity
  }, 2000);
  
  if (window.pageYOffset > 0) {
    scrollTopButton.style.opacity = '1'; // Show the button when scrolling down
  } else {
    scrollTopButton.style.opacity = '0'; // Hide the button when already at the top
  }
});

scrollTopButton.addEventListener('click', function(e) {
  e.preventDefault();
  window.scrollTo({ top: 0, behavior: 'smooth' });
});
