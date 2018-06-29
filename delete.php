<?php  
 
include("kone.php");  
$delete_id=$_GET['del'];  
$delete_query="delete from data WHERE nim='$delete_id'";//delete query  
$run=mysqli_query($dbcon,$delete_query);  
if($run)  
{  
//javascript function to open in the same window   
    echo "<script>window.open('admin.php?deleted=user has been deleted','_self')</script>";  
}  
  
?>