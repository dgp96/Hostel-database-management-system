<?php 
session_start();
include_once 'dbconnectdbms.php';


if(isset($_POST['ss']))
{
  $email = mysql_real_escape_string($_POST['write2']);
  
  $email = trim($email);
  
  $res=mysql_query("SELECT  Student_id FROM student WHERE Student_id='$email'");
  $row=mysql_fetch_array($res);
  
  $count = mysql_num_rows($res); // if uname/pass correct it returns must be 1 row
  
  if($count == 1 )
  {
   $_SESSION['student'] = $row['Student_id'];

header("Location: student.php");
  }
  }

 else if(isset($_POST['ds']))
{
  $email = mysql_real_escape_string($_POST['write1']);
  
  $email = trim($email);
  
  $res=mysql_query("SELECT  D_id FROM doctor WHERE D_id='$email'");
  $row=mysql_fetch_array($res);
  
  $count = mysql_num_rows($res); // if uname/pass correct it returns must be 1 row
  
  if($count == 1 )
  {
    header("Location: doctor.php");
  }
  }

  ?>

<html>
<head>
<title>Homepage</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="bootstrap-3.3.6/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

</head>
<style>
#header{
width:100%;
height:25%;
border:1px solid black;
}
#vlogo{
height:100%;
width:18%;
float:left;
}
#vname{
vertical-align: middle; 
text-align:center;
font-size:40px;
}
#vimg{
height:100%;
width:20%;
float:right;
}
#leftdiv{
float:left;
width:50%;
height:75%;
border:1px solid black;
}
#rightdiv{
float:right;
width:50%;
height:75%;
border:1px solid black;
}
.imgs{
padding-left:50%;
padding-top:5%;
}
.centeralign
{
text-align:center;
}
</style>

<body>

<div id="header">
<img id="vlogo" src="logo.gif">
<img id="vimg" src="vjticover.gif"><br/>
<div id="vname">Veermata Jijabai Technological Institute</div>
<br/>
<div id="vname">Hostel Clinic Management</div>
</div>


<div class="button-group" id="accordion">

<div id="leftdiv">
<div class="imgs">
<span class="fa fa-user-md fa-5x"></span>
</div>
<button type="button" class="btn btn-info btn-block" data-toggle="collapse" data-parent="#accordion" data-target="#collapse1">DOCTOR</button>
      
      <div id="collapse1" class="collapse">
        <form name="dform" method="post">
		<br/>
        <label for="usr">Registration Number:</label><br/>
        <input type="text" class="form-control" id="usr" name="write1"><br/>
		<div class="centeralign"><button type="submit" name="ds" class="btn btn-primary">Submit</button></div>
		</form>
      </div>
</div>

<div id="rightdiv">
<div class="imgs">
<span class="fa fa-user fa-5x"></span>
</div>
<button type="button" class="btn btn-info btn-block" data-toggle="collapse" data-parent="#accordion" data-target="#collapse2">STUDENT</button>
 
        <div id="collapse2" class="collapse">
        <form name="sform" method="post">
		<br/>
        <label for="usr">Registration Number:</label><br/>
        <input type="text" class="form-control" id="usr"  name="write2"><br/>
		<div class="centeralign"><button type="submit" name="ss"  class="btn btn-primary">Submit</button></div>
		</form>
      </div>
    
</div>

</div>
</body>



