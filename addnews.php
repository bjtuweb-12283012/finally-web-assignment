<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>add</title>
<link href="bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="css/flat-ui.css" rel="stylesheet">
    <link href="css/demo.css" rel="stylesheet">
    <link href="geshi.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/favicon.ico">
<link href="bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="css/flat-ui.css" rel="stylesheet">
    <link href="css/demo.css" rel="stylesheet">
    <link href="geshi.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/favicon.ico">
    <script src="js/jquery-1.8.3.min.js"></script>
    <script src="js/jquery-ui-1.10.3.custom.min.js"></script>
    <script src="js/jquery.ui.touch-punch.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/bootstrap-switch.js"></script>
    <script src="js/flatui-checkbox.js"></script>
    <script src="js/flatui-radio.js"></script>
    <script src="js/jquery.tagsinput.js"></script>
    <script src="js/jquery.placeholder.js"></script>
    <script src="js/jquery.stacktable.js"></script>
    <script src="http://vjs.zencdn.net/4.3/video.js"></script>
    <script src="js/application.js"></script>
</head>
<body>
<div class="container">
    <div class="row demo-row">
        <div class="col-xs-10">
          <nav class="navbar navbar-inverse navbar-embossed" role="navigation">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-01">
                <span class="sr-only">Toggle navigation</span>
              </button>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse-01">
              <ul class="nav navbar-nav navbar-left">           
                <li><a href="Prifile.html">作者介绍(homework)<span class="navbar-unread">1</span></a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Function<b class="caret"></b></a>
                  <span class="dropdown-arrow"></span>
                  <ul class="dropdown-menu">
                  <li><a href="log.php">登录</a></li>
                    <li><a href="addnews.php">发帖子</a></li>
                    <li><a href="2.php">帖子列表</a></li>
                    
                    <li class="divider"></li>
                    <li><a href="#">待开发</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">友情链接<b class="caret"></b></a>
                  <span class="dropdown-arrow"></span>
                  <ul class="dropdown-menu">
                    <li><a href="baidu.html">百度（homework）</a></li>
                    <li><a href="http://www.renren.com">人人网</a></li>
                    <li><a href="http://www.google.com">google</a></li>
                    <li class="divider"></li>
                    <li><a href="#">待开发</a></li>
                  </ul>
                </li>
                <li><a href="3.php">About Us</a></li>
                <li><a href="zhuye.php">返回主页</a></li>
                
              </ul>
            </div><!-- /.navbar-collapse -->
          </nav><!-- /navbar -->
        </div>
      <div class="col-xs-2">
          <select name="herolist" value="mamba" class="select-block">
            <option value="0">星座</option>
            <option value="1">聊天</option>
            <option value="2">NBA</option>
            <option value="3">科比</option>
            <option value="X-Men" selected="selected">待开发</option>
           
          </select>
        </div
      ></div> <!-- /row -->
<?php
	include "mysql_connect.php";
?>
<br/>
<center>
<form action="handleadd.php" method="post">
	title:
    <input type="text" size="50" name="title"/>
    <br/>
    contents:<br/>
    <textarea name="mainbody" cols="50" rows="20" ></textarea>
    <br/>
    <br/>
    <input type="submit" class="btn btn-Success" value="submit" />
</form>
</center>
</body>
</html>