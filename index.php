<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registration Form</title>
    
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="styles.css" />
  </head>

  <body>
    <div class="container">
      <div class="design">
        <div class="pill-1 rotate-45"></div>
        <div class="pill-2 rotate-45"></div>
        <div class="pill-3 rotate-45"></div>
        <div class="pill-4 rotate-45"></div>
      </div>
      <div class="login-box">
        <h2>Form</h2>
        <form action="connect.php" method="POST" enctype="multipart/form-data">
          <div class="user-box">
            <input type="text" id="name" name="name" required />
            <label>Name</label>
            <p id="nameError" class="error-message"></p>
          </div>
          <div class="user-box">
            <input
              type="number"
              id="age"
              name="age"
              min="0"
              max="150"
              required
            />
            <label for="age">Age</label>
            <p id="ageError" class="error-message"></p>
          </div>
          <div class="user-box">
            <input
              type="number"
              id="weight"
              name="weight"
              min="0"
              max="1000"
              required
            />
            <label for="weight">Weight</label>
            <p id="weightError" class="error-message"></p>
          </div>
          <div class="user-box">
            <input type="text" id="email" name="email" required />
            <label>Email</label>
            <p id="emailError" class="error-message"></p>
          </div>

           <div class="user-box">
            <input type="file" id="pdfFile" name="pdf_file" accept=".pdf" />
            <label for="pdfFile">Upload PDF</label>
            <p id="pdfFileError" class="error-message"></p>
          </div>

          <div href="#" id="uploadButton" onclick="return uploadFile()">
            <span class="ri-upload-line"></span>
            <span>ReviewPDF</span>
          </div> 

          <button type="submit" onclick="return validateForm()">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Submit
          </button>
        </form>
      </div>
    </div>
    <script src="index.js"></script>

  </body>
</html>
