<?php

include 'conn.php';
$studentQuery = "select * from studenttable";
$courseQuery = "select * from course_table";
$studentResult = mysqli_query($conn, $studentQuery);
$courseResult = mysqli_query($conn, $courseQuery);

?>

<head>
    <style>h1 {
    font-size: 25px;}</style>
    <title>Student and Courses</title>
</head>

<body>

<table border="1">

                    <tr>
                        <td>
                            <h1>Student Number</h1>
                        </td>
                        <td>
                            <h1>Student First Name</h1>
                        </td>
                        <td>
                            <h1>Student Last Name</h1>
                        </td>
                        <td>
                            <h1>Student Middle Name</h1>
                        </td>
                    </tr>

                    <tr>
                        <?php
                            while($row = mysqli_fetch_assoc($studentResult)){
                        ?>

                            <td><?php echo $row['studentNumber'] ?></td>
                            <td><?php echo $row['studentFirstName'] ?></td>
                            <td><?php echo $row['studentLastName'] ?></td>
                            <td><?php echo $row['studentMiddleName'] ?></td>
                            <td><a class="btn" href="delete.php?id=<?php echo $row['student_Index'] ?>">Delete</a></td>
                            <td><a class="btn" href="update.php?id=<?php echo $row['student_Index'] ?>">Update</a></td>
                        </tr>
                        <?php
                            }
                        ?>

                    </table>
<hr>
<a href="add-student.html">Add Student</a>


</body>