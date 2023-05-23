window.addEventListener('DOMContentLoaded', function() {
    var hamburgerMenu = document.querySelector('.hamburger-menu');
    var navList = document.querySelector('nav ul');
  
    hamburgerMenu.addEventListener('click', function() {
      navList.classList.toggle('open');
    });
  });
  
