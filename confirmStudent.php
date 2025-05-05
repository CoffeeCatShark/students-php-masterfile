<?php
    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $mname = $_POST['middle_name'];
    $id = $_POST['student_number'];



$conn = new mysqli('localhost','root','','infomandbv2');
if($conn->connect_error){
    die('connection failed : '.$conn->connect_error);
}
else{
    $stmt = $conn->prepare('insert into studenttable(studentNumber, studentFirstName, studentLastName, studentMiddleName)
        values(?,?,?,?)');
    $stmt->bind_param("isss",$id,$fname,$lname,$mname);
    $stmt->execute();
    echo "Customer Added Successfully";
}


?>

<html>
<head><title>Checkout</title></head>
<body>

<a href="index.php">Back to Main</a>

</body>


</html>
