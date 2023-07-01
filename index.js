function validateForm() {
  var nameInput = document.getElementById("name");
  var ageInput = document.getElementById("age");
  var weightInput = document.getElementById("weight");
  var emailInput = document.getElementById("email");

  var nameError = document.getElementById("nameError");
  var ageError = document.getElementById("ageError");
  var weightError = document.getElementById("weightError");
  var emailError = document.getElementById("emailError");

  var nameValue = nameInput.value.trim();
  var ageValue = ageInput.value.trim();
  var weightValue = weightInput.value.trim();
  var emailValue = emailInput.value.trim();

  nameError.textContent = "";
  ageError.textContent = "";
  weightError.textContent = "";
  emailError.textContent = "";

  if (nameValue.length < 3) {
    nameError.textContent = "Name should be at least 3 characters long";
    nameInput.focus();
    return false;
  }

  if (ageValue === "") {
    ageError.textContent = "Age is required";
    ageInput.focus();
    return false;
  }

  var age = parseInt(ageValue);
  var minAge = parseInt(ageInput.min);
  var maxAge = parseInt(ageInput.max);

  if (isNaN(age) || age < minAge || age > maxAge) {
    ageError.textContent = "Age should be between " + minAge + " and " + maxAge;
    ageInput.focus();
    return false;
  }

  if (weightValue === "") {
    weightError.textContent = "Weight is required";
    weightInput.focus();
    return false;
  }

  var weight = parseInt(weightValue);
  var minWeight = parseInt(weightInput.min);
  var maxWeight = parseInt(weightInput.max);

  if (isNaN(weight) || weight < minWeight || weight > maxWeight) {
    weightError.textContent =
      "Weight should be between " + minWeight + " and " + maxWeight;
    weightInput.focus();
    return false;
  }

  if (emailValue.length < 6 || !emailValue.includes("@")) {
    emailError.textContent = "Please enter a valid email address";
    emailInput.focus();
    return false;
  }

  return true;
}
function uploadFile() {
  var fileInput = document.getElementById("pdfFile");
  var fileName = fileInput.value;
  var pdfFileError = document.getElementById("pdfFileError");

  if (fileName) {
    var allowedExtensions = /(\.pdf)$/i;
    if (!allowedExtensions.exec(fileName)) {
      pdfFileError.textContent = "Please select a PDF file";
      fileInput.value = "";
    } else {
      pdfFileError.textContent = "";
      var file = fileInput.files[0];
      var fileURL = URL.createObjectURL(file);
      window.open(fileURL, "_blank");
    }
  }
}
