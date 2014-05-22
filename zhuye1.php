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
</center>
<center>

<?php
echo "欢迎";
echo $_GET["id"];
echo "|";
?>
<a  href="zhuye.php">注销</a>

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
      
      <div class="row">
      <div class="col-xs-5">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">     
             
    <div class="item active">
     <a href="http://www.nba.com"> <img src="picture/1.jpg" width="400" height="300" alt="kobe bryant"></a>
       
      <div class="carousel-caption">
      <strong>kebo,come on!</strong>
      </div>
    </div>
                 
    <div class="item">
     <a href="http://www.nba.com"> <img src="picture/2.jpg" width="400" height="300" alt="kobe bryant"></a>
       
      <div class="carousel-caption">
      <strong>kebo,come on!</strong>
      </div>
    </div>
                 
    <div class="item">
     <a href="http://www.nba.com"> <img src="picture/3.jpg" width="400" height="300" alt="kobe bryant"></a>
       
      <div class="carousel-caption">
      <strong>kebo,come on!</strong>
      </div>
    </div>
    
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
  </div>
</div>
     
     <div class="col-xs-7">
			<ol>
				<li>
					<a href="http://news.baidu.com">新闻资讯</a>
				</li>
				<li>
					<a href="http://list.video.baidu.com/nba2012.html">体育竞技</a>
				</li>
				<li>
					<a href="http://www.sina.com">娱乐八卦</a>
				</li>
				<li>
					<a href="http://tech.sina.com">前沿科技</a>
				</li>
				<li>
					<a href="#">环球财经</a>
				</li>
				<li>
					<a href="#">天气预报</a>
				</li>
				<li>
					<a href="#">房产家居</a>
				</li>
				<li>
					<a href="#">网络游戏</a>
				</li>
			</ol>

     </div>
     </div>
     <br/>
     <div class="row">
      <div class="col-xs-5">
				
					<div class="thumbnail">
						
						<div class="caption">
							<h3>
								科比 布莱恩特							</h3>
							<p>
								科比·布莱恩特（1978年8月23日－），美国职业篮球运动员，自1996年起效力于NBA洛杉矶湖人队是前NBA篮球运动员乔·布莱恩特的儿子。
科比是一名得分后卫，同时又具有打小前锋位置的能力。他被认为是NBA最全面的球员之一，自从1999年以来每一年都入选NBA最佳阵容，并且在他参加的最近的12届NBA全明星赛（2010、2013赛季全明星赛因伤缺战）中都有不错的表现。[1]2007年，ESPN的体育记者投票评选出了史上最伟大的得分后卫，结果科比仅次于乔丹排名第二位。
							</p>
							<p>
								<a class="btn btn-primary" href="http://baike.baidu.com/view/16030.htm?from_id=133066&type=search&fromtitle=科比&fr=aladdin">浏览</a> <a class="btn" href="#">分享</a>
							</p>
						</div>
					</div>
			</div>
            <div class="col-xs-7">
            <div class="thumbnail">

            <a href="addnews.php">发表</a>
            
          
            
            <ol>
				<?php
				include "mysql_connect.php";	
				$result = mysql_query("SELECT * FROM item");
				while($row = mysql_fetch_array($result))
				{
					
					echo"<li>";
					echo"<a href='1.php?id=".$row['id']."'>";
					echo $row['title'];
					echo"</a>";
					echo "</li>";	
					

				}
				?>
                
			</ol>
            <ul class="pagination">
  	<li><a href="#">&laquo;</a></li>
  	<li><a href="#">1</a></li>
  	<li><a href="#">2</a></li>
 	 <li><a href="#">3</a></li>
  	<li><a href="#">4</a></li>
 	 <li><a href="#">5</a></li>
 	 <li><a href="#">&raquo;</a></li>
	</ul>
</div>
            </div>
            
		</div>
	</div>
</div>
  

</body>
</html><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
</body>
</html>