<?php

$conn = mysqli_connect("localhost", "root", "", "user");


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST["name"];
$age = $_POST["age"];
$weight = $_POST["weight"];
$email = $_POST["email"];

$file_name = '';
if (isset($_FILES['pdf_file']['name']))
{
  $file_name = $_FILES['pdf_file']['name'];
  $file_tmp = $_FILES['pdf_file']['tmp_name'];

  move_uploaded_file($file_tmp,"./pdf/".$file_name);


}

$sql = "INSERT INTO registration (name, age, weight, email, pdf_file) VALUES ('$name', '$age', '$weight', '$email', '$file_name')";

$stmt = $conn->prepare($sql);

// $stmt->bind_param("siis", $name, $age, $weight, $email);

$result = $stmt->execute();

if ($result) {
    header("Location: userlist.php");
 
    exit;
} else {
    echo "There was an error adding the user.";
}

$stmt->close();
$conn->close();

?>

