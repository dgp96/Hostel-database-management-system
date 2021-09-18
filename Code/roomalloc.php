<?php
include('dbconnect.php');
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
?>

<?php
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
    $queryupdate2 = "UPDATE hostelroom SET NoOfOccupants = NoOfOccupants + 3 WHERE RoomNo = '$roomno' AND NoOfOccupants <= 3";
    if(!$duplication)
	{
        if(mysql_query($queryupdate) && mysql_query($queryupdate2))
            {
                ?>
                <script>alert('Room Allotment Successful');</script>
                <?php
            }
        else
        {
            ?>
            <script>alert('Room Allotment Failed');</script>
        <?php
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
      <a class="navbar-brand" href="#">HOSTEL AUTOMATION</a>
	  &nbsp; &nbsp;
	  <a class="navbar-brand" href="authhmpg1.php">HOME</a>
    </div>
   
	<ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php?logout">LOGOUT<span class="glyphicon glyphicon-log-out"></span></a></li>
    </ul>
  </div>
  
</nav>	

<div>
  <form class="form-horizontal" method="post">
<fieldset>

<!-- Form Name -->
<center><legend>Student Room Allotment</legend></center>
<div class="form-group">
  <label class="col-md-4 control-label" for="room">Room No.</label>
  <div class="col-md-2">
    <select id="room" name="room" class="form-control">
	<option selected disabled>Select a room:</option>
	<?php
		$json_string1 = file_get_contents("hostelroom.json");
		$parsed_json1 = json_decode($json_string1, true);

foreach($parsed_json1 as $key => $value)
{
   if($value['NoOfOccupants'] < '3'){
   echo '<option value="'.$value['RoomNo'].'">Room No. '.$value['RoomNo'].' -- Block '.$value['Block'].'</option>'.PHP_EOL;
   }
}
	?>
</select>
</div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="student1">Student 1</label>
  <div class="col-md-2">
    <select id="student1" name="student1" class="form-control">
	<option selected disabled>Select a person:</option>
	<?php
		$json_string2 = file_get_contents("students.json");
		$parsed_json2 = json_decode($json_string2, true);

foreach($parsed_json2 as $key => $value)
{
   if($value['RoomNo'] == 'D-45'){
   echo '<option value="'.$value['RegistrationID'].'">'.$value['RegistrationID'].' -- '.$value['FirstName'].' '.$value['LastName'].'</option>'.PHP_EOL;
   }
}
	?>
</select>
</div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="student2">Student 2</label>
  <div class="col-md-2">
    <select id="student2" name="student2" class="form-control">
	<option selected disabled>Select a person:</option>
	<?php
		$json_string2 = file_get_contents("students.json");
		$parsed_json2 = json_decode($json_string2, true);

foreach($parsed_json2 as $key => $value)
{
   if($value['RoomNo'] == 'D-45'){
   echo '<option value="'.$value['RegistrationID'].'">'.$value['RegistrationID'].' -- '.$value['FirstName'].' '.$value['LastName'].'</option>'.PHP_EOL;
   }
}
	?>
</select>
</div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="student1">Student 3</label>
  <div class="col-md-2">
    <select id="student3" name="student3" class="form-control">
	<option selected disabled>Select a person:</option>
	<?php
		$json_string2 = file_get_contents("students.json");
		$parsed_json2 = json_decode($json_string2, true);

foreach($parsed_json2 as $key => $value)
{
   if($value['RoomNo'] == 'D-45'){
   echo '<option value="'.$value['RegistrationID'].'">'.$value['RegistrationID'].' -- '.$value['FirstName'].' '.$value['LastName'].'</option>'.PHP_EOL;
   }
}
	?>
</select>
</div>
</div>
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="btn-submit"></label>
  <div class="col-md-4">
    <button id="btn-submit" name="btn-submit" class="btn btn-primary">Submit</button>
  </div>
</div>

</fieldset>
</form>
</div>

</body>
</html>