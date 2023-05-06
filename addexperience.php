<?php
if ($_REQUEST){


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

 
// Escape user inputs for security
$job_title = mysqli_real_escape_string($conn, $_REQUEST['job_title']);
$training_place = mysqli_real_escape_string($conn, $_REQUEST['training_place']);
$experience_category= mysqli_real_escape_string($conn, $_REQUEST['experience_category']);
$start_month= mysqli_real_escape_string($conn, $_REQUEST['start_month']);
$end_month= mysqli_real_escape_string($conn, $_REQUEST['end_month']);
$description= mysqli_real_escape_string($conn, $_REQUEST['description']);

// Attempt insert query execution

$sql = "INSERT INTO experiences (job_title, training_place, experience_category, start_month, end_month,description)
values ('$job_title','$training_place','$experience_category','$start_month','$end_month','$description')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
$conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add experience.</title>
    <link rel="stylesheet" href="css/MyStyle.css">
</head>
<body>
    <nav>
        <ul>
            <li> <a class="nav-link" href="home.php" > Personal Information</a></li>
            <li> <a class="nav-link"href="viewcourses.php">Courses Information</a></li>
            <li> <a class="nav-link"href="viewexperience.php">Experiences Information</a></li>
            <li> <a class="nav-link"href="addcourse.php">Add Course</a></li>
            <li> <a class="nav-link" href="addexperience.php">Add Experience</a></li>
        </ul>
        <img src="img/uni.png" class="uni">
    </nav>
    <div class="div1">
        <div><form method="POST">
            <table>
            <tr><td>experience category: </td> <td><input type="text" name="experience_category" ></td></tr>
            <tr><td>experience title: </td> <td><input type="text" name="job_title"> </td></tr>
            <tr><td>Start month:</td> <td> <input type="month" name="start_month"></td></tr>
            <tr><td>End month:</td> <td><input type="month" name="end_month"></td></tr>
            <tr><td>Institution </td> <td> <input type="text" name="training_place"></td></tr>
            <tr><td>Description: </td> <td> <textarea name="description" rows="6" cols="50" > </textarea> </td></tr>
            <td> <input type="submit" class="s" value="Save"></td>
            <td> <input type="reset" class="r" value="Reset"></td> 
        </table>
        </form></div>
        <div>
            <img src="img\experience.jpeg" class="pic">
        </div>
    </div>

</body>
</html>