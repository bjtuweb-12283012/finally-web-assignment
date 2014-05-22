function addf()
{
	window.external.AddFavorite('http://localhost/zuoye3.zhuye.php','你的网站名');
}     

function doCheck(){
	var flag=1;
if(document.regist.name.value==""){

alert('请输入你的用户名！');          
flag=0;
}     
if(document.regist.password.value==""){ 
alert('请输入你的密码！'); flag=0;  
} 

if(document.regist.password.value!=document.regist.password2.value)
	{
	flag=0;
	alert('密码输入不一致');
	}
	if(flag==1)
	return true;
	else return false;
}


	
	