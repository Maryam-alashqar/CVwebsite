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

$sql = "SELECT * FROM courses";
$result = $conn->query($sql);
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course info.</title>
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
    <div class="head1">
        <h1>All courses Information</h1>
    </div>
    <div class="clear"></div>


    <table class="ctable" border="1">
        <tr class="tr1">
            <th rowspan="2">#</th>
            <th rowspan="2"> Course Name </th>
            <th rowspan="2"> Total Hours </th>
            <th colspan="2"> Date </th>
            <th rowspan="2"> Institution </th>
            <th rowspan="2"> Attachment </th>
            <th rowspan="2" class="th1"> Notes </th>
        </tr>
        <tr class="tr1">
            <td> Form</td>
            <td> TO</td>
        </tr>
        <?php if ($result->num_rows > 0) {
            // output data of each row
            $i = 0;
            while ($row = $result->fetch_assoc()) {
        ?>


                <tr class="<?=  $i++ % 2 == 0 ? 'odd' : 'even' ?>">

                    <td><?= $row["id"] ?></td>
                    <td><?= $row["course_name"] ?></td>
                    <td><?= $row["total_hours"] ?></td>
                    <td> <?= $row["start_date"] ?></td>
                    <td><?= $row["end_date"] ?></td>
                    <td><?= $row["institution"] ?></td>
                    <td><a href="course_view.php?id=<?= $row['id'] ?>" target="_blank">view</a></td>
                    <td> <?= $row["notes"] ?></td>
                </tr>


        <?php }
        }  ?>
    </table>
</body>

</html>