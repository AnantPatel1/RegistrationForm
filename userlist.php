<?php 

$conn = mysqli_connect("localhost", "root", "", "user");


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM registration";
$result = $conn->query($sql);


$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
</head>
<body>
    <table style="display: flex; justify-content: center; width:100%;  gap:10px; padding:5px;">
        <tr>
        <th style="padding: 5px;">Id</th>
        <th style="padding: 5px;">Name</th>
        <th style="padding: 5px;">Age</th>
        <th style="padding: 5px;">Weight</th>
        <th style="padding: 5px;">Email</th>
        <th style="padding: 5px;">PDF</th>
        </tr>
    <?php 
    
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) { 
            ?>
        <tr>
          <td style="padding: 5px;"><?php echo $row['id']; ?></td>
          <td style="padding: 5px;"><?php echo $row['name']; ?></td>
          <td style="padding: 5px;"><?php echo $row['age']; ?></td>
          <td style="padding: 5px;"><?php echo $row['weight']; ?></td>
          <td style="padding: 5px;"><?php echo $row['email']; ?></td>
          <td style="padding: 5px;"><a href="./pdf/<?php echo $row['pdf_file']; ?>" target="_blank"><?php echo $row['pdf_file'] == '' ? '' : $row['pdf_file']; ?>
        <img src="https://w7.pngwing.com/pngs/164/429/png-transparent-document-download-pdf-file-files-line-icons-set-icon.png" width="25" height="25" />
        </a></td>
        </tr>
     <?php   }
      } else {
        echo "0 results";
      }
    
    ?>
    </table>
</body>
</html>