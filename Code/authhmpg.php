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
  .pran{
	  position:absolute;
	  top:100px;
	  left:200px;
	  float:right;
	  
  }
  
  
<!--
  #missing{
	  position:absolute;

  
  #leave{
	  position:absolute; 
  }
	  
  
  #comm{
	   position:absolute;
  }
  
  #comp{
	   position:absolute;
  }
  
  #view{
	   position:absolute;
  }
  
  #fee{
	   position:absolute;
      float:right;
  }
  
  #allot{
	   position:absolute;
  }
  
  #notice{
	   position:absolute;
  }
  -->
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

<div class="container">
  <div class="row">
  <div class="col-md-3">
  <ul class="nav nav-pills nav-stacked">
    <li class="active"><a data-toggle="pill" href="#home" class="mylink">Home</a></li>
    <li><a data-toggle="pill" href="#missing" class="mylink">Missing Items</a></li>
    <li><a data-toggle="pill" href="#leave" class="mylink">View Leave Application</a></li>
    <li><a data-toggle="pill" href="#comm" class="mylink">View Comments</a></li>
	<li><a data-toggle="pill" href="#comp" class="mylink">View Complaints</a></li>
	<li><a data-toggle="pill" href="#view" class="mylink">View Profile</a></li>
	<li><a data-toggle="pill" href="#fee" class="mylink">View Fee Receipt</a></li>
	<li><a data-toggle="pill" href="#allot" class="mylink">Room Allotments</a></li>
	<li><a data-toggle="pill" href="#notice" class="mylink">Create Notice</a></li>
  </ul>
  </div>

<div class="pran">
  <div class="tab-content col-md-9">
  <div id="view" class="tab-pane fade">
     <form   method="post" class="form-horizontal">
<!--<fieldset>-->

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

</div>  
  
  
  </div>
  </div>
  <div class="tab-content col-md-9">
  <div id="fee" class="tab-pane fade">
  <form  method="post" action="viewdocs.php"  class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Form Name</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="receipt">Student ID</label>  
  <div class="col-md-4">
  <input name="receipt" class="form-control input-md" id="receipt" required="Required field" type="text" placeholder="ID for receipt">
    
  </div>
</div>

</fieldset>
</form> 

 </div>
  </div>
  
  <div class="tab-content col-md-9">
  <div id="notice" class="tab-pane fade">
  <form class="form-horizontal" action="Notice.php" method="post">

<!-- Form Name -->
<legend>Notice Details</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="date">Date</label>  
  <div class="col-md-4">
  <input id="date" name="date" type="text" placeholder="DD/MM/YYYY" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Notice">Notice</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="Notice" name="Notice"></textarea>
	
  </div>
</div>
<input type="submit" value="Submit Notice"/>
</fieldset>
</form>
</div>

<div class="tab-content col-md-9">
<div id="missing" class="tab-pane fade">
<?php
	$sql='SELECT * FROM missingitems ';
   $records=mysql_query($sql);
	
?>
		<div class="page-header">
  

  <h1><p align="center">Missing Items</p></h1>
</div>
<br/>
<br/>
  <table class="table table-bordered table-hover table-inverse">
    <thead>
      <tr>
        <th>StudentID</th>
        <th>Description</th>
             </tr>
    </thead>
	<tbody>
    <?php
   
   while($employee=mysql_fetch_assoc($records))
   {
      echo "<tr>";
	  echo "<td>".$employee['StudentID']."</td>";
	  echo "<td>".$employee['Description']."</td>";
	  echo "</tr>";
	 
   }
?>
    </tbody>
  </table>

  <form action="  method="post" class="form-horizontal">

<!-- Form Name -->
<legend>Form Name</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="ID">Enter Entry to delete:</label>  
  <div class="col-md-4">
  <input name="ID" class="form-control input-md" id="Item" required="" type="text" placeholder="Eg.2">
    </div>
  </div>
</form>
  </div>
  </div> 
 </div>
  
</div>
</div>





</body>
</html>