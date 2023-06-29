function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
  
var scrollTopButton = document.getElementById('scroll-top-button');
var scrollTimeout;

window.addEventListener('scroll', function() {
  clearTimeout(scrollTimeout);
  scrollTimeout = setTimeout(function() {
    scrollTopButton.style.opacity = '0'; 
  }, 2000);
  
  if (window.pageYOffset > 0) {
    scrollTopButton.style.opacity = '1'; 
  } else {
    scrollTopButton.style.opacity = '0'; 
  }
});

scrollTopButton.addEventListener('click', function(e) {
  e.preventDefault();
  window.scrollTo({ top: 0, behavior: 'smooth' });
});