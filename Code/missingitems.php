<?php
include_once 'dbconnect.php';

// delete condition
if(isset($_GET['missdelete_id']))
{
 $misssql_query="DELETE FROM missingitems WHERE primkey=".$_GET['missdelete_id'];
 mysql_query($misssql_query);
 header("Location: $_SERVER[PHP_SELF]");
}
// delete condition
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Missing Items</title>
<link rel="stylesheet" href="bootstrap-3.3.6/dist/css/bootstrap.min.css">
  <script src="bootstrap-3.3.6/docs/assets/js/vendor/jquery.min.js"></script>
  <script src="bootstrap-3.3.6/dist/js/bootstrap.min.js"></script>
</script>

<script type="text/javascript">
function missdelete_id(id)
{
 if(confirm('Sure to Delete ?'))
 {
  window.location.href='missingitems.php?missdelete_id='+id;
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
  <h1><p align="center">Missing Items Database</p></h1>
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
</body>
</html>