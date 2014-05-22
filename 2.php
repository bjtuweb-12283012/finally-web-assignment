<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>index</title>
<script src="log.js"></script>
 <!-- Loading Bootstrap -->
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
<iframe id="wetherinfo" name="wetherinfo" src="http://tianqi.3835.com/code/weather3.htm?id=&fc=2E93D9&imgurl=5&bgc=&days=1" frameBorder=0 width=320 height=20 marginwidth=0 marginheight=0 hspace=0 vspace=0 scrolling=no allowtransparency=true></iframe>
<center><button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
 网站介绍
</button>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">网站介绍</h4>
      </div>
      <div class="modal-body">
        该网站完成的功能主要是：
         <br/>
        1.简单的登录，注册验证功能。  <br/>
        2.发表文章的功能（title+mainbody），发表后会自动显示<br/>在主页中。  <br/>
        3.读帖子，并添加了留言板的功能，这一方面没有进行仔细的UI设计，但简单的实现了这个功能，缺陷还有很多，我也会继续完善。  <br/>
        4.加入了上两次作业的内容，一个简单地自我介绍页面，和百度的UI设计页面，都在网站的导航上面。  <br/>
        5.其他功能，我会不断努力去学习，尝试着去添加，提高我的能力。  <br/>
      </div>
      <div class="modal-footer">
      <p> 牛子健 安全1201班 </p>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</center>

<center>
<a href="#">设为首页|</a>
<a href="#">收藏本站</a>
<a href="javascript:window.external.addFavorite('http://shop58904164.taobao.com/','迪士尼专卖')">加入收藏 </a>
</center>
<center>
<a id="x" href="regist.php">注册|</a>
<a id="y" href="log.php">登陆</a>
</center>
	<div class="container">
    <div class="row demo-row">
        <div class="col-xs-9">
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
                
              </ul>
            </div><!-- /.navbar-collapse -->
          </nav><!-- /navbar -->
        </div>
      <div class="col-xs-3">
          <select name="herolist" value="mamba" class="select-block">
            <option value="0">星座</option>
            <option value="1">聊天</option>
            <option value="2">NBA</option>
            <option value="3">科比</option>
            <option value="X-Men" selected="selected">待开发</option>
           
          </select>
        </div
      ></div> <!-- /row -->
      </div>
<?php

 $con = mysql_connect("localhost","root","niuniu") or die(mysql_error());
	mysql_select_db("news", $con);
	
	$result = mysql_query("SELECT * FROM item");
	echo '<table class="table">';

	while($row = mysql_fetch_array($result))
	{	echo"<tr>";
		echo "<td>";
		echo"<a href='1.php?id=".$row['id']."'>";
		echo $row['title'];
		echo "</a>";
		echo "</td>";
		echo"</tr>";
		
	}
	echo '</table>';
?>
</body>
</html>