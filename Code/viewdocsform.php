<?php
 session_start();
 include_once 'dbconnect.php';
 ?>
 
 
 <html>
 <head>
 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="bootstrap-3.3.6/dist/css/bootstrap.min.css">
  <script src="bootstrap-3.3.6/docs/assets/js/vendor/jquery.min.js"></script>
  <script src="bootstrap-3.3.6/dist/js/bootstrap.min.js"></script>	
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


</body>
</html>