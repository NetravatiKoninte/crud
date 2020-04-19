<?php
$id=$_GET['id'];
 include("conn.php");


 // $query="DELETE pe,pr FROM personal As pe LEFT JOIN professional As pr ON pe.Id=pr.Id  Where pe.Id='$id'";

$query= "DELETE personal , professional  FROM personal  INNER JOIN professional  
WHERE personal.Id= professional.Id and personal.Id = '$id'";


// $query = "DELETE FROM personal WHERE personal.Id = '$id'";
// $query = "DELETE FROM professional WHERE professional.Id = '$id'";
$data = mysqli_query($conn, $query) or die(mysqli_error($conn));


// $data=mysqli_query($conn,$query);
if($data)
{
// 	echo '<script language="javascript">';
//     echo 'alert("Successfully  deleted the record from database"); ';
//     echo '</script>';
//     echo "<a href='checnew.php?href=#menu1'>Go back to home page and check in the View tab </a>";
    
    echo "<script>";
    echo " alert('successfully deleted record from database');      
    window.location.href='checnew.php?href=#menu1';
    </script>";
}
else
{
	echo "Failed to Delete";
}

?>