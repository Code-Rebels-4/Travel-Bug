document.addEventListener("DOMContentLoaded", function () {
  // Show the popup when "Open Popup" button is clicked
  var openPopupButton = document.getElementById("openPopup");
  openPopupButton.addEventListener("click", function () {
    var popup = document.getElementById("popup");
    popup.style.display = "block";
  });

  // Close the popup and reset dropdowns and form when "Close Popup" button is clicked
  var closePopupButton = document.getElementById("closePopup");
  closePopupButton.addEventListener("click", function () {
    var popup = document.getElementById("popup");
    popup.style.display = "none";

    // Reset dropdowns individually
    var dropdowns = document.querySelectorAll(".dropdown-class-name");
    dropdowns.forEach(function (dropdown) {
      dropdown.selectedIndex = 0;
    });

    // Reset the form
    var addItemForm = document.getElementById("addItemForm");
    addItemForm.reset();
  });
});
