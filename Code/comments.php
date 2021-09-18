<?php
include_once 'dbconnect.php';

// delete condition
if(isset($_GET['commdelete_id']))
{
 $commsql_query="DELETE FROM comments WHERE primkey=".$_GET['commdelete_id'];
 mysql_query($commsql_query);
 header("Location: $_SERVER[PHP_SELF]");
}
// delete condition
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Comments</title>
<link rel="stylesheet" href="bootstrap-3.3.6/dist/css/bootstrap.min.css">
  <script src="bootstrap-3.3.6/docs/assets/js/vendor/jquery.min.js"></script>
  <script src="bootstrap-3.3.6/dist/js/bootstrap.min.js"></script>
</script>
<script type="text/javascript">
function commdelete_id(id)
{
 if(confirm('Sure to Delete ?'))
 {
  window.location.href='comments.php?commdelete_id='+id;
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
  <h1><p align="center">Comments by Students</p></h1>
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
</div>
</div>
</center>
</body>
</html>