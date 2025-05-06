<?php
include 'conn.php';
    $fname = $_POST['txtfirstname'];
    $lname = $_POST['txtlastname'];
    $mname = $_POST['txtmiddlename'];
    $index = $_POST['index'];
    $old = $_POST['txtstudentnumberold'];
    $new = $_POST['txtstudentnumber'];
$vdup = 0;
    if($new==$old)
{
    
    $vdup=0;
}
else
{

    $sql = "SELECT * FROM studenttable where studentNumber='$new'";
        $result = $conn->query($sql);
        if($result->num_rows > 0) 
        {
            while($row = $result->fetch_assoc())
            {
                
                $vdup+=1;
                
            }
        }


}



if($vdup==0){
    $conn->query("UPDATE `studenttable` SET `studentFirstName` = '$fname', `studentNumber` = '$new',
     `studentLastName` = '$lname', `studentMiddleName` = '$mname' WHERE `studenttable`.`student_Index` = $index");
     echo "Updated Record.";
    }

else{
    echo "                  Error Updating Record. Duplicate.";
    ?>
    <a href="update.php?id=<?php echo $index ?>">Back</a>
    <?php
}    
?>
<html>
<head><title>Checkout</title></head>
<body>
<a href="index.php">Back to Main</a>

</body>


</html>
