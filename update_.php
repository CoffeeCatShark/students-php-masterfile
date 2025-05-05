<?php
include 'conn.php';
    $fname = $_POST['txtfirstname'];
    $lname = $_POST['txtlastname'];
    $mname = $_POST['txtmiddlename'];
    $index = $_POST['index'];

    $conn->query("UPDATE `studenttable` SET `studentFirstName` = '$fname',
     `studentLastName` = '$lname', `studentMiddleName` = '$mname' WHERE `studenttable`.`student_Index` = $index");

?>

<html>
<head><title>Checkout</title></head>
<body>
<a href="index.php">Back to Main</a>

</body>


</html>
