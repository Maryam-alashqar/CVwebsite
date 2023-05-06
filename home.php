
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cvwebsite";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM user";
$result = $conn->query($sql);


$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Person Info.</title>
    <link rel="stylesheet" href="css/MyStyle.css">
</head>
<body>
    <nav>
        <ul>
         <li> <a href="home.php" class="pi"> Personal Information</a></li>
         <li> <a href="viewcourses.php">Courses Information</a></li>
         <li> <a href="viewexperience.php">Experiences Information</a></li>
         <li> <a href="addcourse.php">Add Course</a></li>
         <li> <a href="addexperience.php">Add Experience</a></li>
        </ul>
        <img src="img/uni.png" class="uni">
    </nav>
    <div class="head1">
        <h1>Personal Information</h1>
    </div>
    <div class="clear"></div>
    <?php if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    
      ?>
  
    <div class="div1">
        <div><table>
            <tr><td>Full Name: </td><td><b><?= $row["full_name"] ?></b></td></tr>
            <tr><td>Gender: </td> <td><?= $row["gender"] ?></td></tr>
            <tr><td>Birth Date: </td> <td><?= $row["birth_date"] ?></td></tr>
            <tr><td>Nationality:</td> <td><?= $row["nationality"] ?></td></tr>
            <tr><td>Place of Birth:</td> <td><?= $row["place_of_birth"] ?></td></tr>
            <tr><td>Job title: </td> <td> <?= $row["future_job"] ?></td></tr>
            <tr><td>Year of experience: </td> <td> <?= $row["years_experience"] ?></td></tr>
        </table>
    </div>
    <div>
        <img src=" <?= $row["image"] ?>"class="imgp">
    </div>
    <?php } } ?>
  
</div>
<div class="clear"></div>
</body>
</html>