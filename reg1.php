<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/momentjs/2.14.1/moment.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">







</head>
<body>
<br><style >
td{
  padding:10px;
}
body{
  background-image: url(image3.jpg);
  background-attachement:fixed;
  background-size:cover;
  font-family: new time roman;

}




.lab {
            color: red;
        }   

<style>
.error {color: #FF0000;}
</style>
</head>
<body> 

<?php
// define variables and set to empty values
$nameErr = $emailidErr = $phonenoErr = $designationErr =$salaryErr= "";
$name = $emailid = $phoneno = $designation = $salary ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }



if (empty($_POST["dob"])) {
    $dob = "dob is required";
  } else {
    $dob = test_input($_POST["dob"]);
  }


  
  if (empty($_POST["emailid"])) {
    $emailidErr = "Email is required";
  } else {
    $emailid = test_input($_POST["emailid"]);
  }
    
  if (empty($_POST["phoneno"])) {
    $phonenoErr = "Phoneno is required";
  } else {
    $phoneno = test_input($_POST["phoneno"]);
  }

  if (empty($_POST["designation"])) {
    $designationErr = "";
  } else {
    $designation= test_input($_POST["designation"]);
  }

  if (empty($_POST["salary"])) {
    $salaryErr = "salary is required";
  } else {
    $salary = test_input($_POST["salary"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


<div class="container">
  <h2>CRUD Operations</h2>
  <br>
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#home">CREATE</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu1">VIEW</a>
    </li>
   
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class="container tab-pane active"><br>
      <h3></h3>
             <form  method="post" action= " insertion.php">




<h2>PHP Form Validation Example</h2>
<p><span class="error"></span></p>
<form  class="form-horizontal" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

  <div class="form-group">
      Name: <input type="text" name="name">
      <span class="error"> <?php echo $nameErr;?></span>
      <br><br>
  </div>



  <div class="form-group">
      E-mailId: <input type="text" name="emailid">
      <span class="error"> <?php echo $emailidErr;?></span>
      <br><br>
  </div>

  <div class="form-group">
      Phoneno: <input type="text" name="phoneno">
      <span class="error"><?php echo $phonenoErr;?></span>
      <br><br>
  </div>

    <div class="form-group">
       <!-- <div class="col-sm-2"> -->
      Designation:  <input type="text" name="designation">
      <span class="error"><?php echo $designationErr;?></span>
      <br><br>
    <!-- </div> -->
  </div>

  <div class="form-group">
      Salary: <input type="text" name="salary">
      <br>
      <span class="error"><?php echo $salaryErr;?></span>
      <br><br>
  </div>









  <div class="form-group">
     
   <div class="col-sm-2">
      <div class='input-group date' id='datetimepicker1'>

         Dob: <input type='text' class="form-control" name="dob" />
         <span class="input-group-addon">
         <span class="glyphicon glyphicon-calendar"></span>
         </span>
      </div>

  </div>
</div>














<br>




 <div class="form-group">
                <div class="col-sm-offset-3 col-sm-10">
                  <button type="submit" class="btn btn-primary">Submit</button>
           <button type="submit" class="btn btn-primary">Cancel</button>
                </div>
              </div>
</form>

  <script>
        $(function () {
        // $('#datetimepicker1').datetimepicker();
         $('#datetimepicker1').datetimepicker({format : "DD/MM/YYYY",maxDate: moment()});
        });
        </script>





</body>
</html>