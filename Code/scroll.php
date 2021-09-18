<?php
include_once 'dbconnect.php';
$query= "SELECT * FROM Notice";
$result = mysql_query($query);

?>
<html>
<head>
<style>
.marquee{

 height:1500px;
 width:2000px;
}

</style>

</head>
<body>
<div class="marquee">

<marquee bgcolor="#000080" onMouseOver="this.scrollAmount=2" onMouseOut="this.scrollAmount=1" scrollamount="1" direction="up" loop="true" width="30%">
<center>
<font color="#ffffff" size="+1"> 
<?php
 while($row = mysql_fetch_array($result)){
      echo $row['Date']."-".$row['NoticeDet']."</br>";
 }

?>
</font><p>

</center>
</marquee>
</div>
</body>
</html>