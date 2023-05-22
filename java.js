window.addEventListener('DOMContentLoaded', function() {
    var scrollTopButton = document.getElementById('scroll-top-button');
    
    scrollTopButton.addEventListener('click', function(e) {
      e.preventDefault();
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  });
  
