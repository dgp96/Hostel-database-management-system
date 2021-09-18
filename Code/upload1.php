<?php
session_start();
include_once 'dbconnect.php';
$id = $_SESSION['studentdet'];
// Upload and Rename File

if (isset($_POST['submit']))
{
	$filename = $_FILES["file"]["name"];
	$file_basename = substr($filename, 0, strripos($filename, '.')); // get file extention
	$file_ext = substr($filename, strripos($filename, '.')); // get file name
	$filesize = $_FILES["file"]["size"];
	$allowed_file_types = array('.doc','.png','.jpeg','.jpg');	

	if (in_array($file_ext,$allowed_file_types) && ($filesize < 200000))
	{	
		// Rename file
		$newfilename ="f".$id . $file_ext;
		if (file_exists("upload/" . $newfilename))
		{
			// file already exists error
			echo "You have already uploaded this file.";
		}
		else
		{		
			move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $newfilename);
			?>	
			<script>alert('File uploaded successfully.');</script>
			<script type="text/javascript">
window.location.href = 'dbms12.php';
</script>
			<?php	
		}
	}
	elseif (empty($file_basename))
	{	
		// file selection error
		?>	
			<script>alert('Please select a file to upload.');</script>
			<script type="text/javascript">
window.location.href = 'dbms12.php';
</script>
			<?php
		
	} 
	elseif ($filesize > 20000000)
	{	
		// file size error
		?>	
			<script>alert('The file you are trying to upload is too large.');</script>
			<script type="text/javascript">
window.location.href = 'dbms12.php';
</script>
<?php
		
	}
	else
	{
		// file type error
		echo "Only these file typs are allowed for upload: " . implode(', ',$allowed_file_types);
		unlink($_FILES["file"]["tmp_name"]);
		?>
			<script type="text/javascript">
			function doStuff()
{
  setTimeout('', 1000) //wait ten seconds before continuing
}
window.location.href = 'dbms12.php';
</script>

		<?php
	}
}
?>

