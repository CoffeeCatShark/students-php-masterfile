<?php
include 'conn.php';
    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $mname = $_POST['middle_name'];
    $id = $_POST['student_number'];

    $vdup = 0;
    $vindex=0;

    $sql = "SELECT * FROM studenttable where studentNumber='$id' order by student_Index";
    $result = $conn->query($sql);
    if($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc())
        {
            
            $vdup=1;
            
        }
    }



if($vdup!=0){
    echo "                  Insert Failed. Duplicate ID";
}
else{
    $conn->query("INSERT INTO `studenttable` SET `studentFirstName` = '$fname',
     `studentLastName` = '$lname', `studentMiddleName` = '$mname', `studentNumber` = '$id'");
    echo "                  Student Added Successfully.";
}


?>

<html>
<head><title>Checkout</title></head>
<body>

<a href="index.php">Back to Main</a>

</body>


</html>
