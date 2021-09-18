<?php
include_once 'dbconnect.php';
$id=mysql_real_escape_string($_POST['ID']);
 $query = "SELECT * FROM studentdet WHERE RegistrationID = '$id'";
     $results = mysql_query($query);
	 // delete condition
if(isset($_GET['commdelete_id']))
{
 $commsql_query="DELETE FROM comments WHERE primkey=".$_GET['commdelete_id'];
 mysql_query($commsql_query);
 header("Location: $_SERVER[PHP_SELF]");
}
// delete condition
// delete condition
if(isset($_GET['compdelete_id']))
{
 $compsql_query="DELETE FROM complaints WHERE primkey=".$_GET['compdelete_id'];
 mysql_query($compsql_query);
 header("Location: $_SERVER[PHP_SELF]");
}
// delete condition

// delete condition
if(isset($_GET['missdelete_id']))
{
 $misssql_query="DELETE FROM missingitems WHERE primkey=".$_GET['missdelete_id'];
 mysql_query($misssql_query);
 header("Location: $_SERVER[PHP_SELF]");
}
// delete condition
$noticedate=$_POST['date'];
$Notice=$_POST['Notice'];
$noticequery="INSERT  INTO  Notice values('$noticedate','$Notice') ";
$noticeresult=mysql_query($noticequery);
if($noticeresult){?>
<script> alert("Success");</script><?php }
	else{
		?><script> alert("Failed"); </script><?php
}


// approve condition
if(isset($_GET['approve_id']))
{
 $approve_query="UPDATE leaveapplications SET Status = 'Approved' WHERE primkey=".$_GET['approve_id'];
 mysql_query($approve_query);
 header("Location: $_SERVER[PHP_SELF]");
}

if(isset($_GET['reject_id']))
{
 $approve_query="UPDATE leaveapplications SET Status = 'Rejected' WHERE primkey=".$_GET['reject_id'];
 mysql_query($approve_query);
 header("Location: $_SERVER[PHP_SELF]");
}

if(isset($_GET['ladelete_id']))
{
 $ladelete_query="DELETE FROM leaveapplications WHERE primkey=".$_GET['ladelete_id'];
 mysql_query($ladelete_query);
 header("Location: $_SERVER[PHP_SELF]");
}

