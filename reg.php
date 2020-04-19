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

</style>
<?php include("form_process.php");?>

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

	 <form class="form-horizontal" method="post" action= " insertion.php">
		
		 <div class="form-group">
                <label class="control-label lab col-sm-3" for="name">Name:</label>
                <div class="col-sm-2">
		<!-- <p>Name -->
				<input type="text" placeholder="Enter a Name" name="name" size="15">
				<span class="error"> <? = $name_error; ?></span>
		<!-- </p> -->
				</div>
	</div>


		 <div class="form-group">
                  <!-- <label class="control-label">Dob</label> -->
                <label class="control-label lab col-sm-3" for="dob">Dob</label>
                 <div class="col-sm-2">
                  <div class='input-group date' id='datetimepicker1'>
                    	 <input type='text' class="form-control" name="dob" />
                    	 <span class="input-group-addon">
                    	 	<span class="glyphicon glyphicon-calendar"></span>
                     	</span>

                  </div>
                </div>
               </div>


             <div class="form-group">
                <label class="control-label lab col-sm-3" for="email">Email:</label>
                <div class="col-sm-3">
                  <input type="email" class="form-control" id="email" name="emailid" placeholder="Enter email" required>
                  <span class="error"> <? = $emailid_error; ?></span>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label lab col-sm-3" for="phoneno">Phone Number:</label>
                <div class="col-sm-2">
                  <input type="text"  maxlength="10"  size="10" class="form-control" id="phoneno" name="phoneno" placeholder="Enter phno"  required pattern="^\d{10}$"  oninvalid="setCustomValidity('Enter 10 digits only')"  oninput="setCustomValidity('')"; > 
                  <span class="error"> <? = $phoneno_error; ?></span>
                </div>
              </div>

		  <div class="form-group">
                <label class="control-label lab col-sm-3" for="designation">Designation:</label>
                <div class="col-sm-2">
                  <input type="text"  style="color: black;" id="designation" name="designation"  class="form-control"placeholder="Enter designation" required>
                  <span class="error"> <? = $designation_error; ?></span>
                </div>
              </div>
           
       <div class="form-group">
                <label class="control-label lab col-sm-3" for="salary" >Salary:</label>
                <div class="col-sm-2">
                  <input type="text"  style="color: black;" name="salary" id="salary"  class="form-control"placeholder="Enter salary" required  >
                  <span class="error"> <? = $salary_error; ?></span>
                </div>
              </div>
              
           
           
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

	 <div id="menu1" class="container tab-pane fade"><br>
      <h3></h3>
      <?php include("conn.php");
         error_reporting(0);
        $query="SELECT * FROM personal INNER JOIN profesional ON personal.Id=profesional.Id  ";
        $data=mysqli_query($conn,$query);
        $total=mysqli_num_rows($data);
       if($total!=0)
      {
  
        ?>
  
  <table>
    <tr>
      <td ><b>Name</b></td>
      <td><b>Dob</b></td>
      <td><b>Email</b></td>
      <td><b>Phoneno</b></td>
      <td><b>Salary</b></td>
      <td><b>Designation</b></td>
      <!--<td><b>Id</b></td>-->
      <th colspan="2">Operations</th>

    </tr>
  

  <?php 
  while ($result=mysqli_fetch_assoc($data)) {
    echo " <tr>
      <td>".$result['Name']."</td>
      <td>".$result['Dob']."</td>
      <td>".$result['Email']."</td>
      <td>".$result['Phoneno']."</td>
      <td>".$result['Salary']."</td>
      <td>".$result['Designation']."</td>
      

      <td><a href='update6.php? nm=$result[Name] & dob=$result[Dob] & ph=$result[Phoneno] &em=$result[Email] &ds=$result[Designation] & sal=$result[Salary] & id=$result[Id]' onClick=\"javascript:return confirm('are you sure you want to edit this?');\">Edit</a></td>
      <td><a href='delete.php? id=$result[Id]' onClick=\"javascript:return confirm('are you sure you want to delete this?');\">Delete</td>

      </tr>" ;
    }
  }
else{
      echo "No record found";
}
?>


</table>
    </div>
    
  </div>
</div>

</body>
</html>


</body>
</html>