window.addEventListener('scroll', function() {
    var elements = document.querySelectorAll('.js-scroll');
    var windowHeight = window.innerHeight;
  
    for (var i = 0; i < elements.length; i++) {
      var element = elements[i];
      var positionFromTop = elements[i].getBoundingClientRect().top;
  
      if (positionFromTop - windowHeight <= 0) {
        element.classList.add('scrolled');
      }
    }
  });
  