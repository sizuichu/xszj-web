<?php //输入密码后访问本页内容
$password = "gzdxxszj20100430";//这里是密码 
$p = "";if(isset($_COOKIE["isview"]) and $_COOKIE["isview"] == $password){ 
$isview = true;}else{ 
if(isset($_POST["pwd"])){ 
if($_POST["pwd"] == $password){ 
setcookie("isview",$_POST["pwd"],time()+3600*3);$isview = true;}else{$p = (empty($_POST["pwd"])) ? "需要密码才能查看，请输入密码。" : "
<div style=\"color:#F00;\">密码不正确，请重新输入。</div>";} 
}else{$isview = false;$p = "请输入密码查看，获取密码可联系我。QQ:1625621257";}}?>
<?php if($isview){?>
<!DOCTYPE html><html><head><meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<title>请输入密码查看</title>
<style type="text/css">body{background:none;}
.passport{width:400px;position:absolute;left:50%;
top:50%;margin-left:-200px;
margin-top:-55px;font-size:18px;
text-align:center;line-height:30px;color:red;}
</style>
</head><body>
<div class="passport">

<iframe frameborder="0" width="450" height="452" src="https://v.qq.com/iframe/player.html?vid=o05594wph3d&tiny=0&auto=0" allowfullscreen></iframe>

<a href="#" onClick="javaScript:history.go(-1)">返回上一页</a>
</div>
</body></html> 
<?php }else{?>
<!DOCTYPE html><html><head><meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<title>请输入查看密码</title> 
<style type="text/css">
body{background:none;}
.passport{border:1px solid red;
background-color:#FFFFCC;width:400px;
height:100px;position:absolute;left:49.9%;
top:49.9%;margin-left:-200px;margin-top:-55px;
font-size:14px;text-align:center;
line-height:30px;color:#746A6A;}
</style>
</head><body>
<div class="passport"><div style="padding-top:20px;"> 
<form action="" method="post" style="margin:0px;">输入查看密码 
<input type="password" name="pwd" /> <input type="submit" value="查看" /> 
</form> 
<?php echo $p;?> 
</div></div> 

<a href="#" onClick="javaScript:history.go(-1)">返回上一页</a>

</body></html> 
<?php }?> 
