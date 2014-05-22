<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
     
	 include "mysql_connect.php";
	 $_comments=$_POST["comments"];
	 mysql_query("INSERT INTO comments(comments) VALUE('$_comments')") or die(mysql_error());
	 
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="refresh" content="1;url=1.php?id=1">
<title>加载中....</title>
</head>

<body>
</body>
</html>