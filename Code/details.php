<?php
include_once 'dbconnect.php';
$id=mysql_real_escape_string($_POST['ID']);
 $query = "SELECT * FROM studentdet WHERE RegistrationID = '$id'";
     $results = mysql_query($query);
?>

<html>
<head>
</head>
<body>

<?php
while ($row = mysql_fetch_array($results)) {
    echo '<tr>';
    foreach($row as $field) {
        echo '<td>' . htmlspecialchars($field) . '</td>';
    }
    echo '</tr>';
}
?>
</body>
</html>
