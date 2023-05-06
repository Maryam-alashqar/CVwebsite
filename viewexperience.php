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

$sql = "SELECT * FROM experiences";
$result = $conn->query($sql);


$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>experience info.</title>
    <link rel="stylesheet" href="css/MyStyle.css">
</head>
<body>
    <nav>
        <ul>
            <li> <a href="home.php" > Personal Information</a></li>
            <li> <a href="viewcourses.php">Courses Information</a></li>
            <li> <a href="viewexperience.php">Experiences Information</a></li>
            <li> <a href="addcourse.php">Add Course</a></li>
            <li> <a href="addexperience.php">Add Experience</a></li>
        </ul>
        <img src="img/uni.png" class="uni">
    </nav>
    <div class="head1">
        <h1>All Experience Information</h1>
    </div>
    <div class="clear"></div>

    <?php if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    
      ?>
  
    
        <div style="margin-left:60px; margin-top:30px; font-family:Chaga;">
            <h2> <?= $row['job_title'] ?> </h2>
            <div>
                <h4 style="margin-left:180px; margin-top:-13px"> <?= $row['training_place']?>/<?= $row['experience_category']?> </h4><br>
                <h4 style="margin-top:5px; font-size:14px;"> from <?= $row['start_month']?> to <?= $row['end_month']?> </h4><br>
            </div>
            <p style="font-family:'Segoe UI', Tahoma, Geneva;  width: 1050px"> <?= $row['description']?> </p><br>

        </div>
    
    <?php } } ?>
  
</div>
</body>
</html>