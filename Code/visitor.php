<?php

include_once 'dbconnect.php';

if(isset($_POST['btn-signup']))
{
    $firstname=mysql_real_escape_string($_POST['firstname']);
	$lastname=mysql_real_escape_string($_POST['lastname']);
	$studentyear=mysql_real_escape_string($_POST['studentyear']);
	$branch=mysql_real_escape_string($_POST['branch']);
	$contactno=mysql_real_escape_string($_POST['contactno']);
	$roomno=mysql_real_escape_string($_POST['roomno']);
	$studentname=mysql_real_escape_string($_POST['studentname']);
	$relation=mysql_real_escape_string($_POST['relation']);
	$purpose=mysql_real_escape_string($_POST['purpose']);
	$date=mysql_real_escape_string($_POST['date']);

    $firstname=trim($firstname);
	$lastname=trim($lastname);	
	$studentyear=trim($studentyear);
	$branch=trim($branch);
	$roomno=trim($roomno);
	$studentname=trim($studentname);
	$relation=trim($relation);
	$purpose=trim($purpose);
	$contactno=trim($contactno);
	$date=trim($date);
	
	if(mysql_query("INSERT INTO visitorslog(RoomNo,FirstName,Date,PersonToVisit,Relation,Purpose,LastName,Branch,Contact,StudentYear)
		            VALUES('$roomno','$firstname','$date','$studentname','$relation','$purpose','$lastname','$branch','$contactno','$studentyear')"))
    
    
		{
			?>
			<script>alert('successfully registered ');</script>
			<?php
		}
		else
		{
			?>
			<script>alert('error while registering you...');</script>
			
			<?php
			die("Error:".mysql_error());
		}	
        
}    

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="bootstrap-3.3.6/dist/css/bootstrap.min.css">
  <script src="bootstrap-3.3.6/docs/assets/js/vendor/jquery.min.js"></script>
  <script src="bootstrap-3.3.6/dist/js/bootstrap.min.js"></script>
<title>Visitor Registration</title>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">HOSTEL MGMT</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      
      
    </ul>
	
  </div>
  
</nav>

<div>
  <form class="form-horizontal" method="post">
<fieldset>

<!-- Form Name -->
<center><legend>Visitor Log</legend></center>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="firstname">First Name</label>  
  <div class="col-md-4">
  <input id="firstname" name="firstname" type="text" placeholder="Enter First Name Here" class="form-control input-md" required="">
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="lastname">Last Name</label>  
  <div class="col-md-4">
  <input id="lastname" name="lastname" type="text" placeholder="Enter Last Name Here" class="form-control input-md" required="">
    
  </div>
</div>



<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="roomno">Room Number</label>  
  <div class="col-md-4">
  <input id="roomno" name="roomno" type="text" placeholder="Enter Room Number Here" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="date">Date</label>  
  <div class="col-md-4">
  <input id="date" name="date" type="text" placeholder="YYYY-MM-DD" class="form-control input-md" required="">
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="studentname">Person To Visit</label>  
  <div class="col-md-4">
  <input id="studentname" name="studentname" type="text" placeholder="Person To Visit" class="form-control input-md" required="">
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="contactno">Contact Number</label>  
  <div class="col-md-4">
  <input id="contactno" name="contactno" type="text" placeholder="Enter Contact Number Here" class="form-control input-md" required="">
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="purpose">Purpose of Visit</label>  
  <div class="col-md-4">
  <input id="purpose" name="purpose" type="text" placeholder="Enter Purpose of Visit" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="studentyear">Student Year</label>
  <div class="col-md-4">
    <select id="studentyear" name="studentyear" class="form-control">
      <option value="FY">FY</option>
      <option value="SY">SY</option>
      <option value="TY">TY</option>
      <option value="Btech">Btech</option>
      
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="branch">Branch</label>
  <div class="col-md-4">
    <select id="branch" name="branch" class="form-control">
      <option value="Computers">Computers</option>
      <option value="IT">IT</option>
      <option value="EXTC">EXTC</option>
      <option value="Electrical">Electrical</option>
      <option value="Electronics">Electronics</option>
      <option value="Civil">Civil</option>
	  <option value="Mechanical">Mechanical</option>
	  <option value="Textile">Textile</option>
	  <option value="Production">Production</option>
	  <option value="Diploma">Diploma</option>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="relation">Relation</label>
  <div class="col-md-4">
    <select id="relation" name="relation" class="form-control">
      <option value="Family">Family</option>
      <option value="Friend">Friend</option>
      <option value="Other">Other</option>
      
    </select>
  </div>
</div>



<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="btn-signup"></label>
  <div class="col-md-4">
    <button id="btn-signup" name="btn-signup" class="btn btn-primary">Submit</button>
  </div>
</div>

</fieldset>
</form>

</div>
</head>
</body>
</html>