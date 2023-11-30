window.addEventListener("scroll", function () {
  var navbar = document.querySelector(".navbar");
  var max_width = document.querySelector(".max-width");

  if (window.scrollY > 0) {
    navbar.style.backgroundColor = "#fff"; // Change background color on scroll
    max_width.style.padding = "0px 0px"; // Adjust padding on scroll
  } else {
    navbar.style.backgroundColor = "transparent"; // Set back to transparent if scrolled to top
    max_width.style.padding = "0px 0px"; // Set back to original padding
  }
});

document.addEventListener("DOMContentLoaded", function () {
  var scrollBtn = document.querySelector('.scroll-up-btn');

  // Show/hide scroll-up button based on scroll position
  window.addEventListener('scroll', function () {
      if (window.scrollY > 300) {  // Adjust the scroll threshold as needed
          scrollBtn.classList.add('show');
      } else {
          scrollBtn.classList.remove('show');
      }
  });

  // Scroll to the top when the button is clicked
  scrollBtn.addEventListener('click', function () {
      window.scrollTo({
          top: 0,
          behavior: 'smooth'
      });
  });
});
