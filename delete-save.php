<?php
require 'conn.php';

$id = $_POST['index'];

$vstudentnumber=$_POST['txtstudentnumber'];
$vlastname=$_POST['txtlastname'];
$vfirstname=$_POST['txtfirstname'];
$vmiddlename=$_POST['txtmiddlename'];

$vindex=0;

$sql = "DELETE FROM studentTable WHERE student_Index=$id";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

?>
<script>
    alert("Record Deleted.");								
</script>
<meta  http-equiv="refresh" content=".000001;url=index.php" />