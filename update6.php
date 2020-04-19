<?php
 if(isset($_POST['submit']))
 {

   $_GET['nm'];
 $_GET['dob'];
 $_GET['ph'];
 $_GET['em'];
 $_GET['ds'];
 $_GET['sal'];
 $_GET['id'];
 include("conn.php");
 
 }

?>

<style>

.lab {
            color: red;
     } 
body{
      background-image: url(image3.jpg);
      background-attachement:fixed;
      background-size:cover;
      font-family: new time roman;

    }
        
</style>

<html>

	<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/momentjs/2.14.1/moment.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

</head>
	
<body>
	<div class="container">
		<h2 style="margin-left: 350px;margin-top: 2px;">updating </h2>
		<div class="row" style="margin-top: 10px;margin-left: 100px;">
        <div class="col-md-0"></div>
	<form class="form-horizontal" method="post" action="" >

              <div class="form-group">
                <label class="control-label lab col-sm-3" for="name">Name:</label>
                <div class="col-sm-3">
				            <input type="text" class="form-control" id="Name"  name="name" value="<?php echo $_GET['nm'] ?>" onfocus="this.value = this.value;" >
                </div>
              </div>

              <div class="form-group">
                <label class="control-label lab col-sm-3" for="email">Email:</label>
                <div class="col-sm-3">
                 <input type="text" class="form-control" id="emailid" name="emailid" value="<?php echo $_GET['em'] ?>"  onfocus="this.value = this.value;"/>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label lab col-sm-3" for="phoneno">Phone Number:</label>
                <div class="col-sm-3">
                 <input type="text" class="form-control" id="phoneno" name="phoneno" value="<?php echo $_GET['ph'] ?>"   > 
                </div>
              </div>

               <div class="form-group">
                  <!-- <label class="control-label">Dob</label> -->
                   <label class="control-label lab col-sm-3" for="dob">Dob</label>
                   <div class="col-sm-2">
                  <div class='input-group date' id='datetimepicker1'>
                     <input type='text' class="form-control" name="dob" value="<?php echo $_GET['dob'] ?>" />
                     <span class="input-group-addon">
                     <span class="glyphicon glyphicon-calendar"></span>
                     </span>
                  </div>
                </div>
               </div>
              

         <div class="form-group">
                <label class="control-label lab col-sm-3" for="designation">Designation:</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="designation" name="designation" value="<?php echo $_GET['ds'] ?>"/>
                </div>
         </div>
           
       <div class="form-group">
                <label class="control-label lab col-sm-3" for="salary" >Salary:</label>
            <div class="col-sm-3">
                 <input type="text" class="form-control" id="salary" name="salary" value="<?php echo $_GET['sal'] ?>">
            </div>
       </div>


              
              
           <div class="form-group">
                <div class="col-sm-offset-4 col-sm-10">	
	       			<input type="submit" name="submit" value="Update" >
		   		</div>
		   	</div>
            </form>
        </div>

    </div>

    
      <script>
      $(function () {
      // $('#datetimepicker1').datetimepicker();
      $('#datetimepicker1').datetimepicker({format : "DD/MM/YYYY",
  maxDate: moment()});
      });

      </script>






			<?php

			 if(isset($_POST['submit']))
			 {
			 	$name=$_POST['name'];
			 	// $dob=$_POST['dob'];
        $date1 = strtr($_REQUEST['dob'], '/', '-');
        $dob= date('Y-m-d', strtotime($date1));
			 	$emailid=$_POST['emailid'];
			 	$phoneno=$_POST['phoneno'];
			 	$id= $_GET['id'];
			 	$designation=trim($_POST['designation']);
			 	$salary=$_POST['salary'];
			 	
  $query="UPDATE personal INNER JOIN profesional ON personal.Id = profesional.Id SET salary = '$salary' , Email='$emailid',Phoneno='$phoneno',Designation='$designation',Name='$name',Dob='$dob' where profesional.Id='$id'";



			
		 	$data=mysqli_query($conn,$query);
			 	if($data)
			 	{
			
                    
                    
                    // echo "<script>";
                    // echo " alert('update has successfully Done.');      
                    // window.location.href='checnew.php?href=#menu1';
                    // </script>";
                    
                    echo '<script language="javascript">';
                    echo 'alert("Successfully  Updated the record from database"); ';
                    echo '</script>';
                    echo "<a href='checnew.php?href=#menu1'>Go back to home page and check in the View tab </a>";
					
			 	}
			 	else{
			 	   //  echo '<script language="javascript">';
        //             echo 'alert("Record Not Updated"); ';
        //             echo '</script>';
			 		echo "<font color='red'; font size=10px>Record Not Updated." ;
			 //		echo	'<a href="#">Record Not Updated</a>';
			 	}
			 }
			 else{
			 	echo  "<font color='blue'>click on button to save changes";
			 }

			 ?>
