<?php
// echo "H";


// $GLOBALS['server']="localhost";
// $GLOBALS['username']="root123";
// $GLOBALS['password']="root123";
// $GLOBALS['database']="id12804162_emp";


	// $name=$_POST['name'];
	// $dob=$_POST['dob'];
	// $dob = date("Y/m/d", strtotime($_POST['dob']));

       if(isset($_POST['submit']))
       {
	$date1 = strtr($_REQUEST['dob'], '/', '-');
	$dob= date('Y-m-d', strtotime($date1));




	$phoneno=$_POST['phoneno'];
	$emailid=$_POST['emailid'];
	$designation=trim($_POST['designation']);
	$salary=$_POST['salary'];
	// $id=$_POST['id'];
	

// define variables and set to empty values
$name_Error ="";
$name = $email = $phone = $design = $salary = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    if(!preg_match("/^[a-zA-Z]*$/", $name)){
    	$name_Error="Only letters ans whitespaces are allowed";
    }
  }

  // if (empty($_POST["emailid"])) {
  //   $emailError = "Name is required";
  // } else {
  //   $name = test_input($_POST["emailid"]);
  //   if(!preg_match("/^[a-zA-Z]*$/", $name)){
  //     $emailid_error="Only letters ans whitespaces are allowed";
  //   }
  // }

  function test_input($data)
  {
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
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
}}
?>