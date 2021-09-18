<?php
include_once 'dbconnect.php';
$date=$_POST['date'];
$Notice=$_POST['Notice'];
$query="INSERT  INTO  Notice values('$date','$Notice') ";
$result=mysql_query($query);
?>

<html>
<body>

<script type="text/javascript">
<?php if($result){?>
alert("Success");<?php}
else{?> alert("Failed"); <?php}?>
window.location.href = 'StudentHomepage.php';
</script>
</body>
</html>