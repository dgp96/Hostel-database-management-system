<?php
include_once 'dbconnect.php';
$id=mysql_real_escape_string($_POST['ID']);
 $query = "SELECT * FROM studentdet WHERE RegistrationID = '$id'";
     $results = mysql_query($query);
?>

<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="bootstrap-3.3.6/dist/css/bootstrap.min.css">
  <script src="bootstrap-3.3.6/docs/assets/js/vendor/jquery.min.js"></script>
  <script src="bootstrap-3.3.6/dist/js/bootstrap.min.js"></script>

  
  <style>
  
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">HOSTEL MGMT</a>
    </div>
   
	<ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php?logout">LOGOUT<span class="glyphicon glyphicon-log-out"></span></a></li>
    </ul>
  </div>
  
</nav>


<form  method="post" class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Form Name</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="ID">ID</label>  
  <div class="col-md-4">
  <input name="ID" class="form-control input-md" id="ID" required="" type="text" placeholder="ID for details">
    
  </div>
</div>
</form>

<?php
$row = mysql_fetch_array($results);?>

<table class="table" >
<tr><td>First Name</td><td><?php echo $row['FirstName']?></td></tr>
<tr><td>Middle Name</td><td><?php echo $row['MiddleName']?></td></tr>
<tr><td>Last Name</td><td><?php echo $row['LastName']?></td></tr>
<tr><td>Birthdate</td><td><?php echo $row['DOB']?></td></tr>
<tr><td>ID</td><td><?php echo $row['RegistrationID']?></td></tr>
<tr><td>Caste</td><td><?php echo $row['Caste']?></td></tr>
<tr><td>Email-ID</td><td><?php echo $row['EmailID']?></td></tr>
<tr><td>Academic Year</td><td><?php echo $row['AcademicYear']?></td></tr>
<tr><td>Contact No</td><td><?php echo $row['PhoneNumber']?></td></tr>
<tr><td>Fees</td><td><?php echo $row['Fees']?></td></tr>
<tr><td>Bldg Name</td><td><?php echo $row['Residence']?></td></tr>
<tr><td>Area</td><td><?php echo $row['Area']?></td></tr>
<tr><td>City</td><td><?php echo $row['City']?></td></tr>
</table>

</body>
</html>