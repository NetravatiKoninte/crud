<?php
// echo "H";


// $GLOBALS['server']="localhost";
// $GLOBALS['username']="root123";
// $GLOBALS['password']="root123";
// $GLOBALS['database']="id12804162_emp";


	// $name=$_POST['name'];
	// $dob=$_POST['dob'];
	// $dob = date("Y/m/d", strtotime($_POST['dob']));

	$date1 = strtr($_REQUEST['dob'], '/', '-');
	$dob= date('Y-m-d', strtotime($date1));




	$phoneno=$_POST['phoneno'];
	$emailid=$_POST['emailid'];
	$designation=trim($_POST['designation']);
	$salary=$_POST['salary'];
	$id=$_POST['id'];
	

// define variables and set to empty values
$name_Err ="";
$name = $email = $phone = $design = $salary = "";
 function test_input($data)
  {
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
  }
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $name_Err = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    if(!preg_match("/^[a-zA-Z]*$/", $name)){
    	$name_Err="Only letters ans whitespaces are allowed";
    }
  }

  // if (empty($_POST["email"])) {
  //   $emailErr = "Email is required";
  // } else {
  //   $email = test_input($_POST["email"]);
  // }

  // if (empty($_POST["website"])) {
  //   $website = "";
  // } else {
  //   $website = test_input($_POST["website"]);
  // }

  // if (empty($_POST["comment"])) {
  //   $comment = "";
  // } else {
  //   $comment = test_input($_POST["comment"]);
  // }

  // if (empty($_POST["gender"])) {
  //   $genderErr = "Gender is required";
  // } else {
  //   $gender = test_input($_POST["gender"]);

  // }
  
 
}


$GLOBALS['conn1']=new mysqli('localhost','root','','test',"3325");
// Check connection
if ($conn1->connect_error) {
    die("Connection failed: " . $conn1->connect_error);
}
// echo "Connected successfully";    

$conn1 = mysqli_connect('localhost','root','','test',"3325");

$sql1="INSERT INTO personal (Name,Dob,Email,Phoneno) VALUES('$name','$dob','$emailid','$phoneno')";
$result1=mysqli_query($conn1,$sql1) or die(mysqli_error($conn1));
$last_id=mysqli_insert_id($conn1);
 if($result1==1)
 {
 	$sql2="INSERT INTO profesional (Designation,Salary,Id) VALUES('$designation','$salary',' $last_id')";

 	 $result2=mysqli_query($conn1,$sql2) or die(mysqli_error($conn1));;

 	 if($result2==1)
 	 {
 	   echo '<script language="javascript">';
        echo 'alert("Successfully Inserted into database"); ';
        echo '</script>';
        echo "<a href='checnew.php?href=#menu1'> Goback to home page and Check the  List in view tab</a>";
        
        // echo "<script>";
        // echo " alert('Successfully Inserted record into database');      
        // window.location.href='checnew.php?href=#menu1';
        // </script>";
 	 }
 }


// echo" insserted";


//mysqli_query($conn,$sql);
//mysqli_query($conn,$sql1);
// if(mysqli_multi_query($conn1, $sql1)){  
//     echo "New records created successfully";}


mysqli_close($conn1);

?>
