<?php
   $con=mysql_connect("localhost","root","");
	mysql_select_db("dbms_hostel_mgmt",$con);
	$sql='SELECT * FROM missingitems ';
   $records=mysql_query($sql,$con);
	mysql_close($con);
	
?>
<html>
<head>

  <title>MissingItems</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<style>
body{
 background: URL("cool-wallpapers_7.png");
  background-repeat:no-repeat;
  background-attachment:fixed;
  background-size:cover;}
table{
text-align: center;
font-size: 30px;
}
th{
text-align: center;
}
</style>
<body>
<div class="container">
<div class="page-header">
  

  <h1><p align="center">Missing Items Database</p></h1>
</div>
<br/>
<br/>

  <table class="table table-bordered table-hover table-inverse">
    <thead>
      <tr>
        <th>StudentID</th>
        <th>Description</th>
		<th>Delete</th>
             </tr>
    </thead>
	<tbody>
    <?php
   
   while($missing=mysql_fetch_assoc($records))
   {
      echo "<tr>";
	  echo "<td>".$missing['StudentID']."</td>";
	  echo "<td>".$missing['Description']."</td>";
	  echo "<td><button id='btn-delete' name='btn-delete' class='btn btn-danger'>DELETE</button></td>";
	  echo "</tr>";
	 
   }
?>
    </tbody>
  </table>
</div>
</body>
</html>