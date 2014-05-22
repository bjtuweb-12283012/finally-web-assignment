<html>
<head>
      <meta charset="utf-8">
      <link href="bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="css/flat-ui.css" rel="stylesheet">
    <link href="css/demo.css" rel="stylesheet">
    <title>注册结果</title>
    </head>
    <body>
<?php
//$count = $_COOKIE["count"] ? $_COOKIE["count"] : 0;
$con = mysql_connect("localhost","root","niuniu");
if(!$con)
//$_name=$_POST[name];
{
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("blog2", $con);
$result = mysql_query("SELECT * FROM users");
  $logflag=true;
  while($row = mysql_fetch_array($result))
  	{
		if ($row['username'] == $_POST["name"] )
			{
			$logflag = false;
			break;
			}
	}
	if($logflag==true)
	{
$sql="INSERT INTO users (username,paw)
VALUES
('$_POST[name]','$_POST[password]')";
echo '<script type="text/javascript">alert("welcome")</script>!<br/>';
echo'<div class="demo-type-example">
            <center><h1><span class="demo-heading-note">亲，</span>恭喜注册成功啦</h1></center>
          </div>';
          echo "<meta  http-equiv=refresh content='0.5;url=zhuye1.php?id=".$_POST[name]."'>";
		  echo"<a href='1.php?id=".$row['id']."'>";
		  mysql_query($sql) or die(my_sqlerror());
	}
	else  
	{
		echo '<script type="text/javascript">alert("用户名已存在")</script>';
		echo '<center><h1><span class="demo-heading-note">用户名存在啦</span></h1></center><br/>';
		echo'<center><a href="regist.php">返回</a></center>';
	}
	
//if (!mysql_query($sql,$con))
  //{
  //die('Error: ' . mysql_error());
 // }
mysql_close($con);
?>

</body>
</html>
