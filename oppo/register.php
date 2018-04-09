<?PHP 
error_reporting(0);
session_unset();
session_destroy(); ?>
<!DOCTYPE html>
<html ng-app="myApp">
<meta charset="UTF-8">
<head>
    <title> OPPO 注册 </title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/oppo_register.css">
    <script src="js/angular.js"></script>
</head>
<body>
<?php include("data/dl-header.php");?>
<section id="main" >
    <div ng-controller="myCtrl">
        <p>注册OPPO账号</p>
        <div id="model" >
            <form name="form1" enctype="multipart/form-data" method="post" role="form" id="form-register" action="data/oppo_register.php" style="margin-left: 250px;">

                *  用户名：<input type="text" id="username" name="username" placeholder="请输入用户名" style="margin-left: 15px;"   class="form-control">
                <span>用户名可以包含数字和字母</span><br/>
                <h1></h1>
                *  密码：<input type="password" id="password" name="password" placeholder="请输入密码" style="margin-left: 30px;"   class="form-control">
                <span>6~16个字符，区分大小写</span><br>
                *  确认密码：<input type="password" id="password_confirm" name="password_confirm" placeholder="请再次输入密码" style="margin-left: 2px;"   class="form-control">
                <span>请您再次输入密码</span><br>
                *  邮箱：<input type="email" id="email" name="email" placeholder="请输入您的邮箱" style="margin-left: 30px;"  autofocus    >
                 <span>请输入有效的邮箱</span><br/><br>
                *  上传头像： <input type="file" name="myfile" id="myfile" style="background-color:#FFC"><br>

                *  验证码：<input id="yzm" placeholder="请输入验证码" style="margin-left: 15px;" name="yzm" type="text" class="ipt" autocomplete="off" />
                    <img src="data/yzmimage.php"  name="imageField" id="imageField" align="absmiddive"
                                           style="cursor: pointer;" onClick="javascript:newgdcode(this,this.src);"/><a
                        href="#" onClick="document.getElementById('imageField').src='data/yzmimage.php?'+Math.random()">
                       &nbsp;&nbsp;&nbsp;<font color="#005AA0">看不清？换一张！</font></a><br><br>
                       	
                       	<input type="checkbox"  style="width: 100px; height: 20px; margin-top: 20px;" required checked="checked" name="ty"/>
              
                
                    <a href="account.php" target="_blank"><font color="#005AA0">我同意《OPPO帐号注册协议》</font></a></span>
                
                <br/><br/><br/>
                <input type="submit"  value="立即注册" name="submit" id="bt-register" style="margin-left: 70px; margin-top: 20px; background-color:#2AAD6F;" />
                <a href="login.php" style="margin-left: 100px;"><font color="#005AA0">登 陆</font></a>
				<script language="javascript">
				    var yzm = document.getElementById("yzm");
				    function newgdcode(obj, url) {
				        obj.src = url + '?nowtime=' + new Date().getTime();
				        //后面传递一个随机参数，否则在IE7和火狐下，不刷新图片
				        yzm.value = "";
				    }
				</script>
            </form>
        </div>
    </div>
</section>
<!--<?php include("data/oppo_register.php");?>-->
<script src="js/jquery-1.11.3.js"></script>
<script src="js/oppo_register.js"></script>
</body>
</html>