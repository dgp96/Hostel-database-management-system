<?php
session_start();
include_once 'dbconnect.php';
$img = $_POST["receipt"];
?>

<html>
<head>
 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="bootstrap-3.3.6/dist/css/bootstrap.min.css">
  <script src="bootstrap-3.3.6/docs/assets/js/vendor/jquery.min.js"></script>
  <script src="bootstrap-3.3.6/dist/js/bootstrap.min.js"></script>
  
  <style>
    .image{
	}
  </style>
</head>

<body>


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="StudentHomepage.php">HOSTEL MGMT</a>
    </div>
   
	<ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php?logout">LOGOUT<span class="glyphicon glyphicon-log-out"></span></a></li>
    </ul>
  </div>
  
</nav>

<div class="image">
  <img src="upload\<?php echo "f".$img; ?>.png"> 
  </div>
  
  <h1><?php echo $img ?></h1>
  
  
  
  
  
  
</body>