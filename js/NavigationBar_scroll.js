window.addEventListener("scroll", function () {
  var navbar = document.querySelector(".navbar");
  var max_width = document.querySelector(".max-width");

  if (window.scrollY > 0) {
    navbar.style.backgroundColor = "#60676B"; // Change background color on scroll
    max_width.style.padding = "0px 0px"; // Adjust padding on scroll
  } else {
    navbar.style.backgroundColor = "transparent"; // Set back to transparent if scrolled to top
    max_width.style.padding = "0px 0px"; // Set back to original padding
  }
});
