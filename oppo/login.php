<!DOCTYPE html>
 <html >
   <head>
      <title> OPPO 登录 </title>
      <meta charset="utf-8">
		<link rel="stylesheet" href="css/oppo_login.css">
	    <script src="js/angular.js"></script>
		<style>
		</style>
   </head>
   <body>
<?php include("data/dl-header.php");?>
	 <section id="main">
		 <p><img src="images/logo.png" alt=""></p>
		 <p>登录OPPO账号可享受更多的服务</p>
		 <div id="model">
			 <p class="alert">
					 请在此处输入您的登录信息
			 </p>
			 <form name="form1" method="post" enctype="multipart/form-data" role="form" id="login-form" action="data/oppo_login.php">
				 <input type="text" name="username" placeholder="请输入用户名" autofocus ><br>
				 <input type="password" name="password" placeholder="请输入账号密码"><br>
				 <a href="forgot-password.php">重置密码</a><a href="">账号申诉</a>
				 <input type="submit" id="bt-login" value="登 录" name="dl"/>
				 <a href="register.php">
				 	<input type="button" id='bt-register' value="注册OPPO账号"/></a>
				 <p><b class="lf" ></b>其他方式登录<b class="rt"></b></p>
				 <ul>
					 <li><img src="images/ico_qq.jpg" alt=""></li>
					 <li><img src="images/ico_wb.jpg" alt=""></li>
					 <li><img src="images/ico_alipay.jpg" alt=""></li>
					 <li><img src="images/ico_wx.jpg" alt=""></li>
				 </ul>
			 </form>
		 </div>
	 </section>
   </body>
   <script src="js/jquery-1.11.3.js"></script>
   <script src="js/oppo_login.js"></script>
 </html>