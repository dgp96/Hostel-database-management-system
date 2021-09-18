<?php
error_reporting( E_ALL & ~E_DEPRECATED & ~E_NOTICE );
if(!mysql_connect("localhost","dharmit","11111"))
{
	die('oops connection problem ! --> '.mysql_error());
}
if(!mysql_select_db("hostel_demo"))
{
	die('oops database selection problem ! --> '.mysql_error());
}

?>