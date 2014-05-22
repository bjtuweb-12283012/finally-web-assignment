<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">

<title>无标题文档</title>
</head>

<body>
<?php
	include "mysql_connect.php";
	$result = mysql_query("SELECT * FROM item");
	
	echo "<table class='table table-striped'>";
	while ($row = mysql_fetch_array($result))
	{
		echo "<tr>";
		echo "<td>";
		echo $row['title'];
		echo "</td>";
		echo "<td>";
		echo $row['mainbody'];
		echo "</td>";
		echo "</tr>";
	}
	
	echo "</table>";
?>


















</body>
</html>