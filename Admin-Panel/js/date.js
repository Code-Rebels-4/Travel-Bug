document.addEventListener("DOMContentLoaded", function () {
  var dateDisplay = document.getElementById("dateDisplay");

  if (dateDisplay) {
    // Get the current date
    var currentDate = new Date();

    // Format the date as you desire
    var options = {
      weekday: "long",
      year: "numeric",
      month: "long",
      day: "numeric",
    };
    var formattedDate = currentDate.toLocaleDateString("en-US", options);

    // Set the formatted date as the content of the dateDisplay div
    dateDisplay.textContent = formattedDate;
  } else {
    console.error("Could not find the dateDisplay element.");
  }
});
