function validatePassword() {
  var password = document.getElementsByName("new_password")[0].value;
  var confirmPassword = document.getElementsByName("confirm_password")[0].value;

  // Check if the password meets the criteria
  if (password.length < 8) {
    showError("Password must be at least 8 characters long.");
    return false;
  }

  // Add additional criteria if needed, e.g., requiring letters and numbers

  // Check if the passwords match
  if (password !== confirmPassword) {
    showError("Passwords do not match.");
    return false;
  }

  // If all criteria are met, return true to submit the form
  return true;
}

function showError(message) {
  document.getElementById("error-message").innerText = message;
  document.getElementById("error-popup").style.display = "block";
}
