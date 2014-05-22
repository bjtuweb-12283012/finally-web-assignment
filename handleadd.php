<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Language" content="zh-CN">
<meta http-equiv=refresh content="1;url=zhuye.php">
 <title>handle</title>
<title>无标题文档</title>
</head>

<body>
	<?php 
		include "mysql_connect.php";
		$_title = $_POST["title"];
		$_mainbody = $_POST["mainbody"];
		mysql_query("INSERT INTO item(title, mainbody) VALUES('$_title', '$_mainbody')") or die(mysql_error());	
	?>
</body>
</html>