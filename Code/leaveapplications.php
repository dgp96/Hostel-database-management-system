<?php
include_once 'dbconnect.php';

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
// approve condition
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Leave Application</title>
<link rel="stylesheet" href="bootstrap-3.3.6/dist/css/bootstrap.min.css">
  <script src="bootstrap-3.3.6/docs/assets/js/vendor/jquery.min.js"></script>
  <script src="bootstrap-3.3.6/dist/js/bootstrap.min.js"></script>
</script>
<script type="text/javascript">
function approve_id(id)
{
 if(confirm('Sure to Approve ?'))
 {
  window.location.href='leaveapplications.php?approve_id='+id;
 }
}

function reject_id(id)
{
 if(confirm('Sure to Reject ?'))
 {
  window.location.href='leaveapplications.php?reject_id='+id;
 }
}

function ladelete_id(id)
{
 if(confirm('Sure to Delete ?'))
 {
  window.location.href='leaveapplications.php?ladelete_id='+id;
 }
}
</script>
<style>
	th,td{
		text-align:center;
	}
</style>
</head>
<body>
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
</body>
</html>