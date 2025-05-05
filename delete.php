<?php
require 'conn.php';
$id = $_GET['id'];

$sql = "SELECT * FROM studenttable where student_Index='$id'";
        $result = $conn->query($sql);
        if($result->num_rows > 0) 
        {
            while($row = $result->fetch_assoc())
            {
                
                $vlastname=$row['studentLastName'];			
                $vfirstname=$row['studentFirstName'];			
                $vmiddlename=$row['studentMiddleName'];			
                $vstudentnumber = $row['studentNumber'];
            }
        }

?>
<html>
    <body>
    <form action="delete-save.php" method="post">
 
        <table border="1">    
            <tr>
                <td colspan="2" align=center>
                    <b>Delete Student</b>
                </td>
            </tr>
            <tr>
                <td>
                <label >Enter Student Number:</label>
                </td>
                <td>
                <input readonly type="text" name="txtstudentnumber" id="txtstudentnumber" value="<?php echo $vstudentnumber; ?>">
                </td>
            </tr>
            
            <tr>
                <td>
                <label >Enter Last Name:</label>
                </td>
                <td>
                <input readonly type="text" name="txtlastname" id="txtlastname" value="<?php echo $vlastname; ?>">
                </td>
            </tr>
            
            <tr>
                <td>
                <label >Enter First Name:</label>
                </td>
                <td>
                <input type="text" name="txtfirstname" id="txtfirstname" value="<?php echo $vfirstname; ?>">
                </td>
            </tr>
            
            <tr>
                <td>
                <label >Enter Middle Name:</label>
                </td>
                <td>
                <input type="text" name="txtmiddlename" id="txtmiddlename" value="<?php echo $vmiddlename; ?>">
                <input type="hidden" value='<?php echo $id?>' name="index">
                </td>
            </tr>
            
            <tr>
                <td colspan="2" align=center>
                <input type="submit" value="Delete Record" />
                <button type="reset" class="btn btn-warning btn-s" onClick="window.location.href='index.php'">Back</button>
                </td>
            </tr>
        </table>
    </form>
        
    </body>
</html>