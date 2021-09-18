<?php
session_start();
if(isset($_SESSION['user'])!="")
{
	header("Location: index.php");
}
include_once 'dbconnect.php';

if(isset($_POST['btn-signup']))
{
	header("Location: index.php");
    	$firstname=mysql_real_escape_string($_POST['firstname']);
	$middlename=mysql_real_escape_string($_POST['middlename']);
	$lastname=mysql_real_escape_string($_POST['lastname']);
	$emailid=mysql_real_escape_string($_POST['EmailID']);
	$dateofbirth=mysql_real_escape_string($_POST['dateofbirth']);
	$monthofbirth=mysql_real_escape_string($_POST['monthofbirth']);
	$yearofbirth=mysql_real_escape_string($_POST['yearofbirth']);
	$regid=mysql_real_escape_string($_POST['regid']);
	$academicyear=mysql_real_escape_string($_POST['academicyear']);
	$branch=mysql_real_escape_string($_POST['branch']);
	$residence=mysql_real_escape_string($_POST['residence']);
	$area=mysql_real_escape_string($_POST['area']);
	$city=mysql_real_escape_string($_POST['city']);
	$contactno=mysql_real_escape_string($_POST['contactno']);
	$fees=mysql_real_escape_string($_POST['fees']);
	$caste=mysql_real_escape_string($_POST['caste']);
	$studentpassword=md5(mysql_real_escape_string($_POST['studentpassword']));
	$DOB=$dateofbirth.'/'.$monthofbirth.'/'.$yearofbirth;

    $firstname=trim($firstname);
	$middlename=trim($middlename);
	$lastname=trim($lastname);
	$emailid=trim($emailid);
	$DOB=trim($DOB);
	$regid=trim($regid);
	$academicyear=trim($academicyear);
	$branch=trim($branch);
	$residence=trim($residence);
	$area=trim($area);
	$city=trim($city);
	$contactno=trim($contactno);
	$fees=trim($fees);
	$caste=trim($caste);
	$studentpassword=trim($studentpassword);
	
    
    // email exist or not
    $query = "SELECT RegistrationID FROM studentdet WHERE RegistrationID='$regid'";
    $result = mysql_query($query);
    
    $count = mysql_num_rows($result); // if registrationID not found then register
    
    if($count == 0){
        
        if(mysql_query("INSERT INTO studentdet(FirstName,MiddleName,LastName,EmailID,DOB,RegistrationID,AcademicYear,Branch,Residence,Area,City,PhoneNumber,Fees,Caste,Student_psswd) VALUES('$firstname','$middlename','$lastname','$emailid','$DOB','$regid','$academicyear','$branch','$residence','$area','$city','$contactno','$fees','$caste','$studentpassword')"))
            {
                ?>
                <script>alert('REGISTRATION SUCCESSFUL');</script>
                <?php
            }
        else
        {
            ?>
            <script>alert('REGISTRATION FAILED');</script>
        <?php
        }    
        }
    else{
        ?>
        <script>alert('REG ID ALREADY TAKEN');</script>
        <?php
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
<title>Student Registration</title>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">HOSTEL MGMT</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      
      
    </ul>
	<
  </div>
  
</nav>

<div>
  <form class="form-horizontal" method="post">
<fieldset>

<!-- Form Name -->
<center><legend>Student Registration</legend></center>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="firstname">First Name</label>  
  <div class="col-md-4">
  <input id="firstname" name="firstname" type="text" placeholder="Enter First Name Here" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="middlename">Middle Name</label>  
  <div class="col-md-4">
  <input id="middlename" name="middlename" type="text" placeholder="Enter Middle Name Here" class="form-control input-md" required="">
    
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
  <label class="col-md-4 control-label" for="EmailID">Email ID</label>  
  <div class="col-md-4">
  <input id="EmailID" name="EmailID" type="email" placeholder="Enter EmailID Here" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="dateofbirth">Date of Birth</label>
  <div class="col-md-2">
    <select id="dateofbirth" name="dateofbirth" class="form-control">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
      <option value="11">11</option>
      <option value="12">12</option>
      <option value="13">13</option>
      <option value="14">14</option>
      <option value="15">15</option>
      <option value="16">16</option>
      <option value="17">17</option>
      <option value="18">18</option>
      <option value="19">19</option>
      <option value="20">20</option>
      <option value="21">21</option>
      <option value="22">22</option>
      <option value="23">23</option>
      <option value="24">24</option>
      <option value="25">25</option>
      <option value="26">26</option>
      <option value="27">27</option>
      <option value="28">28</option>
      <option value="29">29</option>
      <option value="30">30</option>
      <option value="31">31</option>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="monthofbirth">Month of Birth</label>
  <div class="col-md-2">
    <select id="monthofbirth" name="monthofbirth" class="form-control">
      <option value="1">January</option>
      <option value="2">February</option>
      <option value="3">March</option>
      <option value="4">April</option>
      <option value="5">May</option>
      <option value="6">June</option>
      <option value="7">July</option>
      <option value="8">August</option>
      <option value="9">September</option>
      <option value="10">October</option>
      <option value="11">November</option>
      <option value="12">December</option>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="yearofbirth">Year of Birth</label>
  <div class="col-md-2">
    <select id="yearofbirth" name="yearofbirth" class="form-control">
      <option value="1990">1990</option>
      <option value="1991">1991</option>
      <option value="1992">1992</option>
      <option value="1993">1993</option>
      <option value="1994">1994</option>
      <option value="1995">1995</option>
      <option value="1996">1996</option>
      <option value="1997">1997</option>
      <option value="1998">1998</option>
      <option value="1999">1999</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="regid">Registration ID</label>  
  <div class="col-md-4">
  <input id="regid" name="regid" type="text" placeholder="Enter 9-Digit Registration ID" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="academicyear">Academic Year</label>
  <div class="col-md-4">
    <select id="academicyear" name="academicyear" class="form-control">
      <option value="2013 - 14">2013 - 14</option>
      <option value="2014 - 15">2014 - 15</option>
      <option value="2015 - 16">2015 - 16</option>
      <option value="2016 - 17">2016 - 17</option>
      <option value="2017 - 18">2017 - 18</option>
      <option value="2018 - 19">2018 - 19</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="branch">Branch</label>  
  <div class="col-md-4">
  <input id="branch" name="branch" type="text" placeholder="Enter Your Branch Here" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="residence">Residence</label>  
  <div class="col-md-4">
  <input id="residence" name="residence" type="text" placeholder="Enter your Residence Here" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="area">Area</label>  
  <div class="col-md-4">
  <input id="area" name="area" type="text" placeholder="Enter your area Here" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="city">City</label>  
  <div class="col-md-4">
  <input id="city" name="city" type="text" placeholder="Enter your City Here" class="form-control input-md" required="">
    
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
  <label class="col-md-4 control-label" for="fees">Fees</label>  
  <div class="col-md-4">
  <input id="fees" name="fees" type="text" placeholder="Enter Fee Amount Here" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="caste">Caste</label>  
  <div class="col-md-4">
  <input id="caste" name="caste" type="text" placeholder="Enter your Caste Here" class="form-control input-md">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="studentpassword">Password</label>
  <div class="col-md-4">
    <input id="studentpassword" name="studentpassword" type="password" placeholder="Enter Password" class="form-control input-md" required="">
    
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