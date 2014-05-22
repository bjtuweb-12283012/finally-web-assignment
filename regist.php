<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>注册</title>
<script src="log.js"></script>
 <!-- Loading Bootstrap -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="css/flat-ui.css" rel="stylesheet">
    <link href="css/demo.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/favicon.ico">
    <script src="js/bootstrap.min.js"></script>
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
</head>


<body>  
<iframe id="wetherinfo" name="wetherinfo" src="http://tianqi.3835.com/code/weather3.htm?id=&fc=2E93D9&imgurl=5&bgc=&days=1" frameBorder=0 width=320 height=20 marginwidth=0 marginheight=0 hspace=0 vspace=0 scrolling=no allowtransparency=true></iframe>


<center>
<a href="#">设为首页|</a>
<a href="#">收藏本站</a>
</center>
<center>
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
                <li><a href="#fakelink">Menu Item<span class="navbar-unread">1</span></a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Messages <b class="caret"></b></a>
                  <span class="dropdown-arrow"></span>
                  <ul class="dropdown-menu">
                    <li><a href="#">INTRODCTION</a></li>
                    <li><a href="#">HIS Achievement</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </li>
                <li><a href="#fakelink">About Us</a></li>
                <li><a href="#fakelink">About Us</a></li>
                <li><a href="#fakelink">About Us</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </nav><!-- /navbar -->
        </div>
        <div class="col-xs-3">
          <select name="herolist" value="mamba" class="select-block">
            <option value="0">the black mamba</option>
            <option value="1">小飞侠</option>
            <option value="2">KOBE BRYANT</option>
            <option value="3">the permenent 24</option>
            <option value="X-Men" selected="selected">科比</option>
            <option value="Crocodile">Crocodile</option>
          </select>
        </div>
      </div> <!-- /row -->
      </div>
      
      
      
      
<div class="container">
			<div class="row">
            <div class="col-xs-3">
            </div>
            
            
            <div class="col-xs-6">
            

<form action="sucsess.php"  onsubmit="return doCheck()" method="post" name="regist">
  
    <div class="login-form">
      <div class="form-group"> Name :
        <input type="text" class="form-control login-field" value="" placeholder="Enter your name" id="login-name" name="name" />
        <label class="login-field-icon fui-user" for="login-name"></label>
      </div>
      <div class="form-group"> password:
        <input type="password" class="form-control login-field" value="" placeholder="Password" id="login-pass" name="password"/>
        <label class="login-field-icon fui-lock" for="login-pass"></label>
        
        <div class="form-group"> confirm password:
        <input type="password" class="form-control login-field" value="" placeholder="Password" id="login-pass" name="password2"/>
        <label class="login-field-icon fui-lock" for="login-pass"></label>
      </div>
      <br/>
      <input type="submit" class="btn btn-primary btn-lg btn-block" value="Regist"/>
    </div>
  </div>
</form>
    </div></div>
   
		
</body>
</html>