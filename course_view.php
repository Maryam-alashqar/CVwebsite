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

$sql = "SELECT * FROM courses where id=". $_GET['id'];
$result = $conn->query($sql);
//$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attachment</title>
    <link rel="stylesheet" href="css/MyStyle.css">
    
    <style>
        .odd td {
            background-color: #E5E5E5;
        }
    </style>
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
    <div class="clear"></div>
    <div>

        <?php if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {

            
               ?>
               
                <h1 class="head1"> Course "<?= $row["course_name"]?>"</h1>
                <div style="font-family:'Segoe UI', Tahoma, Geneva; margin-left:70px; margin-top:10px; font-size:14px;">
                    <p>from <?= $row['start_date']?> To <?php echo $row['end_date']?>, totally <?php echo $row['total_hours']?>training hours
                    <br> Institution was "<?php echo $row['institution']?>"</p>
                </div>
                    <img src="<?= $row["attachment"]?>" class="cerfpic">
              
                    
        <?php  } } ?>
    </div>
</body>

</html>