<?php
error_reporting(0);
?>
<!DOCTYPE html>
 <html >
   <head>
      <title> OPPO 忘记密码</title>
      <meta charset="utf-8">
		<link rel="stylesheet" href="css/oppo_login.css">
		<style>
		</style>
   </head>
   <body>
<?php include("data/dl-header.php");?>
	 <section id="main">
		 <p><img src="images/logo.png" alt=""></p>
		 <div id="model">
			 <p class="alert">
					 请输入您在本网站注册的邮箱信息
			 </p>
			 <form id="login-form" action="data/oppo_forgot-password.php" name="form1" method="post" enctype="multipart/form-data">
				 <input type="email" name="email" id="email" placeholder="请输入邮箱" autofocus ><br>
				 <span><input type="submit" id="bt-login" value="确 认" name="submit"/>
				 <a href="login.php"><h3 style="color: #005EA7;">登 陆</h3></a></span>
			 </form>
		 </div>
	 </section>
   </body>
   <script src="js/jquery-1.11.3.js"></script>
 </html>