//get data and store in a json array
$query1 = "SELECT * FROM studentdet";
$query2 = "SELECT * FROM hostelroom";
$result1 = mysql_query($query1) or die("SQL Error 1: " . mysql_error());
$result2 = mysql_query($query2) or die("SQL Error 1: " . mysql_error());
while ($row = mysql_fetch_array($result1, MYSQL_ASSOC)) {
    $students[] = array(
	'FirstName' => $row['FirstName'],
	'LastName' => $row['LastName'],
    'RegistrationID' => $row['RegistrationID'],
    'RoomNo' => $row['RoomNo']
    );
}
file_put_contents('students.json', json_encode($students));
while ($row = mysql_fetch_array($result2, MYSQL_ASSOC)) {
    $hostelroom[] = array(
    'RoomNo' => $row['RoomNo'],
    'NoOfOccupants' => $row['NoOfOccupants'],
    'Block' => $row['Block'],
    'Floor' => $row['Floor']
    );
}
file_put_contents('hostelroom.json', json_encode($hostelroom));
if(isset($_POST['btn-submit']))
{
	$roomno=mysql_real_escape_string($_POST['room']);
	$student1=mysql_real_escape_string($_POST['student1']);
	$student2=mysql_real_escape_string($_POST['student2']);
	$student3=mysql_real_escape_string($_POST['student3']);
	
	$roomno = trim($roomno);
	$student1=trim($student1);
	$student2=trim($student2);
	$student3=trim($student3);
	$duplication = ($student1 == $student2)||($student1 == $student3)||($student3 == $student2);
    $queryupdate = "UPDATE studentdet SET RoomNo = '$roomno' WHERE RegistrationID IN ('$student1','$student2','$student3')";
    $queryupdate2 = "UPDATE hostelroom SET NoOfOccupants =  3 WHERE RoomNo = '$roomno'";
    if(!$duplication)
	{
        if(mysql_query($queryupdate) && mysql_query($queryupdate2))
            {
                ?>
                <script>alert('Room Allotment Successful');</script>
                <?php
				 header("Location: authhmpg1.php");
            }
        else
        {
            ?>
            <script>alert('Room Allotment Failed');</script>
        <?php
				 header("Location: $_SERVER[PHP_SELF]");
        }
	}
	else
        {
        ?>
            <script>alert('Duplication Error. Choose distinct students.');</script>
        <?php
        }
	
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Authority Homepage</title>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="bootstrap-3.3.6/dist/css/bootstrap.min.css">
  <script src="bootstrap-3.3.6/docs/assets/js/vendor/jquery.min.js"></script>
  <script src="bootstrap-3.3.6/dist/js/bootstrap.min.js"></script>
<script type="text/javascript">
function commdelete_id(id)
{
 if(confirm('Sure to Delete ?'))
 {
  window.location.href='authhmpg1.php?commdelete_id='+id;
 }
}
</script>
<script type="text/javascript">
function compdelete_id(id)
{
 if(confirm('Sure to Delete ?'))
 {
  window.location.href='authhmpg1.php?compdelete_id='+id;
 }
}
</script>
<script type="text/javascript">
function missdelete_id(id)
{
 if(confirm('Sure to Delete ?'))
 {
  window.location.href='authhmpg1.php?missdelete_id='+id;
 }
}
</script>
<script type="text/javascript">
function approve_id(id)
{
 if(confirm('Sure to Approve ?'))
 {
  window.location.href='authhmpg1.php?approve_id='+id;
 }
}

function reject_id(id)
{
 if(confirm('Sure to Reject ?'))
 {
  window.location.href='authhmpg1.php?reject_id='+id;
 }
}

function ladelete_id(id)
{
 if(confirm('Sure to Delete ?'))
 {
  window.location.href='authhmpg1.php?ladelete_id='+id;
 }
}
</script>

  <style>
    th,td{
	text-align:center;}

	.btn-sm{font-size:18px;background-color:#404040;color:#ccc;}
	.btn-sm:hover,.btn-sm:active{background-color:#ccc;color:#404040;}
	

	
  </style>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">HOSTEL AUTOMATION</a>
	  &nbsp; &nbsp;
	  <a class="navbar-brand" href="roomalloc.php">ROOM ALLOTMENT</a>
    </div>
   
	<ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php?logout">LOGOUT<span class="glyphicon glyphicon-log-out"></span></a></li>
    </ul>
  </div>
  
</nav>		
		
		

<div class="container-fluid">
  <div class="row">
  <div class="col-md-3">
  <div id="sidenavbar">
  <ul class="nav nav-pills nav-stacked">
    <li class="active"><a data-toggle="pill" href="#home" class="mylink">Home</a></li>
    <li><a data-toggle="pill" href="#missing" class="mylink">View Missing</a></li>
    <li><a data-toggle="pill" href="#leave" class="mylink">View leave application</a></li>
    <li><a data-toggle="pill" href="#comm" class="mylink">View Comments</a></li>
	<li><a data-toggle="pill" href="#comp" class="mylink">View Complaints</a></li>
	<li><a data-toggle="pill" href="#fee" class="mylink">View Fee Receipt</a></li>
	<li><a data-toggle="pill" href="#notice" class="mylink">Create Notice</a></li>
	<li><a data-toggle="pill" href="#view" class="mylink">View Profile</a></li>
  </ul>
  </div>
  </div>
  <div class="tab-content col-md-9">
<!--Home-->
    <div id="home" class="tab-pane fade in active">
      <div class="jumbotron">
		<h1>Welcome to</h1>
		<h1>Authority Console</h1>
	  </div>
    </div>
<!--Add New Programme-->	
	
<div id="fee" class="tab-pane fade">
		<h1>Fee Receipt Checker</h1><br>
		<br>
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
<div id="view" class="tab-pane fade">
<h1>View Student Info</h1><hr>
 <form   method="post" class="form-horizontal">
<fieldset>


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

<div id="notice" class="tab-pane fade">
  <h1>Create Notice</h1><br>
	  <form class="form-horizontal" method="post">

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
<input type="submit" value="Submit Notice" class="btn btn-submit"/>
</fieldset>
</form>
	
	
</div>

<div id="comm" class="tab-pane fade">
	<center>

<div class="container">
<div class="page-header">
  <h1><p align="center">Comments by Students</p></h1>
</div>
<br/>
<br/>
    <table class="table table-bordered table-hover table-inverse">
	<thead>
      <tr>
        <th>StudentID</th>
        <th>Description</th>
		<th></th>
      </tr>
    </thead>
	<tbody>
    <?php
 $commsql_query="SELECT * FROM comments";
 $result_set=mysql_query($commsql_query);
 while($row=mysql_fetch_row($result_set))
 {
  ?>
        <tr>
        <td><?php echo $row[1]; ?></td>
        <td><?php echo $row[2]; ?></td>
        <td><button class="btn btn-danger" onclick="javascript:commdelete_id('<?php echo $row[0]; ?>')">DELETE</button></td>
        </tr>
        <?php
 }
 ?></tbody>
    </table>
    </div>
	</center>
</div>
<div id="comp" class="tab-pane fade">
		<center>

<div class="container">
<div class="page-header">
  <h1><p align="center">Complaints by Students</p></h1>
</div>
<br/>
<br/>
    <table class="table table-bordered table-hover table-inverse">
	<thead>
      <tr>
        <th style="align:center;">StudentID</th>
        <th align="center">Description</th>
		<th align="center"></th>
      </tr>
    </thead>
	<tbody>
    <?php
 $compsql_query="SELECT * FROM complaints";
 $result_set=mysql_query($compsql_query);
 while($row=mysql_fetch_row($result_set))
 {
  ?>
        <tr>
        <td><?php echo $row[1]; ?></td>
        <td><?php echo $row[2]; ?></td>
        <td><button class="btn btn-danger" onclick="javascript:compdelete_id('<?php echo $row[0]; ?>')">DELETE</button></td>
        </tr>
        <?php
 }
 ?></tbody>
    </table>
    </div>
</center>
	</div>
<div id="missing" class="tab-pane fade">
		<center>

<div class="container">
<div class="page-header">
  <h1><p align="center">Missing Items Database</p></h1>
</div>
<br/>
<br/>
    <table class="table table-bordered table-hover table-inverse"; width="50px">
	<thead>
      <tr>
        <th style="align:center;">StudentID</th>
        <th align="center">Description</th>
		<th align="center"></th>
      </tr>
    </thead>
	<tbody>
    <?php
 $misssql_query="SELECT * FROM missingitems";
 $result_set=mysql_query($misssql_query);
 while($missrow=mysql_fetch_row($result_set))
 {
  ?>
        <tr>
        <td><?php echo $missrow[2]; ?></td>
        <td><?php echo $missrow[1]; ?></td>
        <td><button class="btn btn-danger" onclick="javascript:missdelete_id('<?php echo $missrow[0]; ?>')">DELETE</button></td>
        </tr>
        <?php
 }
 ?></tbody>
    </table>
    </div>
</center>
</div>

<div id="leave" class="tab-pane fade">

<center>

<div class="container">
<div class="page-header">
  <h1><p align="center">Leave Applications by Students</p></h1>
</div>
<br/>
<br/>
    <table class="table table-bordered table-hover table-inverse">
	<thead>
      <tr>
        <th>Student ID</th>
        <th>Leave Duration</th>
		<th>Reason For Leave</th>
		<th>Destination</th>
		<th colspan="3"></th>
      </tr>
    </thead>
	<tbody>
    <?php
 $approve_query="SELECT * FROM leaveapplications";
 $result_set=mysql_query($approve_query);
 while($row=mysql_fetch_row($result_set))
 {
  ?>
        <tr id="tr<?php echo $row[0]; ?>">
        <td><?php echo $row[1]; ?></td>
        <td><?php echo $row[2]; ?></td>
        <td><?php echo $row[3]; ?></td>
        <td><?php echo $row[4]; ?></td>
        <td><button class="btn btn-success" onclick="approve_id('<?php echo $row[0]; ?>')">APPROVE</button></td>
		<td><button class="btn btn-info" onclick="reject_id('<?php echo $row[0]; ?>')">REJECT</button></td>
		<td><button class="btn btn-danger" onclick="ladelete_id('<?php echo $row[0]; ?>')">DELETE</button></td>
        </tr>
        <?php
 }
 ?></tbody>
    </table>
    </div>
</div>
</div>
</center>

</div>
</div><!--container ends here-->
<!--
</div>

</div>
-->
		<!--</div>



</div>


	</div>
</div>
</div>
</div> -->
</body>
</html>
