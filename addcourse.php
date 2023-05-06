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
$course_name = mysqli_real_escape_string($conn, $_REQUEST['course_name']);
$total_hours = mysqli_real_escape_string($conn, $_REQUEST['total_hours']);
$start_date= mysqli_real_escape_string($conn, $_REQUEST['start_date']);
$end_date= mysqli_real_escape_string($conn, $_REQUEST['end_date']);
$attachment= mysqli_real_escape_string($conn, $_REQUEST['attachment']);
$institution= mysqli_real_escape_string($conn, $_REQUEST['institution']);
$notes= mysqli_real_escape_string($conn, $_REQUEST['notes']);

// Attempt insert query execution

$sql = "INSERT INTO courses (course_name, total_hours, start_date, end_date, attachment,institution, notes)
values ('$course_name','$total_hours','$start_date','$end_date','$attachment','$institution','$notes')";


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
    <title>Add course</title>
    <link rel="stylesheet" href="css/MyStyle.css">
    
</head>
<body>
    <nav>
        <ul>
            <li> <a class="nav-link" href="home.php" > Personal Information</a></li>
            <li> <a class="nav-link" href="viewcourses.php">Courses Information</a></li>
            <li> <a class="nav-link" href="viewexperience.php">Experiences Information</a></li>
            <li> <a class="nav-link" href="addcourse.php">Add Course</a></li>
            <li> <a class="nav-link" href="addexperience.php">Add Experience</a></li>
        </ul>
        <img src="img/uni.png" class="uni">
    </nav>
    <div class="div1">
       
            <div><form method="post">
                 <table>
                     <tr><td>Course Name: </td> <td><input type="text" name="course_name"></td></tr>
                     <tr><td>Number of hours: </td> <td><input type="text" name="total_hours"> </td></tr>
                     <tr><td>Start date:</td> <td> <input type="date" name="start_date"></td></tr>
                     <tr><td>End date:</td> <td><input type="date" name="end_date"></td></tr>
                     <tr><td>Attacment: </td><td> 
                         <input type="radio" id="file" name="attachment" value="file">
                         <label for="file"> File  </label>
                         <input type="radio" id="link" name="attachment" value="link">
                         <label for="link"> Link  </label>
                        </td></tr>
                     <tr><td>URL: </td> <td> <input type="URL" name="attachment"></td></tr>
                     <tr><td>Choose File: </td> <td> <input type="file" name="attachment"></td></tr>
                     <tr><td>Institution: </td> <td><input type="text" name="institution"></td></tr>
                     <tr><td>Notes: </td> <td> <textarea name="notes" rows="6" cols="30" > </textarea> </td></tr>
                     <td> <input type="submit" class="s" value="Save"></td>
                     <td> <input type="reset" class="r" value="Reset"></td>    
                 </table> 
                </form></div>

        
    <div>
        <img src="img/pic.jpg" class="pic">
    </div>
</div>
<div class="clear"></div>

</body>
</html>