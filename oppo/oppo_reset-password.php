<!DOCTYPE html>
 <html >
   <head>
      <title> OPPO 重置密码</title>
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
		 <div id="model">
			 <p class="alert">
					 请在此处输入您的新密码
			 </p>
			 <form id="login-form" action="data/oppo_lookpassword.php" name="form1" method="post" enctype="multipart/form-data">
				 <input type="text" name="pw" placeholder="请输入新密码" autofocus><br>
				 <input type="text" name="qmm" placeholder="请再次输入新密码"><br>
				 <input type="submit" id="bt-login" value="确 认" name="submit"/>
				 <input type="hidden" value="<?php echo $_GET['email']?>" name="email">
				 <a href="register.php"><h3 style="color: #005EA7;">注 册</h3></a>
			 </form>
		 </div>
	 </section>
   </body>
   <script src="js/jquery-1.11.3.js"></script>
 </html>