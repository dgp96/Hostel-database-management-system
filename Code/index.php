<?php
session_start();
include_once 'dbconnect.php';
$query= "SELECT * FROM Notice";
$result = mysql_query($query);

if(isset($_SESSION['studentdet'])!="")
{
	header("Location: dbms12.php");
}

if(isset($_POST['btn-login']))
{
	$regid=mysql_real_escape_string($_POST['regid']);
	$studentpassword=mysql_real_escape_string($_POST['studentpassword']);
	
	$regid = trim($regid);
	$studentpassword = trim($studentpassword);
	
	$res=mysql_query("SELECT RegistrationID,Student_psswd FROM studentdet WHERE RegistrationID='$regid'");
	$row=mysql_fetch_array($res);
	
	$count = mysql_num_rows($res); // if regid/pass correct it returns must be 1 row
	
	if($count == 1 && $row['Student_psswd']==md5($studentpassword))
	{
		$_SESSION['studentdet'] = $row['RegistrationID'];
		header("Location: dbms12.php");?>
        <script>alert('studentdetname / Password Seems RIGHT !');</script>
        <?php
	}
	else
	{
		?>
        <script>alert('studentdetname / Password Seems Wrong !');</script>
        <?php
	}
	
}

if(isset($_POST['btn-login2']))
{
	$authid=mysql_real_escape_string($_POST['authid']);
	$authpassword=mysql_real_escape_string($_POST['authpassword']);
	
	$authid = trim($authid);
	$authpassword = trim($authpassword);
	
	$res=mysql_query("SELECT AuthorityID,Password FROM authoritydet WHERE AuthorityID='$authid'");
	$row=mysql_fetch_array($res);
	
	$count = mysql_num_rows($res); // if authid/authpassword correct it returns must be 1 row
	
	if($count == 1 && $row['Password']==$authpassword)
	{
		$_SESSION['studentdet'] = $row['AuthorityID'];
		header("Location: authhmpg1.php");
	}
	else
	{
		?>
        <script>alert('Username / Password Seems Wrong !');</script>
        <?php
	}
	
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="bootstrap-3.3.6/dist/css/bootstrap.min.css">
  <script src="bootstrap-3.3.6/docs/assets/js/vendor/jquery.min.js"></script>
  <script src="bootstrap-3.3.6/dist/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="style.css">
<style>
.notice{
 height:100px;
 width:50px;	
}

#maarquee{
	background-color:rgba(0,0,0,0.5);
}

</style>


<title>Homepage</title>
</head>
<body>	
<div id="before_navbar">
	<center>VJTI HOSTEL MANAGEMENT SYSTEM</center>
</div>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">HOSTEL MGMT</a>
    </div>
    <ul class="nav navbar-nav">
      
      
      <li><a href="studsignup.php">Register</a></li>
	  
	  <li><a href="visitor.php">Visitor</a></li>
    </ul>
	
  </div>
  
</nav>
<center>
<div class="container">
  <div class="row">
    <div class="col-md-12"><h1>LOGIN FOR</h1></div>
  </div>
  <div class="row">
    <div class="col-md-6"><a class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1">STUDENT</a>
    </div>
	<div class="col-md-6"><a class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2">AUTHORITY</a>
    </div>
    </div>

  	   <!-- Modal -->
  <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h2 class="modal-title"><strong>LOGIN</strong></h2>
        </div>
        <div class="modal-body">
          <p><center>
<div id="loginform">
<form method="post">
<table align="center" width="70%" border="0">
<tr>
<td><input class="form-control" type="text" name="regid" placeholder="Registration ID" required /></td>
</tr>
<tr>
<td><input class="form-control" type="password" name="studentpassword" placeholder="Password" required /></td>
</tr>
<tr>
<td><button type="submit" name="btn-login">GO</button></td>
</tr>

</table>
</form>
</div>
</center></p>
        </div>
        <div class="modal-footer">
		
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
	</div>
	
	  	   <!-- Modal -->
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h2 class="modal-title"><strong>LOGIN</strong></h2>
        </div>
        <div class="modal-body">
          <p><center>
<div id="loginform">
<form method="post">
<table align="center" width="70%" border="0">
<tr>
<td><input class="form-control" type="text" name="authid" placeholder="Authority ID" required /></td>
</tr>
<tr>
<td><input class="form-control" type="password" name="authpassword" placeholder="Password" required /></td>
</tr>
<tr>
<td><button type="submit" name="btn-login2">GO</button></td>
</tr>

</table>
</form>
</div>
</center></p>
        </div>
        <div class="modal-footer">
		
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
	</div>
<p class="notice">
<div class="col-md-offset-3 col-md-6" >

<marquee id="maarquee" onMouseOver="this.scrollAmount=2" onMouseOut="this.scrollAmount=3" scrollamount="3" direction="up" loop="true" width="30%">
<center>
<font color="white" size="+3"> 
<?php
 while($row = mysql_fetch_array($result)){
      echo $row['Date']."-".$row['NoticeDet']."</br>";
	  echo "---------<br/>";
 }

?>
</font><p>

</center>
</marquee>
</div>
</center>
</body>
</html>